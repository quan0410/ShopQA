@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    <h1>Chào mừng đến với Shop QA</h1>
    <div class="d-flex gap-5 align-items-center">
        <h4 class="fw-bold py-3 mb-4">
{{--            <span class="text-muted fw-light">Doanh thu shop tháng {{ now()->format('m/Y') }}</span>--}}
            <span class="text-muted fw-light">Doanh thu shop theo tháng</span>
        </h4>
{{--        <div style="height: fit-content">--}}
{{--            <div class="row fw-bold py-3 mb-4">--}}
{{--                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="select__month__option__right">--}}
{{--                        <select class="select-month">--}}
{{--                            @foreach($listMonth as $Month)--}}
{{--                                <option {{ request()->get('month') == "$Month->month" ? 'selected' : '' }} value="{{route('admin.home.index', getParamsArray(['month' => "$Month->month"]))}}">Tháng {{$Month->month}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="d-flex gap-5 mb-4">
        <div class="bg-opacity-50 bg-revenue">
            <span>Doanh thu tháng :</span>
            <span>{{number_format($revenue)}}đ</span>
        </div>
        <div class="bg-opacity-50 bg-revenue">
            <span>Lãi xuất tháng :</span>
            <span>{{number_format($cost)}}đ</span>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Email</th>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Interest</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($orderDetails as $orderDetail)
                    <tr>
                        <td class="text-center">
                            <strong>{{$orderDetail->id}}</strong>
                        </td>
                        <td>{{$orderDetail->email}}</td>
                        <td>{{$orderDetail->product_name}}</td>
                        <td>{{$orderDetail->qty}}</td>
                        <td>{{number_format($orderDetail->total)}}đ</td>
                        <td>
                            {{
                                isSaleProduct(\App\Models\Product::find($orderDetail->product_id)) ?
                                number_format((getPriceSale(\App\Models\Product::find($orderDetail->product_id))  - $orderDetail->original_price) * $orderDetail->qty) :
                                number_format((($orderDetail->price - $orderDetail->original_price) * $orderDetail->qty))
                                }}đ
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if($orderDetails->lastpage() >1)
        <div class="card mt-5 p-3">
            {{ $orderDetails->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
