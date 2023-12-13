@extends('admin.layouts.app')
@section('title', 'Product')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List Product</span></h4>
    <div class="card">
        <div class="d-flex justify-content-between mx-4 align-items-center">
            <h5 class="card-header">Table Product</h5>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                </div>
            </div>
            <div class="d-flex">
                <a href="{{route("admin.product.create")}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Sku</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Discount Price</th>
                    <th class="text-center">Featured</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($products)
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center">
                                <strong>{{$product->id}}</strong>
                            </td>
                            <td><img src="{{ asset(Storage::url($product->image)) }}" height="100" width="100" alt="image Product"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->sku}}</td>
                            <td>
                                {{$product->brand->name ?? ''}}
                            </td>
                            <td>
                                {{$product->category->name ?? ''}}
                            </td>
                            <td class="text-center">{{number_format($product->price)}}đ</td>
                            <td class="text-center">{{number_format($product->discount_price)}}đ</td>
                            <td class="text-center">{{ $product->featured}}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route("admin.product.edit", ['product' => $product->id])}}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('form-destroy-{{$product->id}}').submit()">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>
                                        <form action="{{ route("admin.product.destroy",['product' => $product->id]) }}" id="form-destroy-{{$product->id}}" method="post">
                                            @method('delete')
                                            @csrf
                                        </form>
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
    @if($products->lastpage() >1)
        <div class="card mt-5 p-3">
            {{ $products->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
