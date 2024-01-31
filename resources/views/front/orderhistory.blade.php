@extends('front.layout.master')
@section('title', 'Shop QA')
@section('body')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text d-flex justify-content-between">
                        <h4>Lịch sử đơn hàng</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-4">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center">Mã đơn hàng</th>
                <th class="text-center">Số điện thoại</th>
                <th class="text-center">Địa chỉ</th>
                <th class="text-center">Phương thức thanh toán</th>
                <th class="text-center">Trạng thái đơn hàng</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @isset($orders)
                @foreach($orders as $order)
                    <tr>
                        <td class="text-center">
                            {{$order->code}}
                        </td>
                        <td class="text-center">
                            {{$order->phone}}
                        </td>
                        <td class="text-center">
                            {{$order->address}}
                        </td>
                        <td class="text-center">
                            {{$order->method === "cod" ? "Thanh toán trực tiếp" : "Thanh toán Online"}}
                        </td>
                        <td class="text-center">
                            @if($order->status === "waiting")
                                Chờ xử lý
                            @elseif($order->status === "processing")
                                Đang xử lý
                            @elseif($order->status === "packaged")
                                Đã đóng gói
                            @elseif($order->status === "sending")
                                Đang gửi
                            @elseif($order->status === "completed")
                                Đã hoàn thành
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </section>
    @if($orders->lastpage() >1)
        <div class="card mt-5 p-3">
            {{ $orders->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
