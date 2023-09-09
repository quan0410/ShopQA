@extends('front.layout.master')
@section('title', 'Cart')
@section('body')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route("home")}}">Home</a>
                            <a href="{{route("shop.index")}}">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <tr data-id="{{$id}}">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{asset("/resources/images/" . $details['product']->image)}}" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <a href="{{route("product.index",[$details['product']->sku])}}" class="name-product">{{$details['product']->name}}</a>
                                                <div class="size">Size: {{$details->size}}</div>
                                                <div class="color">Color: {{$details->color}}</div>
                                                <h5>{{number_format($details['product']->discount_price ?? $details['product']->price)}} VNĐ</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input class="update-cart" type="number" value="{{$details['qty']}}" update-qty="{{ route('update.cart') }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{number_format(($details['product']->discount_price ?? $details['product']->price) * $details['qty'])}} VNĐ</td>
                                        <td class="actions" data-th="">
                                            <button class="cart__close" remove="{{ route('remove.cart') }}"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{route("home")}}">Continue Shopping</a>
                            </div>
                        </div>
{{--                        <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <div class="continue__btn update__btn">--}}
{{--                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>{{number_format(session("total_cart"))}} VNĐ</span></li>
                            <li>Total <span>{{number_format(session("total_cart"))}} VNĐ</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
