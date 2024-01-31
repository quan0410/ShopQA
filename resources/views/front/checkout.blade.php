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
                            <div class="form-row gap-5">
                                <div class="form-group col-md">
                                    <label for="city">Tỉnh / Thành phố</label>
                                    <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" name="city" required>
                                        <option value="">Chọn tỉnh thành</option>
                                    </select>
                                </div>
                                <div class="form-group col-md">
                                    <label for="district">Quận huyện</label>
                                    <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" name="district" required>
                                        <option value="" selected>Chọn quận huyện</option>
                                    </select>
                                </div>
                                <div class="form-group col-md">
                                    <label for="ward">Phường xã</label>
                                    <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm" name="ward" required>
                                        <option value="" selected>Chọn phường xã</option>
                                    </select>
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
                                        <li>{{$details['product']->name}}<span>{{number_format(($details['product']->discount_price ?? $details['product']->price) * $details['qty'])}} VNĐ</span></li>
                                    @endforeach

                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>{{number_format($total)}} VNĐ</span></li>
                                    <li>Total <span>{{number_format($total)}} VNĐ</span></li>
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
    <script>
        const city = document.getElementById("city");
        const district = document.getElementById("district");
        const ward = document.getElementById("ward");
        let cities = null;
        let cityIdex = null;
        let districtIdex = null;

        // get data address
        async function fetchData() {
            let res = await fetch(
                "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json"
            );
            let data = await res.json();
            cities = data;
            loadCity(data);
        }

        // display cities
        function loadCity(data) {
            data.map((ct, index) => {
                const option = document.createElement("option");
                option.text = ct.Name;
                option.value = ct.Id;
                option.id = index;
                if (ct.Id === "{{$user->city}}"){
                    cityIdex = index;
                    option.selected = true;
                    loadDistricts(index);
                }
                city.append(option);
            });
        }
        fetchData();

        function loadDistricts(index = null) {
            try {
                district.innerHTML = `<option value="">Quận/Huyện</option>`;
                let districts = cities[cityIdex].Districts;
                districts.map((dis, index) => {
                    const option = document.createElement("option");
                    option.text = dis.Name;
                    option.value = dis.Id;
                    option.id = index;
                    if (dis.Id === "{{$user->district}}") {
                        districtIdex = index;
                        option.selected = true;
                        loadWards(index);
                    }
                    district.append(option);
                });
            } catch (error) {}
        }


        function loadWards(index = null) {
            try {
                ward.innerHTML = `<option value="">Phường/Xã</option>`;
                let wards = cities[cityIdex].Districts[districtIdex].Wards;

                wards.map((w, index) => {
                    const option = document.createElement("option");
                    option.text = w.Name;
                    option.value = w.Id;
                    option.id = index;
                    if (w.Id === "{{$user->ward}}") {
                        option.selected = true;
                    }
                    ward.append(option);
                });
            } catch (error) {}
        }


        city.onchange = (e) => {
            district.innerHTML = `<option value="">Quận/Huyện</option>`;

            try {
                let cId = city.options[city.selectedIndex].id;
                let districts = cities[cId].Districts;
                districts.map((dis, index) => {
                    const option = document.createElement("option");
                    option.text = dis.Name;
                    option.value = dis.Id;
                    option.id = index;
                    district.append(option);
                });
            } catch (error) {}
        };

        fetchData();
        district.onchange = (e) => {
            ward.innerHTML = `<option value="">Phường/Xã</option>`;

            try {
                let cId = city.options[city.selectedIndex].id;
                let did = district.options[district.selectedIndex].id;
                let wards = cities[cId].Districts[did].Wards;
                wards.map((wa, index) => {
                    const option = document.createElement("option");
                    option.text = wa.Name;
                    option.value = wa.Id;
                    option.id = index;
                    ward.append(option);
                });
            } catch (error) {}
        };
    </script>
    <!-- Checkout Section End -->

@endsection
