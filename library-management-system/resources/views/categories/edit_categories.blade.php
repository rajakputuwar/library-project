@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('categories.update', $category->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category</label>
                    <input type="text" class="form-control" name="category" id="exampleInputEmail1"
                        value="{{ $category->category }}">
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Shelf Name</label>
                    <input type="text" class="form-control" name="shelf_name" id="exampleInputEmail2"
                        value="{{ $category->shelf_name }}">
                    @error('shelf_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
