@extends('layouts.app')

@section('title', 'Edit Books Issued')

@section('content')
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('issue-books.update',$issueBook->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label class="form-label" for="selectOne">Select Book<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="book_id">
                        <option>Open this select menu</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}" @if($book->id == $issueBook->book_id) selected @endif>{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="selectOne">Select User<span class="text-secondary"></span></label>
                    <select class="form-select" aria-label="Default select example" name="user_id">
                        <option>Open this select menu</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" @if($user->id == $issueBook->user_id) selected @endif>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Date Of Issue</label>
                    <input type="date" class="form-control" name="issued_on" id="exampleInputEmail2" value="{{ $issueBook->issued_on }}">
                    @error('issue-date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
