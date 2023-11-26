<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index()
    {
        if (!empty(session('cart')) && Auth::check()){
            $user = Auth::user();
            $cart = session('cart');
            $total= session('total_cart');

            return view("front.checkout", compact("user", "cart", "total"));
        }
        return redirect()->route("login");
    }

    public function store(Request $request)
    {

        $cart = session('cart');
        $data = $request->validate([
            'name'  => 'required',
            'email'  => 'nullable',
            'phone'  => 'required',
            'address'  => 'required',
            'note'  => 'nullable',
            'method'  => 'required',
        ]);
        $order = Auth()->user()->order()->create($data);
        $orderDetails= [];
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
        session()->forget('cart');
        session()->forget('total_cart');
        session()->flash('success', 'Place order successfully!');
        return redirect()->route("home");
    }
}
