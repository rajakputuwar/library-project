@extends('layouts.app')

@section('content')
    <a href="{{ route('books.create') }}">
        <button type="submit" class="btn btn-primary m-2">Add Books</button></a>
    <div class="card m-2 p-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
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
                        <td nowrap="nowrap" class=" @if ($book->available > 0) text-success @else text-danger @endif">
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
@endsection
