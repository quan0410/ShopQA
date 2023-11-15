@extends('admin.layouts.app')
@section('title', 'Edit Brand')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Brand</h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{route("admin.brand.update", ['brand'=> $brand->id])}}" method="post">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$brand->name}}" placeholder="Nike" required minlength="2"/>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
