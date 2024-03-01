@extends('layouts.app')

@section('title', 'Edit Books')

@section('content')
    <div class="card m-auto mt-6 w-50">
        <div class="card-body">
            <h3 class="card-title">Edit Book Form</h3><hr>
            <form class="" action="{{ route('books.update', $book->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group mb-2">
                    <label class="form-label" for="selectOne">Select Category<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option value="">Open this select menu</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $book->category_id) selected @endif>
                                {{ $category->category }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                        value="{{ old('name') ?? $book->name }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">author</label>
                    <input type="text" class="form-control" name="author" id="exampleInputEmail2"
                        value="{{ old('author') ?? $book->author }}">
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">No.of copies</label>
                    <input type="number" class="form-control" name="total" value="{{ old('total') ?? $book->total }}"
                        id="exampleInputEmail2">
                    @error('total')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Released_date</label>
                    <input type="date" class="form-control" name="released_date" id="exampleInputEmail2"
                        value="{{ old('released_date') ?? $book->released_date }}">
                    @error('released_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail2"
                        value="{{ old('price') ?? $book->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
