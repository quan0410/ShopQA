@extends('front.layout.master')
@section('title', 'Shop QA')
@section('body')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text d-flex justify-content-between">
                        <h4>User Info</h4>
                        <a href="{{route("user.order.history")}}" class="order-history">Lịch sử đơn hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-4">
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
        </form>
        <form action="{{route("user.update", ['user' => $user->id])}}" method="post">
            @method('put')
            @csrf
            <div class="form-row gap-5">
                <div class="form-group col-md">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group col-md">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ $user->email }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                       name="address" value="{{$user->address}}" required autocomplete="address">

                @error('address')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="phone">Phone</label><input id="phone" type="number"
                                                           class="form-control @error('phone') is-invalid @enderror"
                                                           name="phone" value="{{ $user->phone }}" required
                                                           autocomplete="phone">

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">update info</button>
        </form>
    </section>
@endsection
