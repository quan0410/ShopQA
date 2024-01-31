@extends('front.layout.master')
@section('title', 'Check Out')
@section('body')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route("home")}}">Home</a>
                            <a href="{{route("shop.index")}}">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{route('checkout.cart')}}" method="post">
                    @csrf
                    <input type="hidden" name="code" value="{{ date("YmdHis") }}">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="checkout__input">
                                    <p>Name<span>*</span></p>
                                    <input value="{{$user->name}}" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input value="{{$user->address}}" name="address" type="text" placeholder="Street Address" class="checkout__input__add" required>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input value="{{$user->phone}}" name="phone" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email</p>
                                        <input type="text" value="{{$user->email ?? " "}}" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span></span></p>
                                <input type="text"
                                       placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    @foreach($cart as $id=>$details)
                                        <li>{{$details['product']->name}}<span>{{number_format((isSaleProduct($details['product']) ? getPriceSale($details['product']) : $details['product']->price)  * $details['qty'])}} VNĐ</span></li>
                                    @endforeach

                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>{{number_format(getTotalCart())}} VNĐ</span></li>
                                    <li>Total <span>{{number_format(getTotalCart())}} VNĐ</span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="radio" id="payment" value="payment" name="method">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="cod">
                                        COD (Cash on delivery)
                                        <input checked type="radio" id="cod" value="cod" name="method">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection
