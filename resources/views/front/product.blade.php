@extends('front.layout.master')
@section('title', 'product-detail')
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
                                    <div class="product__thumb__pic set-bg" data-setbg="{{asset("/resources/images/" . $image->path)}}"></div>
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
                                    <img src="{{asset("/resources/images/" . $image->path)}}" alt="">
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
                                @if($product->discount_price)
                                    <span class="discount-price">{{number_format($product->discount_price)}} VNĐ</span>
                                    <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                @else
                                <span class="price">
                                    {{number_format($product->price)}} VNĐ
                                </span>
                                @endif
                            </h3>
                            <form action="#" method="post">
                                <div class="product__details__option">
                                    @if($product->productDetails)
                                        <div class="product__details__option__size">
                                            <span>Size:</span>
                                            @foreach($product->productDetails as $productDetail)
                                                <label class="size {{$loop->first ? "active" : ""}}" size="{{$productDetail->size}}">
                                                    {{$productDetail->size}}
                                                    <input class="product-size" type="radio" id="{{$productDetail->size}}" required>
                                                </label>
                                            @endforeach
                                        </div>
                                        <div class="product__details__option__color">
                                            <span>Color:</span>
                                            @foreach($product->productDetails as $productDetail)
                                                <label class="c-{{$productDetail->color}} product-color color-{{$productDetail->size}}" color="{{$productDetail->color}}" style="background-color: {{$productDetail->color}}">
                                                    <input type="radio" id="sp-{{$productDetail->color}}" value="{{ $productDetail->color }}" required>
                                                </label>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                    <button type="submit" class="primary-btn">add to cart</button>
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
                                        <!-- show review-->
                                        <div class="review">
                                            <div class="avatar">
                                                @if($review->user->avatar)
                                                    <img src="{{asset("/resources/images/" . $review->user->avatar)}}">
                                                @else
                                                    <img src="{{asset("/resources/images/avatar-01.jpg")}}">
                                                @endif
                                            </div>
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
                                        @endforeach
                                        <!-- add review-->
                                        <form class="add-review" action="#">
                                            <div class="rate-user">
                                                <label class="title" for="review">Your Rating</label>
                                                <div id="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                    <label class = "full" for="star5" title="Awesome - 5 stars"></label>

                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                    <label class = "full" for="star3" title="Meh - 3 stars"></label>

                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                </div>
                                            </div>
                                            <div class="review-user">
                                                <div class="comment">
                                                    <label class="title" for="review">Your review</label>
                                                    <textarea class="review" id="review" name="review"></textarea>
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
                        <img class="product__item__pic set-bg" src="{{asset("front/img/product/" . $productfeatured->image)}}">
                        @if($productfeatured->discount_price)
                            <span class="label text-danger">{{ percentDiscountPrice($productfeatured->price, $productfeatured->discount_price)}}%</span>
                        @else
                            <span class="label">Hot</span>
                        @endif
                        <div class="product__item__text">
                            <a href="{{route("product.index",[$productfeatured->sku])}}" class="name-product">{{$productfeatured->name}}</a>
{{--                            <a href="#" class="add-cart">+ Add To Cart</a>--}}
                            <div class="Product-price">
                                @if($productfeatured->discount_price)
                                    <span class="discount-price">{{number_format($productfeatured->discount_price)}} VNĐ</span>
                                    <span class="original-price">{{number_format($productfeatured->price)}} VNĐ</span>
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
