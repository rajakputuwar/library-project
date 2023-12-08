@extends('layouts.app')

@section('title', 'Books')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card m-2 p-4">
        <div class="d-flex justify-content-between">
            <h3 class="mt-2">Books List</h3>
            <a href="{{ route('books.create') }}">
                <button class="btn btn-primary mx-5">Add</button>
            </a>
        </div>
        <hr>
        <div class="card m-2 p-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">author</th>
                        <th scope="col">Released_date</th>
                        <th scope="col">Total</th>
                        <th scope="col">Availability</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->released_date }}</td>
                            <td>{{ $book->total }}</td>
                            <td nowrap="nowrap"
                                class=" @if ($book->available > 0) text-success @else text-danger @endif">
                                @if ($book->available > 0)
                                    Available [ {{ $book->available }} ]
                                @else
                                    Not Available
                                @endif
                            </td>
                            <td>{{ $book->category->category }}</td>
                            <td>{{ $book->price }}</td>
                            <td class="d-flex">
                                <a href="{{ route('books.edit', $book->id) }}"><button type="submit"
                                        class="btn btn-primary mb-2"> Edit</button></a>

                                <form action="{{ route('books.destroy', $book->id) }}" method="post" class="mx-1">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
