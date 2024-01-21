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

    public function edit(Order $order)
    {
        $orderDetails = $order->orderDetails()->get();
        return view('admin.layouts.orders.edit', compact('order', 'orderDetails'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('admin.order.index')->withSuccess('You have successfully updated a Order!');
    }

    public function detail(Order $order)
    {
        $orderDetails = $order->orderDetails()->get();
        return view('admin.layouts.orders.detail', compact('orderDetails', 'order'));
    }
}
