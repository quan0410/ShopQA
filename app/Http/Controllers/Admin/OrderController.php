<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('admin.layouts.orders.list', compact('orders'));
    }

    public function detail(Order $order)
    {
        $orderDetails = $order->orderDetails()->get();
        return view('admin.layouts.orders.detail', compact('orderDetails', 'order'));
    }
}
