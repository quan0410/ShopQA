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
            <button type="submit"
                    class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
            .
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
@endsection
