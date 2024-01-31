@extends('admin.layouts.app')
@section('title', 'Sales')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List Sales</span></h4>
    <div class="card">
        <div class="d-flex justify-content-between mx-4 align-items-center">
            <h5 class="card-header">Table Sale</h5>
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                </div>
            </div>
            <div class="d-flex">
                <a href="{{route("admin.sale.create")}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>start</th>
                    <th>End</th>
                    <th class="text-center">Show</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($sales)
                    @foreach($sales as $sale)
                        <tr>
                            <td class="text-center">
                                <strong>{{$sale->id}}</strong>
                            </td>
                            <td>{{$sale->title}}</td>
                            <td>{{$sale->content}}</td>
                            <td>
                                {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sale->time_start)->format('d/m/Y H:i')}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sale->time_end)->format('d/m/Y H:i')}}
                            </td>
                            <td class="text-center">{{$sale->is_show}}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route("admin.sale.edit", ['sale' => $sale->id])}}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('form-destroy-{{$sale->id}}').submit()">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>
                                        <form action="{{ route("admin.sale.destroy",['sale' => $sale->id]) }}" id="form-destroy-{{$sale->id}}" method="post">
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
    @if($sales->lastpage() >1)
        <div class="card mt-5 p-3">
            {{ $sales->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
