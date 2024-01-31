<?php

namespace App\Observers;

use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;

class OrderObserver
{
    /**
     * Handle the OrderDetail "created" event.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return void
     */
    public function created(OrderDetail $orderDetail)
    {
        DB::table("color_size")
            ->where("size_id", $orderDetail->size_id)
            ->where("color_id", $orderDetail->color_id)
            ->where("qty" ,">", 0)
            ->decrement('qty',$orderDetail->qty);
    }

    /**
     * Handle the OrderDetail "updated" event.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return void
     */
    public function updated(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the OrderDetail "deleted" event.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return void
     */
    public function deleted(OrderDetail $orderDetail)
    {
        DB::table("color_size")
            ->where("size_id", $orderDetail->size_id)
            ->where("color_id", $orderDetail->color_id)
            ->increment('qty',$orderDetail->qty);
    }

    /**
     * Handle the OrderDetail "restored" event.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return void
     */
    public function restored(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the OrderDetail "force deleted" event.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return void
     */
    public function forceDeleted(OrderDetail $orderDetail)
    {
        //
    }
}
