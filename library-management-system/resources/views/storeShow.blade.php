@extends('layouts.user.app')

@section('title', 'Home')
@section('content')
    <div class="container">
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
                            @if ($book->available == 1)
                                <p class="card-text text-success"> Available</p>
                                <button type="submit" class="btn btn-outline-primary">Book</button>
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
