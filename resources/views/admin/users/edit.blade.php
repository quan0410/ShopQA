@extends('admin.layouts.app')
@section('title', 'User | Edit')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> Edit</h4>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit user</h5>
            <div class="actions">
                <a href="{{ route('admin.user.index') }}" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary" onclick="document.getElementById('form-edit').submit()">Save</button>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.update',['user' => $user->id]) }}" id="form-edit" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label class="form-label" for="basic-default-name">Full Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" name="name" id="basic-default-name" minlength="2" required placeholder="John Doe">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <div class="input-group input-group-merge">
                        <input type="text" id="basic-default-email" required minlength="2" name="email"  value="{{ $user->email }}"  class="form-control @error('email') is-invalid @enderror" placeholder="john.doe@gmail.com" aria-label="john.doe" aria-describedby="basic-default-email2">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-text">You can use letters, numbers &amp; periods</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-password">Password</label>
                    <input type="password" id="basic-default-password" minlength="6"   name="password" class="form-control @error('password') is-invalid @enderror" >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone">Phone No</label>
                    <input type="text" id="basic-default-phone" class="form-control phone-mask @error('phone') is-invalid @enderror" name="phone"  value="{{ $user->phone }}"  placeholder="658 799 8941">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-address">Address</label>
                    <textarea id="basic-default-address" name="address" class="form-control"   placeholder="123.d ...">{{ $user->address }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Permissions</label>
                    <div class="options d-flex flex-wrap">
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_admin" type="checkbox" value="true" id="admin" {{ ($user->permissions['admin'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="admin"> Admin </label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_brand" type="checkbox" value="true" id="brand" {{ ($user->permissions['brand'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="brand"> Brand </label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_category" type="checkbox" value="true" id="category" {{ ($user->permissions['category'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="category"> Category </label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_product" type="checkbox" value="true" id="product" {{ ($user->permissions['product'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="product"> Product</label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_sale" type="checkbox" value="true" id="sale" {{ ($user->permissions['sale'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="sale">Sale</label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_blog" type="checkbox" value="true" id="blog" {{ ($user->permissions['blog'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="blog"> Blog </label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" name="permission_order" type="checkbox" value="true" id="order" {{ ($user->permissions['order'] ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="order"> Order </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
