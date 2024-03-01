@extends('layouts.app')

@section('title', 'Add BookIssue')

@section('content')
    <div class="card m-auto mt-6 w-50">
        <div class="card-body">
            <h3 class="card-title">Book Issue Form</h3><hr>
            <form class="" action="{{ route('issue-books.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label class="form-label" for="selectOne">Select Book<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="book_id">
                        <option value="">Open this select menu</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                    @error('book_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label class="form-label" for="selectOne">Select User<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="user_id">
                        <option value="">Open this select menu</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputEmail2" class="form-label">Date Of Issue</label>
                    <input type="date" class="form-control" name="issued_on" id="exampleInputEmail2">
                    @error('issued_on')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
