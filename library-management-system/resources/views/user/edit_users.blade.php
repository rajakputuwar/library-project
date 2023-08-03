@extends('layouts.app')

@section('title', 'Edit Users')

@section('content')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ old($user->name)?? $user->name }}" name="name" id="exampleInputEmail1">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">College Id</label>
                    <input type="number" class="form-control" value="{{ old($user->college_id)?? $user->college_id }}" name="college_id" id="exampleInputEmail2">
                    @error('college_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label"> Contact No.</label>
                    <input type="text" class="form-control" value="{{ old($user->phone)?? $user->phone }}" name="phone" id="exampleInputEmail2">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Address</label>
                    <input type="text" class="form-control" value="{{ old($user->address)?? $user->address }}" name="address" id="exampleInputEmail2">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ old($user->email)?? $user->email }}" name="email" id="exampleInputEmail2">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail2">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="selectOne">User Type<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="isAdmin">
                        <option>Open this select menu</option>
                        <option value="0" @if($user->isAdmin == 0) selected @endif>User</option>
                        <option value="1" @if($user->isAdmin == 1) selected @endif>Admin</option>
                    </select>
                    @error('isAdmin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <img src="{{ asset('uploads/users'). '/' .$user->image }}" class="rounded-circle" height="100px" width="100px">
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
