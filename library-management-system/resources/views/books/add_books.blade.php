@extends('layouts.app')

@section('title', 'Add Books')

@section('content')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="selectOne">Select Category<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option value=" ">Open this select menu</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>
                                {{ $category->category }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                        id="exampleInputEmail1">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" value="{{ old('author') }}"
                        id="exampleInputEmail2">
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">No.of copies</label>
                    <input type="number" class="form-control" name="total" value="{{ old('total') }}"
                        id="exampleInputEmail2">
                    @error('total')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Released_date</label>
                    <input type="date" class="form-control" name="released_date" value="{{ old('released_date') }}"
                        id="exampleInputEmail2">
                    @error('released_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}"
                        id="exampleInputEmail2">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
