@extends('admin.layouts.app')
@section('title', 'Edit Slider')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Slider</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route("admin.slider.update", ['slider'=> $slider->id])}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$slider->title}}" name="title" placeholder="Deal hot mùa hè mới" required />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" value="{{$slider->content}}" name="content" placeholder="Deal hot mùa hè mới có sản phẩm hot trong ngày" required />
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="url">Link Url</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" value="{{$slider->url}}" name="url" placeholder="Link Url" required />
                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <div class="card">
                                <h5 class="card-header">Upload Image</h5>
                                <div class="card-body demo-vertical-spacing demo-only-element">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image" value="{{substr($slider->image,7)}}" name="image" required>
                                        <label class="input-group-text" for="image">Upload</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="show" class="form-label">Show Slider</label>
                            <select class="form-select" id="show" name="is_show">
                                <option {{$slider->is_show == 1 ? 'selected' : ''}} value="0">Hidden</option>
                                <option {{$slider->is_show == 1 ? 'selected' : ''}} value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
