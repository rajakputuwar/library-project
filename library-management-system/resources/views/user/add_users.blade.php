@extends('layouts.app')

@section('title', 'Add Users')

@section('content')
    <div class="card m-auto mt-6 w-50">
        <div class="card-body">
            <h3 class="card-title">Add User Form</h3>
            <hr>
            <form class="" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-2">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">College Id</label>
                    <input type="number" class="form-control" name="college_id" id="exampleInputEmail2">
                    @error('college_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label"> Contact No.</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputEmail2">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail2">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail2">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail2">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label class="form-label" for="selectOne">User Type<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="isAdmin">
                        <option>Open this select menu</option>
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                    @error('isAdmin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputEmail2">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
