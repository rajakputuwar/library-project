@extends('admin.layouts.app')

@section('title', 'Add Category')

@section('content') --}}
<div class="col-12">
    <div class="card m-2 p-4">
        <form class="" action="{{ route('booksissue.update',$issue->id) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $book->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">author</label>
                <input type="text" class="form-control" name="author" id="exampleInputEmail2" value="{{ $book->author }}">
                @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Released_date</label>
                <input type="text" class="form-control" name="released_date" id="exampleInputEmail2" value="{{ $book->released_date }}">
                @error('released_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="exampleInputEmail2" value="{{ $book->price }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
