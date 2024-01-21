@extends('admin.layouts.app')
@section('title', 'Edit Product')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Edit Product</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route("admin.product.update", ['product' => $product->id])}}" method="post"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                   value="{{$product->name}}" name="name" placeholder="Name product" required/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sku">Sku</label>
                            <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku"
                                   value="{{$product->sku}}" name="sku" placeholder="Sku product" required/>
                            @error('sku')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="weight">Weight</label>
                            <input type="number" class="form-control @error('weight') is-invalid @enderror" id="weight"
                                   value="{{$product->weight}}" name="weight" placeholder="Weight product"/>
                            @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                   value="{{$product->price}}" name="price" placeholder="Price (VNĐ)" required/>
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="discount_price">Discount Price</label>
                            <input type="number" class="form-control @error('discount_price') is-invalid @enderror"
                                   id="discount_price" value="{{$product->discount_price}}" name="discount_price"
                                   placeholder="Discount price (VNĐ)"/>
                            @error('discount_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="brands" class="form-label">Brands</label>
                            <select class="form-select" id="brands" name="brand_id">
                                @foreach($brands as $brand)
                                    <option
                                        {{ ($product->brand_id === $brand->id) ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Categories" class="form-label">Categories</label>
                            <select class="form-select" id="Categories" name="product_category_id">
                                @foreach($categories as $category)
                                    <option
                                        {{ ($product->product_category_id === $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                   id="description" value="{{ $product->description }}" name="description"
                                   placeholder="Description product" required/>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                                      name="content" placeholder="Content product" cols="30"
                                      rows="8">{{$product->content}}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <div class="card">
                                <h5 class="card-header">Upload Image</h5>
                                <div class="input-group d-flex align-items-center justify-content-around">
                                    <div class="w-50">
                                        <input type="file" class="form-control h-25" id="image" name="image">
                                    </div>
                                    <img src="{{asset(Storage::url($product->image))}}"
                                         class="image-upload {{$product->image ? '' : 'd-none'}}" alt="image blog"
                                         height="150" width="100">
                                </div>
                            </div>
                        </div>
                        <div class="input-group control-group lst increment">
                            <div class="list-input-hidden-upload">
                                <input type="file" name="path[]" id="file_upload" class="form-control hidden" multiple>
                                @foreach($productImages as $image )
                                    <img src="{{asset(Storage::url($image->path))}}"
                                         class="image-upload {{$image->path ? '' : 'd-none'}}" alt="image blog"
                                         height="80" width="60">
                                @endforeach

                            </div>
                        </div>
                        <div class="mb-3 add-size-color">
                            <label class="form-label" for="content">Add Size and color</label>
                            <div class="size-color-product">
                                @foreach($sizes as $size)
                                    <div class="d-flex row mb-4 sub-size-color">
                                        <div class="size col-4">
                                            <label class="form-label">Size</label>
                                            <input type="text" class="form-control @error('size') is-invalid @enderror"
                                                   value="{{$size->name}}" name="sizes[]" placeholder="Size product" readonly/>
                                            @error('size')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        @foreach($size->colors as $colors_qty)
                                            <div class="color col-4">
                                                <label class="form-label">Color</label>
                                                <input type="hidden" class="form-control"
                                                       value="{{$colors_qty->id}}" name="colors[]" placeholder="Size product" readonly/>
                                                <select class="form-select select-color" name="colors[]" disabled>
                                                    @foreach($colors as $color)
                                                        <option {{$colors_qty->id === $color->id? 'selected' : '' }} value="{{$color->id}}">
                                                            {{$color->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('color')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="qty col-2">
                                                <label class="form-label">Qty</label>
                                                <input type="number"
                                                       class="form-control @error('qty') is-invalid @enderror"
                                                       value="{{$colors_qty->pivot->qty}}"
                                                           name="qty[]" placeholder="Qty product"/>
                                                @error('qty')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        @endforeach
                                        <div class="col-2 d-flex align-items-center">
                                            <div>
                                                <span class="btn btn-danger"
                                                      id="removeAttribute">Remove Attribute</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="size-color d-none">
                                <div class="d-flex row mb-4 sub-size-color">
                                    <div class="size col-4">
                                        <label class="form-label">Size</label>
                                        <input type="text" class="form-control @error('size') is-invalid @enderror"
                                               name="sizes[]" placeholder="Size product"/>
                                        @error('size')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="color col-4">
                                        <label class="form-label">Color</label>
                                        <select class="form-select select-color" name="colors[]" multiple>
                                            @foreach($colors as $color)
                                                <option value="{{$color->id}}">{{$color->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="qty col-2">
                                        <label class="form-label">Qty</label>
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror"
                                               name="qty[]" placeholder="Qty product"/>
                                        @error('qty')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-2 d-flex align-items-center">
                                        <div>
                                            <span class="btn btn-danger" id="removeAttribute">Remove Attribute</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-success" id="addAttribute">Add Attribute</span>
                        </div>
                        <div class="mb-3">
                            <label for="featured" class="form-label">featured</label>
                            <select class="form-select" id="featured" name="featured">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
