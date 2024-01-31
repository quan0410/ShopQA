@extends('admin.layouts.app')
@section('title', 'Edit Product')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Color Size</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route("admin.product.update", ['product' => $product->id])}}" method="post"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf


                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
