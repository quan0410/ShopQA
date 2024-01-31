@extends('front.layout.master')
@section('title', 'Shop QA')
@section('nice-select-js', asset('front/js/jquery.nice-select.min.js'))
@section('body')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route("home")}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="{{route("shop.index")}}">
                                <input type="text" placeholder="Search..." name="search" value="{{request("search")}}">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="fillter-product">
                                <form action="{{route("shop.index")}}">
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#fillter-product">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll">
                                                        @foreach($categories as $category)
                                                            <li>
                                                                <a href="{{route("shop.index",getParamsArray(["ct" => $category->id]))}}" class="{{request()->get('ct') == $category->id ? 'active' : ''}}">{{$category->name}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" data-parent="#fillter-product">
                                            <div class="card-body">
                                                <div class="shop__sidebar__brand">
                                                    <ul class="list-brand">
                                                        @foreach($brands as $brand)
                                                            <li>
                                                                <a href="{{ route("shop.index",getParamsArray(["brand" => $brand->id]) ) }}" class="{{request()->get('brand') == $brand->id ? 'active' : ''}}">{{$brand->name}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                        </div>
                                        <div id="collapseThree" class="collapse show" data-parent="#fillter-product">
                                            <div class="card-body">
                                                <div class="shop__sidebar__price">
                                                    <ul>
                                                        <li><a href="{{ route("shop.index",getParamsArray(["max" => "200000"]) ) }}" class="{{request()->get('max') == "200000" ? 'active' : ''}}">{{number_format(0)}} - {{number_format(200000)}}</a></li>
                                                        <li><a href="{{ route("shop.index",getParamsArray(["min" => "200000","max" => "400000"]) ) }}" class="{{request()->get('min') == "200000" &&  request()->get('max') == "400000"? 'active' : ''}}">{{number_format(200000)}} - {{number_format(400000)}}</a></li>
                                                        <li><a href="{{ route("shop.index",getParamsArray(["min" => "400000","max" => "800000"]) ) }}" class="{{request()->get('min') == "400000" &&  request()->get('max') == "800000"? 'active' : ''}}">{{number_format(400000)}} - {{number_format(800000)}}</a></li>
                                                        <li><a href="{{ route("shop.index",getParamsArray(["min" => "800000"]) ) }}" class="{{request()->get('min') == "800000" ? 'active' : ''}}">{{number_format(800000)}} +</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                        </div>
                                        <div id="collapseFour" class="collapse show" data-parent="#fillter-product">
                                            <div class="card-body">
                                                <div class="shop__sidebar__size">
                                                    @foreach($sizes as $size)
                                                        <a href="{{ route("shop.index",getParamsArray(["size" => $size]) ) }}" class="size-filter-{{$size}}"></a>
                                                        <label class="{{request()->get('size') == $size ? "active" : ""}} size-filter" for="{{$size}}">{{$size}}
                                                            <input type="radio" id="{{$size}}">
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                        </div>
                                        <div id="collapseFive" class="collapse show" data-parent="#fillter-product">
                                            <div class="card-body">
                                                <div class="shop__sidebar__color">
                                                    @foreach($colors as $color)
                                                        <a href="{{ route("shop.index",getParamsArray(["color" => $color->id]) ) }}" class="color-filter-{{$color->id}}"></a>
                                                        <label class="{{request()->get('color') == $color->id ? "active" : ""}} color-filter" for="{{$color->id}}" style="background-color: {{$color->code}}"><span style="opacity: 0">{{$color->id}}</span><input type="radio" id="{{$color->id}}">
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of {{$products->total()}} results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by:</p>
                                    <select class="select-sort-by">
                                        <option {{ request()->get('sort') == 'featured' ? 'selected' : '' }} value="{{ route('shop.index',getParamsArray(['sort' => 'featured','by' => 'DESC'])) }}">Product : Featured</option>
                                        <option {{ request()->get('sort') == 'product' && request()->get('by') == 'ASC' ? 'selected' : '' }} value="{{ route('shop.index',getParamsArray(['sort' => 'product','by' => 'ASC'])) }}">Product : Old to New</option>
                                        <option {{ request()->get('sort') == 'product' && request()->get('by') == 'DESC' ? 'selected' : '' }} value="{{ route('shop.index',getParamsArray(['sort' => 'product','by' => 'DESC']))  }}">Product : New to Old</option>
                                        <option {{ request()->get('sort') == 'price' && request()->get('by') == 'ASC' ? 'selected' : '' }} value="{{ route('shop.index',getParamsArray(['sort' => 'price','by' => 'ASC'])) }}">Price : Low To High</option>
                                        <option {{ request()->get('sort') == 'price' && request()->get('by') == 'DESC' ? 'selected' : '' }} value="{{ route('shop.index',getParamsArray(['sort' => 'price','by' => 'DESC'])) }}">Price : High To Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <img class="product__item__pic set-bg" src="{{asset(Storage::url($product->image))}}">
                                @if(isSaleProduct($product))
                                    <span class="label text-danger">{{ percentDiscountPrice($product->price, getPriceSale($product))}}%</span>
                                @elseif($product->featured)
                                    <span class="label">Hot</span>
                                @endif
                                <div class="product__item__text">
                                    <a href="{{route("product.index",[$product->sku])}}" class="name-product">{{$product->name}}</a>
                                    <div class="Product-price">
                                        @if(isSaleProduct($product))
                                            <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                            <span class="discount-price">{{number_format(getPriceSale($product))}} VNĐ</span>
                                        @else
                                            <span class="price">{{number_format($product->price)}} VNĐ</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $products->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
