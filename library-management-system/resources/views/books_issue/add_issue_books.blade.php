@extends('layouts.app')

@section('title', 'Add BookIssue')

@section('content')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('issue-books.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="selectOne">Select Book<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="book_id">
                        <option>Open this select menu</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                    @error('book_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="selectOne">Select User<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="user_id">
                        <option>Open this select menu</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
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
