@extends('layouts.user.app')

@section('title', 'Home')
@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('store') }}"><button type="submit" class="btn btn-primary mt-2">Back</button></a>
        <div class="row ">
            @foreach ($categories->books as $book)
                <div class="col-3 p-2">
                    <div class="card">
                        <img src="{{ asset('image.jpg') }}" class="card-img-top rounded text-center" alt="Photo"
                            width="150px">
                        <div class="card-body">
                            <h4 class="card-title">Name : <em> {{ $book->name }} </em></h4>
                            <h4 class="card-title">Author: <em>{{ $book->author }}</em></h4>
                            <h4 class="card-title">Released Date: <em>{{ $book->released_date }}</em></h4>
                            <h4 class="card-title">Price: <em>{{ $book->price }}</em></h4>
                            @if ($book->available)
                                <p class="card-text text-success"> Available</p>
                                <form action="{{ route('bookings.store',) }}"
                                    method="post">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="btn btn-outline-primary">Book</button>
                                </form>
                            @else
                                <p class="card-text text-danger">Not Available</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
