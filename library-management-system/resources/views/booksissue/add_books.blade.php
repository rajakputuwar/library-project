@extends('layouts.app')

@section('title', 'Add BookIssue')

@section('content')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('booksissue.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="selectOne">Select <span class="text-secondary">(Optional)</span></label>
                    <select class="form-select" aria-label="Default select example">
                        <option>Open this select menu</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" id="exampleInputEmail2">
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Released_date</label>
                    <input type="date" class="form-control" name="released_date" id="exampleInputEmail2">
                    @error('released_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail2">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
