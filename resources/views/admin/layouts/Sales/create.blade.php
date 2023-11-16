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
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Deal hot mùa hè mới" required />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Deal hot mùa hè mới có sản phẩm hot trong ngày" required />
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
                                    <option value="{{ $product->id }}">{{ $product->id }} - {{ $product->name }}</option>
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
                                        value="{{Carbon\Carbon::now()->format('d/m/Y H:i')}}"
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
                                        value="{{Carbon\Carbon::now()->format('d/m/Y H:i')}}"
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
                                <option value="0">Hidden</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
