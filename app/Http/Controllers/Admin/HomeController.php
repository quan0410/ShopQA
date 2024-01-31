<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
//        dd(isset($request->month));
        $month = Carbon::now()->month;
        if (isset($request->month)) {
            $month =$request->month;
        } elseif ($request->path() === "admin") {
            $month = Carbon::now()->month;
        }
        $orderDetails = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->where('orders.status', 'completed')
            ->whereMonth('order_details.created_at',$month)
            ->select(
                'orders.id',
                'orders.name',
                'orders.email',
                'order_details.product_id',
                'order_details.qty',
                'products.name as product_name',
                'products.original_price',
                'order_details.price',
                'order_details.discount_price',
                'order_details.total'
            )->paginate(10);
        $data = $this->revenue($month);
        $listMonth = $this->getMonth();
        $revenue = $data["revenue"];
        $cost = $data["cost"];
//        $orderDetails->whereMonth('created_at',Carbon::now()->month)->get();
//        dd($orderDetails);
        return view('admin.home', compact('orderDetails', 'cost', 'revenue', 'listMonth'));
    }

    public function getMonth() {
        $listMonth = Order::whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('order_details')
                ->whereRaw('orders.id = order_details.order_id')
                ->where('orders.status', 'completed');
        })
            ->selectRaw('MONTH(orders.created_at) as month')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
//        $listMoth = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
//            ->where('orders.status', 'completed')
//            ->selectRaw('MONTH(order_details.created_at) as month')
//            ->whereExists('month')
//            ->GroupBy('month')->get();
        return $listMonth;
    }
    public function revenue($month) {
        $revenue = 0;
        $cost = 0;
        $orderDetails = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->where('orders.status', 'completed')
            ->whereMonth('order_details.created_at',$month)
            ->select(
                'orders.id',
                'orders.name',
                'orders.email',
                'order_details.product_id',
                'order_details.qty',
                'products.name as product_name',
                'products.original_price',
                'order_details.price',
                'order_details.discount_price',
                'order_details.total'
            )->get();
        if (isset($orderDetails)) {
            foreach ($orderDetails as $orderDetail) {
                if ($orderDetail->discount_price > 0) {
                    $cost += ($orderDetail->original_price - $orderDetail->discount_price) * $orderDetail->qty;
                }
                $revenue += $orderDetail->total;
                $cost += ($orderDetail->original_price - $orderDetail->price) * $orderDetail->qty;
            }
        }
        return ["revenue" => $revenue, "cost" => $cost];
    }
}
