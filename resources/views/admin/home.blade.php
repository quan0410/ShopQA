@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    <h1>Chào mừng đến với Shop QA</h1>
    <div class="d-flex gap-5">
        <div class="d-flex gap-5 p-5 flex-column shadow-lg rounded-3 w-100" style="background: #696cff">
            <h1 class="text-white">Danh thu Shop</h1>
            <h2 class="p-2 shadow-sm text-white rounded-3"  style="background: #5c5d8b">{{number_format($revenue)}} đ</h2>
        </div>
        <div class="d-flex gap-5 p-5 flex-column shadow-lg rounded-3  w-100" style="background: #696cff">
            <h1 class="text-white">Danh thu Shop</h1>
            <h2 class="p-2 shadow-sm text-white rounded-3"  style="background: #5c5d8b"></h2>
        </div>
    </div>

    <div id="chart" style="height: 250px;"></div>



@endsection
