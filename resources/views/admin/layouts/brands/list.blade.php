@extends('admin.layouts.app')
@section('title', 'Brands')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List Brands</span></h4>
    <div class="card">
        <div class="d-flex justify-content-between mx-4 align-items-center">
            <h5 class="card-header">Table Brand</h5>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <form action="{{route("admin.brand.index")}}">
                        <input type="text" placeholder="Search..." name="search" value="{{request("search")}}">
{{--                        <button type="submit" class="border-0"><i class="bx bx-search fs-4 lh-0"></i></button>--}}
                    </form>
                </div>
            </div>
            <div class="d-flex">
                <a href="{{route("admin.brand.create")}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>updated At</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($brands)
                    @foreach($brands as $brand)
                        <tr>
                            <td class="text-center">
                                <strong>{{$brand->id}}</strong>
                            </td>
                            <td>{{$brand->name}}</td>
                            <td>
                                {{$brand->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$brand->updated_at->format('d-m-Y')}}
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route("admin.brand.edit", ['brand' => $brand->id])}}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('form-destroy-{{$brand->id}}').submit()">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>
                                        <form action="{{ route("admin.brand.destroy",['brand' => $brand->id]) }}" id="form-destroy-{{$brand->id}}" method="post">
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @if($brands->lastPage() > 1)
        <div class="card mt-5 p-3">
            {{ $brands->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
