<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public const STATUS_CANCEL = "cancel";

    public function index(Request $request)
    {
        $search = $request->search ?? '';
        $orders = Order::where('orders.name', 'like', "%$search%")->orderBy('created_at' , 'desc')->paginate(10);
        return view('admin.layouts.orders.list', compact('orders'));
    }

    public function edit(Order $order)
    {
        $orderDetails = $order->orderDetails()->get();
        return view('admin.layouts.orders.edit', compact('order', 'orderDetails'));
    }

    public function update(Request $request, Order $order)
    {
        $orderDetails = $order->orderDetails()->get();
        $order->update($request->all());
        if ($request['status'] = self::STATUS_CANCEL) {
            $this->updateQty($orderDetails);
        }
        return redirect()->route('admin.order.index')->withSuccess('You have successfully updated a Order!');
    }

    public function detail(Order $order)
    {
        $orderDetails = $order->orderDetails()->get();
        return view('admin.layouts.orders.detail', compact('orderDetails', 'order'));
    }

    public function updateQty($orderDetails)
    {
        foreach ($orderDetails as $item) {
            DB::table("color_size")
                ->where("size_id", $item->size_id)
                ->where("color_id", $item->color_id)
                ->increment('qty',$item->qty);
        }
    }
}
