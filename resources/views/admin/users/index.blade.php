@extends('admin.layouts.app')
@section('title', 'Admin | User')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Users</h4>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Users</h5>
            <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Verified</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($users as $user)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->id }}</strong></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->verified }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.user.edit',['user' => $user->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('form-destroy-{{ $user->id }}').submit()"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                            <form action="{{ route('admin.user.destroy',['user' => $user->id]) }}" id="form-destroy-{{$user->id}}" method="post">
                                @method('delete')
                                @csrf
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if($users->lastPage() > 1 )
        <div class="card mt-5 p-3">
            {{ $users->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection
