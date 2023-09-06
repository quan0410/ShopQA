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
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-1.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-2.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-3.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-4.png">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/shop-details/product-big-2.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/shop-details/product-big-3.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/shop-details/product-big.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/shop-details/product-big-4.png" alt="">
                                    <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
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
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
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
                                        <div class="product__details__tab__content__item">
                                            <p>review</p>
                                        </div>
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
{{--                            <div class="rating">--}}
{{--                                <i class="fa fa-star-o"></i>--}}
{{--                                <i class="fa fa-star-o"></i>--}}
{{--                                <i class="fa fa-star-o"></i>--}}
{{--                                <i class="fa fa-star-o"></i>--}}
{{--                                <i class="fa fa-star-o"></i>--}}
{{--                            </div>--}}
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
    <!-- Related Section End -->
{{--    <script type="text/javascript">--}}
{{--        (function($) {--}}
{{--            document.getElementById('attribute-size').click(function(){--}}
{{--                this.firstElementChild.attr("checked", true);--}}
{{--            });--}}
{{--        })();--}}
{{--    </script>--}}
@endsection
