@extends('admin.layouts.app')
@section('title', 'Orders')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List Orders</span></h4>
    <div class="card">
        <div class="d-flex justify-content-between mx-4 align-items-center">
            <h5 class="card-header">Table Orders</h5>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Method</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($orders)
                    @foreach($orders as $order)
                        <tr>
                            <td class="text-center">
                                <strong>{{$order->id}}</strong>
                            </td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->method}}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route("admin.order.detail", ['order' => $order->id])}}">
                                            <i class="bx bxs-eyedropper me-1"></i>
                                                Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="{{route("admin.order.edit", ['order' => $order->id])}}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @if($orders->lastpage() >1)
        <div class="card mt-5 p-3">
            {{ $orders->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
