<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'completed')->get();
        $revenue = 0;
        foreach ($orders as $order) {
            $orderDetails = $order->orderDetails;
            foreach ($orderDetails as $orderDetail) {
                $revenue += $orderDetail->total;
            }
        }
        return view('admin.home', compact('revenue'));
    }
}
