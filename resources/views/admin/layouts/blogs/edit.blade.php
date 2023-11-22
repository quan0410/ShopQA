@extends('admin.layouts.app')
@section('title', 'Edit Blog')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Blog</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route("admin.blog.update", ['blog' => $blog->id])}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$blog->title}}" name="title" placeholder="Quảng bá về category" required />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" value="{{$blog->content}}" name="content" placeholder="Hot mùa hè mới có sản phẩm mới" required />
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categories</label>
                            <select class="form-select" name="category">
                                @foreach($categories as $category)
                                    <option {{$blog->category === $category->name ? 'selected' : '' }} value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="card">
                                <h5 class="card-header">Upload Image</h5>
                                <div class="card-body demo-vertical-spacing demo-only-element">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image" name="image" required>
                                        <label class="input-group-text" for="image">Upload</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
