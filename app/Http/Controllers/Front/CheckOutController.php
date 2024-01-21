<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index()
    {
        if (!empty(session('cart')) && Auth::check()) {
            $user = Auth::user();
            $cart = session('cart');
            $total = session('total_cart');

            return view("front.checkout", compact("user", "cart", "total"));
        }
        return redirect()->route("login");
    }

    public function store(Request $request)
    {

        $cart = session('cart');
        $data = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone' => 'required',
            'address' => 'required',
            'note' => 'nullable',
            'method' => 'required',
        ]);
        $data['code'] = $request->post('code');
        $data['status'] = 'waiting';
        $order = Auth()->user()->order()->create($data);
        $orderDetails = [];
        foreach ($cart as $orderDetail) {
            $total = $orderDetail->product->discount_price > 0 ?
                $orderDetail->product->discount_price * $orderDetail->qty :
                $orderDetail->product->price * $orderDetail->qty;
            $orderDetails[] = [
                'order_id' => $order->id,
                'product_id' => $orderDetail->product_id,
                'qty' => $orderDetail->qty,
                'color_id' => $orderDetail->color->id,
                'size_id' => $orderDetail->id,
                'price' => $orderDetail->product->price,
                'discount_price' => $orderDetail->product->discount_price,
                'total' => $total,
            ];
        }
        OrderDetail::insert($orderDetails);
        if ($data['method'] == 'payment') {
            return redirect($this->create($request)) ;
        }
        session()->forget('cart');
        session()->forget('total_cart');
        session()->flash('success', 'Place order successfully!');
        return redirect()->route("home");
    }

    public function create(Request $request)
    {


        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('checkout.return');
        $vnp_TmnCode = "3CYOB8SR";//Mã website tại VNPAY
        $vnp_HashSecret = "EJBDXYITHLSPTWKJJARPBNEEBKMVFYIN"; //Chuỗi bí mật

        $vnp_TxnRef = $request->code;
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = session('total_cart') * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();
        //Add Params
        $inputData = array(
            "vnp_Version" => "2.1.0", //Phiên bản cũ là 2.0.0, 2.0.1 thay đổi sang 2.1.0
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";


        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return $vnp_Url;
    }

    public function return(Request $request)
    {
        $order = Order::where('code',$request->vnp_TxnRef)->first();
        if ($request->vnp_ResponseCode == "00") {
            $order->update(['status'=>'processing']);
            session()->forget('cart');
            session()->forget('total_cart');
            session()->flash('success', 'Place order successfully!');
            session()->flash('success', 'Payment success!');
            return redirect()->route('home')->with('success', 'Payment success!');
        }
        $order->orderDetails()->delete();
        $order->delete();
        session()->flash('error', 'Error during payment, please try again later!');
        return redirect()->route('checkout.index');
    }
}
