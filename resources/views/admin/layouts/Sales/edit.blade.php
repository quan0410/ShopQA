@extends('admin.layouts.app')
@section('title', 'Edit Sale')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Sale</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route("admin.sale.update", ['sale'=> $sale->id])}}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$sale->title}}" name="title" placeholder="Deal hot mùa hè mới" required />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" value="{{$sale->content}}" name="content" placeholder="Deal hot mùa hè mới có sản phẩm hot trong ngày" required />
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="product_id" class="form-label">Product</label>
                            <select class="form-select" id="product_id" name="product_id">
                                @foreach($products as $product)
                                    <option {{$sale->product_id === $product->id ? "selected" : " "}} value="{{ $product->id }}">
                                        {{ $product->id }} -
                                        {{ \App\Models\Product::findOrFail($product->id)->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="mb-10">
                                <label for="time_start" class="col-md-2 col-form-label">Start</label>
                                <div class="col-md-10">
                                    <input
                                        class="form-control"
                                        type="datetime-local"
                                        value="{{ $sale->time_start }}"
                                        id="time_start"
                                        name="time_start"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="time_end" class="col-md-2 col-form-label">End</label>
                                <div class="col-md-10">
                                    <input
                                        class="form-control"
                                        type="datetime-local"
                                        value="{{ $sale->time_end }}"
                                        id="time_end"
                                        name="time_end"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="show" class="form-label">Show sales</label>
                            <select class="form-select" id="show" name="is_show">
                                <option {{$sale->is_show == 1 ? 'selected' : ''}} value="0">Hidden</option>
                                <option {{$sale->is_show == 1 ? 'selected' : ''}} value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
