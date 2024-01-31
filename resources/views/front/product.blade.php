@extends('front.layout.master')
@section('title', 'Product Detail')
@section('nice-select-js', asset('front/js/jquery.nice-select.min.js'))
@section('body')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{ route("home") }}">Home</a>
                            <a href="">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($product->productImage as $image)
                                <li class="nav-item image-mini">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-{{$image->id}}" role="tab">
                                        <div class="product__thumb__pic set-bg"
                                             data-setbg="{{asset(Storage::url($image->path))}}"></div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            @foreach($product->productImage as $image)
                                <div class="tab-pane" id="tabs-{{$image->id}}" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="{{asset(Storage::url($image->path))}}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$product->name}}</h4>
                            <div class="rating">
                                @for ($i = 0; $i < 5; $i++)
                                    @if($i < $averageRate)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor
                                <span>({{$product->reviews_count}})</span>
                            </div>
                            <h3>
                                @if(isSaleProduct($product))
                                    <span class="discount-price">{{number_format(getPriceSale($product))}} VNĐ</span>
                                    <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                @else
                                    <span class="price">
                                    {{number_format($product->price)}} VNĐ
                                </span>
                                @endif
                            </h3>
                            <form action="{{route("add.cart")}}" method="post">
                                @csrf
                                <input type="hidden" name="productId" value="{{ $product->id }}">
                                <div class="product__details__option">
                                    <div class="product__details__option__size">
                                        <span>Size:</span>
                                        @foreach($product->sizes as $size)
                                            <label class="size {{$loop->first ? "active" : ""}}" size="{{$size->id}}">
                                                {{$size->name}}
                                                <input class="product-size" type="radio"
                                                       {{$loop->first ? "checked" : ""}} name="sizeId"
                                                       id="{{$size->id}}" value="{{$size->id}}">
                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="product__details__option__color">
                                        <span>Color:</span>
                                        @foreach($product->sizes as $size)
                                            @foreach($size->colors as $color)
                                                <label class="c-{{$color->id}} product-color color-{{$size->id}}"
                                                       color="{{$color->id}}" qty="{{$color->pivot->qty}}"
                                                       style="background-color: {{$color->code}}">
                                                    <input type="radio" id="sp-{{$color->id}}" name="colorId"
                                                           value="{{ $color->id }}">
                                                </label>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input class="product-detail-qty" type="number" value="1" name="quantity"
                                                   min="1" max="">
                                        </div>
                                    </div>
                                    <input type="submit" class="primary-btn" value="add to cart" id="add-cart"/>
                                </div>
                                <div class="product__details__last__option">
                                    <h5><span>Guaranteed Safe Checkout</span></h5>
                                    <ul>
                                        <li><span>SKU:</span>{{$product->sku}}</li>
                                        <li><span>Categories:</span> Clothes</li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description"
                                       role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#content" role="tab">Additional
                                        information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#review" role="tab">Customer
                                        Previews</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">{{$product->description}}</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="review" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        @foreach($product->reviews as $review)
                                            @if($review->user)
                                                <!-- show review-->
                                                <div class="review">
                                                    <div class="information">
                                                        <div class="user">
                                                            <div class="name-user">{{$review->user->name}}</div>
                                                            <div class="rating">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    @if($i < $review->rate)
                                                                        <i class="fa fa-star"></i>
                                                                    @else
                                                                        <i class="fa fa-star-o"></i>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="commtent-product">
                                                            {{$review->content}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- add review-->
                                        <form class="add-review"
                                              action="{{route('create.review', ['product_id' => $product->id])}}"
                                              method="post">
                                            @csrf
                                            <div class="rate-user">
                                                <label class="title" for="review">Your Rating</label>
                                                <div id="rating">
                                                    <input type="radio" id="star5" name="rate" value="5"/>
                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                                    <input type="radio" id="star4" name="rate" value="4"/>
                                                    <label class="full" for="star4"
                                                           title="Pretty good - 4 stars"></label>

                                                    <input type="radio" id="star3" name="rate" value="3"/>
                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                                                    <input type="radio" id="star2" name="rate" value="2"/>
                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                                    <input type="radio" id="star1" name="rate" value="1"/>
                                                    <label class="full" for="star1"
                                                           title="Sucks big time - 1 star"></label>
                                                </div>
                                            </div>
                                            <div class="review-user">
                                                <div class="comment">
                                                    <label class="title">Your review</label>
                                                    <textarea class="review" name="content"></textarea>
                                                </div>
                                                <button type="submit" class="btn submit-comment">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="content" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">{{$product->content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row silder-product-related owl-carousel">
                @foreach($featured as $productfeatured)
                    <div class="product-related ">
                        <div class="product__item">
                            <img class="product__item__pic set-bg"
                                 src="{{ asset(Storage::url($productfeatured->image))}}">
                            @if(isSaleProduct($product))
                                <span class="label text-danger">{{ percentDiscountPrice($productfeatured->price, getPriceSale($product))}}%</span>
                            @else
                                <span class="label">Hot</span>
                            @endif
                            <div class="product__item__text">
                                <a href="{{route("product.index",[$productfeatured->sku])}}"
                                   class="name-product">{{$productfeatured->name}}</a>
                                {{--                            <a href="#" class="add-cart">+ Add To Cart</a>--}}
                                <div class="Product-price">
                                    @if(isSaleProduct($product))
                                        <span class="discount-price">{{number_format(getPriceSale($product))}} VNĐ</span>
                                        <span
                                            class="original-price">{{number_format($productfeatured->price)}} VNĐ</span>
                                    @else
                                        <span class="price">{{number_format($productfeatured->price)}} VNĐ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
