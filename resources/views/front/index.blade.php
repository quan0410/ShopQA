@extends('front.layout.master')
@section('title', 'Shop QA')
@section('body')
<!-- Main -->
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        @foreach($sliders as $slider)
        <div class="hero__items set-bg" data-setbg="front/img/{{$slider->image}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h2>{{$slider->title}}</h2>
                            <p>{{$slider->content}}</p>
                            <a href="{{url($slider->url)}}" class="primary-btn">Shop now<span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->
<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="front/img/banner/banner-1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Clothing Collections 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="front/img/banner/banner-2.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="front/img/banner/banner-3.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Shoes Spring 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter=".best-seller">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                    <li data-filter=".featured">Featured</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            @foreach($bestSellers as $product)
                @if(($product->discount) > 0)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6  mix best-seller">
                        <div class="product__item">
                            <img class="product__item__pic set-bg" src="{{asset("front/img/product/" . $product->image)}}">
                            <span class="label text-danger">{{ percentDiscountPrice($product->price, $product->discount_price)}}%</span>
                            <div class="product__item__text">
                                <a href="{{route("product.index",[$product->sku])}}" class="name-product">{{$product->name}}</a>
                                <div class="Product-price">
                                    @if($product->discount_price)
                                        <span class="discount-price">{{number_format($product->discount_price)}} VNĐ</span>
                                        <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                    @else
                                        <span class="price">{{number_format($product->price)}} VNĐ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
                @foreach($hotSales as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <img class="product__item__pic set-bg" src="{{asset("front/img/product/" . $product->image)}}">
                            <span class="label text-danger">{{ percentDiscountPrice($product->price, $product->discount_price)}}%</span>
                            <div class="product__item__text">
                                <a href="{{route("product.index",[$product->sku])}}" class="name-product">{{$product->name}}</a>
                                <div class="Product-price">
                                    @if($product->discount_price)
                                        <span class="discount-price">{{number_format($product->discount_price)}} VNĐ</span>
                                        <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                    @else
                                        <span class="price">{{number_format($product->price)}} VNĐ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($newProduct as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <img class="product__item__pic set-bg" src="{{asset("front/img/product/" . $product->image)}}">
                            @if($product->discount_price)
                                <span class="label text-danger">{{ percentDiscountPrice($product->price, $product->discount_price)}}%</span>
                            @else
                                <span class="label">New</span>
                            @endif
                            <div class="product__item__text">
                                <a href="{{route("product.index",[$product->sku])}}" class="name-product">{{$product->name}}</a>
                                <div class="Product-price">
                                    @if($product->discount_price)
                                        <span class="discount-price">{{number_format($product->discount_price)}} VNĐ</span>
                                        <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                    @else
                                        <span class="price">{{number_format($product->price)}} VNĐ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($featured as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix featured">
                        <div class="product__item">
                            <img class="product__item__pic set-bg" src="{{asset("front/img/product/" . $product->image)}}">
                            @if($product->discount_price)
                                <span class="label text-danger">{{ percentDiscountPrice($product->price, $product->discount_price)}}%</span>
                            @else
                                <span class="label">Hot</span>
                            @endif
                            <div class="product__item__text">
                                <a href="{{route("product.index",[$product->sku])}}" class="name-product">{{$product->name}}</a>
                                <div class="Product-price">
                                    @if($product->discount_price)
                                    <span class="discount-price">{{number_format($product->discount_price)}} VNĐ</span>
                                        <span class="original-price">{{number_format($product->price)}} VNĐ</span>
                                    @else
                                    <span class="price">{{number_format($product->price)}} VNĐ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Categories Section Begin -->
@if($sale)
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="front/img/product-sale.png" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>{{ number_format($sale->product->discount_price) }} VNĐ</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>{{ $sale->title }}</span>
                    <h2>{{ $sale->content }}</h2>
                    <div class="categories__deal__countdown__timer" id="countdown" time-end="{{$sale->time_end}}">
                        <div class="cd-item">
                            <span>00</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>00</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>00</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>00</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="" class="primary-btn btn-countdown-sale">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="front/img/instagram/instagram-1.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="front/img/instagram/instagram-2.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="front/img/instagram/instagram-3.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="front/img/instagram/instagram-4.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="front/img/instagram/instagram-5.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="front/img/instagram/instagram-6.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <h3>#Male_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="front/img/blog/blog-1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="front/img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="front/img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="front/img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="front/img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="front/img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->


@endsection
