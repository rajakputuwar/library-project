
@extends('layouts.app')

@section('content')
    <a href="{{ route('booksissue.create') }}"><button type="submit" class="btn btn-primary m-2">Add Books</button></a>
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
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($issues as $issue)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $issue->name }}</td>
                        <td>{{ $issue->author }}</td>
                        <td>{{ $issue->released_date }}</td>
                        <td>{{ $issue->price }}</td>
                        <td class="d-flex">
                            <a href="{{ route('books.edit', $book->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>

                            <form action="{{ route('books.destroy', $issue->id) }}" method="post"  class="mx-1">
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