@extends('admin.layouts.app')
@section('title', 'Order Detail')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Order Detail</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#">
                         <div class="row">
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="name">User Name</label>
                                 <input type="text" class="form-control" id="name" value="{{$order->name}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="email">Email</label>
                                 <input type="text" class="form-control" id="email" value="{{$order->email}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="phone">Phone</label>
                                 <input type="text" class="form-control" id="phone" value="{{$order->phone}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="address">Address</label>
                                 <input type="text" class="form-control" id="address" value="{{$order->address}}" readonly/>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label" for="method">Payment Method</label>
                                 <input type="text" class="form-control" id="method" value="{{$order->method}}" readonly/>
                             </div>
                             <div class="mb-3">
                                 <label for="form-label" class="method">Trạng thái đơn hàng</label>
                                 <select class="form-select" id="status" name="status" disabled>
                                     <option {{$order->status === 'waiting' ? 'selected' : " "}} value="waiting">Chờ xử lý</option>
                                     <option {{$order->status === 'cancel' ? 'selected' : " "}} value="cancel">Huỷ đơn hàng</option>
                                     <option {{$order->status === 'processing' ? 'selected' : " "}} value="processing">Đang xử lý</option>
                                     <option {{$order->status === 'packaged' ? 'selected' : " "}} value="packaged">Đã đóng gói</option>
                                     <option {{$order->status === 'sending' ? 'selected' : " "}} value="sending">Đang gửi</option>
                                     <option {{$order->status === 'completed' ? 'selected' : " "}} value="completed">Đã hoàn thành</option>
                                 </select>
                             </div>
                         </div>
                        <div class="row bg-secondary">
                            <label>Order Detail</label>
                            @foreach($orderDetails as $orderDetail)
                                <div class="mb-3 col-4">
                                    <label class="form-label">product Name</label>
                                    <input type="text" class="form-control" value="{{$orderDetail->product->name}}" readonly/>
                                </div>
                                <div class="mb-3 col-4">
                                    <label class="form-label">Qty</label>
                                    <input type="text" class="form-control" value="{{$orderDetail->qty}}" readonly/>
                                </div>
                                <div class="mb-3 col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Size</label>
                                        <input type="text" class="form-control" value="{{$orderDetail->size->name}}" readonly/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">product Name</label>
                                        <input type="text" class="form-control" value="{{$orderDetail->color->name}}" readonly/>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
