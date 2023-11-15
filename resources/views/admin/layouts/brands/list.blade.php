@extends('admin.layouts.app')
@section('title', 'Brands')
@section('content')
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List Brands</span></h4>
            <div class="card">
                <div class="d-flex justify-content-between mx-4 align-items-center">
                    <h5 class="card-header">Table Brand</h5>
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
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
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @if($brands)
                            @foreach($brands as $brand)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{$brand->id}}</strong></td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        {{$brand->created_at->format('d-m-Y')}}
                                    </td>
                                    <td>
                                        {{$brand->updated_at->format('d-m-Y')}}
                                    </td>
                                    <td>
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
            <div class="card mt-5 p-3">
                {{ $brands->links('vendor.pagination.bootstrap-4') }}
            </div>
@endsection