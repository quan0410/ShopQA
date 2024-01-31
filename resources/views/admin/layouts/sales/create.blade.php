@extends('admin.layouts.app')
@section('title', 'Create Sale')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Create Sale</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route("admin.sale.store")}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                   name="title" placeholder="Deal hot mùa hè mới" value="{{ @old('title') }}" required/>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content"
                                   name="content" value="{{ @old('content') }}"
                                   placeholder="Deal hot mùa hè mới có sản phẩm hot trong ngày" required/>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="d-flex mb-3">
                            <div class="mb-10">
                                <label for="time_start" class="col-md-2 col-form-label">Start</label>
                                <div class="col-md-10">
                                    <input
                                        class="form-control @error('time_start') is-invalid @enderror"
                                        type="datetime-local"
                                        value="{{ @old('time_start') }}"
                                        id="time_start"
                                        name="time_start"
                                        required
                                    />
                                    @error('time_start')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="time_end" class="col-md-2 col-form-label">End</label>
                                <div class="col-md-10">
                                    <input
                                        class="form-control @error('time_end') is-invalid @enderror"
                                        type="datetime-local"
                                        value="{{ @old('time_end') }}"
                                        id="time_end"
                                        name="time_end"
                                        required
                                    />
                                    @error('time_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="percent" class="form-label">Percent</label>
                            <input type="text" name="percent" id="percent" required placeholder="0"
                                   value="{{ @old('percent') }}"
                                   class="form-control @error('percent') is-invalid @enderror">
                            @error('percent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="show" class="form-label">Show sales</label>
                            <select class="form-select" id="show" name="is_show">
                                <option value="0">Hidden</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <div class="card">
                            <div class="d-flex justify-content-between mx-4 align-items-center">
                                <h5 class="card-header">Table Product</h5>
                                {{--                                <div class="navbar-nav align-items-center">--}}
                                {{--                                    <div class="nav-item d-flex align-items-center">--}}
                                {{--                                        <i class="bx bx-search fs-4 lh-0"></i>--}}
                                {{--                                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td><input type="checkbox" class="cb-product-all"></td>
                                        <th class="text-center">Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Sku</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Discount Price</th>
                                        <th class="text-center">Featured</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0" id="tb-products">
                                        @foreach($products as $product)
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox" name="user_ids[]" value="{{$product->id}}"
                                                           class="form-check cb-product">
                                                </td>
                                                <td class="text-center">
                                                    <strong>{{$product->id}}</strong>
                                                </td>
                                                <td><img src="{{ asset(Storage::url($product->image)) }}" height="100"
                                                         width="100" alt="image Product"></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->sku}}</td>
                                                <td>
                                                    {{$product->brand->name ?? ''}}
                                                </td>
                                                <td>
                                                    {{$product->category->name ?? ''}}
                                                </td>
                                                <td class="text-center">{{number_format($product->price)}}đ</td>
                                                <td class="text-center">{{number_format($product->discount_price)}}đ
                                                </td>
                                                <td class="text-center">{{ $product->featured}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if($products->lastpage() >1)
                                <span class="btn btn-primary btn-load-more mt-3" id="btn-load-more" data-get="{{route('sale.product.load')}}" asset="{{asset(Storage::url(''))}}">Load More</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
