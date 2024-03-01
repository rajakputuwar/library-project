@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <div class="card m-auto mt-6 w-50">
        <div class="card-body">
            <h3 class="card-title">Add Category Form</h3><hr>
            <form class="" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1" class="form-label">Category</label>
                    <input type="text" class="form-control" value="{{ old('category') }}" name="category"
                        id="exampleInputEmail1">
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Shelf_name</label>
                    <input type="text" class="form-control" value="{{ old('shelf_name') }}" name="shelf_name"
                        id="exampleInputEmail2">
                    @error('shelf_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
