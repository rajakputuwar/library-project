@extends('layouts.user.app')

@section('title', 'Home')
@section('content')
    <div class="container w-50 m-2">
        <div class="row ">
            @foreach ($categories as $category)
                <a href="{{ route('store.show', $category->id) }}">
                    <div class="col-2.5 p-2">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between">
                                <h3 class="card-title"> {{ $category->category }}</h3>
                                <p class="card-text fs-3">{{ $category->books->count() }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
