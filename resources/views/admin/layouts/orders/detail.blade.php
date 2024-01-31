@extends('admin.layouts.app')
@section('title', 'Order Detail')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Order Detail</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="#">
                         <div class="row">
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="name">User Name</label>
                                 <input type="text" class="form-control" id="name" value="{{$order->name}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="email">Email</label>
                                 <input type="text" class="form-control" id="email" value="{{$order->email}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="phone">Phone</label>
                                 <input type="text" class="form-control" id="phone" value="{{$order->phone}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="method">Payment Method</label>
                                 <input type="text" class="form-control" id="method" value="{{$order->method}}" readonly/>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="city">Tỉnh / Thành phố</label>
                                 <select class="form-control" id="city" aria-label=".form-select-sm" name="city" disabled>
                                     <option value="">Chọn tỉnh thành</option>
                                 </select>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="district">Quận huyện</label>
                                 <select class="form-control" id="district" aria-label=".form-select-sm" name="district" disabled>
                                     <option value="" selected>Chọn quận huyện</option>
                                 </select>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="ward">Phường xã</label>
                                 <select class="form-control" id="ward" aria-label=".form-select-sm" name="ward" disabled>
                                     <option value="" selected>Chọn phường xã</option>
                                 </select>
                             </div>
                             <div class="mb-3 col-6">
                                 <label class="form-label" for="address">Address</label>
                                 <input type="text" class="form-control" id="address" value="{{$order->address}}" readonly/>
                             </div>
                             <div class="mb-3">
                                 <label for="form-label" class="method">Trạng thái đơn hàng</label>
                                 <select class="form-select" id="status" name="status" disabled>
                                     <option {{$order->status === 'waiting' ? 'selected' : " "}} value="waiting">Chờ xử lý</option>
                                     <option {{$order->status === 'cancel' ? 'selected' : " "}} value="cancel">Huỷ đơn hàng</option>
                                     <option {{$order->status === 'processing' ? 'selected' : " "}} value="processing">Đang xử lý</option>
                                     <option {{$order->status === 'packaged' ? 'selected' : " "}} value="packaged">Đã đóng gói</option>
                                     <option {{$order->status === 'sending' ? 'selected' : " "}} value="sending">Đang gửi</option>
                                     <option {{$order->status === 'completed' ? 'selected' : " "}} value="completed">Đã hoàn thành</option>
                                 </select>
                             </div>
                         </div>
                        <div class="row bg-secondary">
                            <label>Order Detail</label>
                            @foreach($orderDetails as $orderDetail)
                                <div class="mb-3 col-4">
                                    <label class="form-label">product Name</label>
                                    <input type="text" class="form-control" value="{{$orderDetail->product->name}}" readonly/>
                                </div>
                                <div class="mb-3 col-4">
                                    <label class="form-label">Qty</label>
                                    <input type="text" class="form-control" value="{{$orderDetail->qty}}" readonly/>
                                </div>
                                <div class="mb-3 col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Size</label>
                                        <input type="text" class="form-control" value="{{$orderDetail->size->name}}" readonly/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">product Name</label>
                                        <input type="text" class="form-control" value="{{$orderDetail->color->name}}" readonly/>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                if (ct.Id === "{{$order->city}}"){
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
                    if (dis.Id === "{{$order->district}}") {
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
                    if (w.Id === "{{$order->ward}}") {
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
