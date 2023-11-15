@extends('admin.layouts.app')
@section('title', 'Categories')
@section('content')
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List Categories</span></h4>
            <div class="card">
                <div class="d-flex justify-content-between mx-4 align-items-center">
                    <h5 class="card-header">Table Category</h5>
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                        </div>
                    </div>
                    <div class="d-flex">
                        <a href="{{route("admin.category.create")}}" class="btn btn-primary">Create</a>
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
                        @if($categories)
                            @foreach($categories as $category)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{$category->id}}</strong></td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        {{$category->created_at->format('d-m-Y')}}
                                    </td>
                                    <td>
                                        {{$category->updated_at->format('d-m-Y')}}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route("admin.category.edit", ['category' => $category->id])}}">
                                                    <i class="bx bx-edit-alt me-1"></i>
                                                        Edit
                                                </a>
                                                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('form-destroy-{{$category->id}}').submit()">
                                                    <i class="bx bx-trash me-1"></i>
                                                    Delete
                                                </a>
                                                <form action="{{ route("admin.category.destroy",['category' => $category->id]) }}" id="form-destroy-{{$category->id}}" method="post">
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
            @if($categories->lastPage() > 1)
                <div class="card mt-5 p-3">
                    {{ $categories->links('vendor.pagination.bootstrap-4') }}
                </div>
            @endif
@endsection
