@extends('layouts.app')

@section('content')
    <div class="d-flex">
        <a href="{{ route('issue-books.create') }}">
            <button type="submit" class="btn btn-primary m-2">Issue New Book</button>
        </a>
    </div>

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
                    <th scope="col">Book</th>
                    <th scope="col">Issued To</th>
                    <th scope="col">Issued On</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($issueBooks as $issueBook)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $issueBook->book->name }}</td>
                        <td>{{ $issueBook->user->name }}</td>
                        <td>{{ $issueBook->issued_on }}</td>
                        <td class="d-flex">
                            <a href="{{ route('issue-books.edit', $issueBook->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                            <a href="{{ route('issue-books.release', $issueBook->id) }}"><button type="submit"
                                    class="btn btn-success mx-2"> Release</button>
                            </a>

                            <form action="{{ route('issue-books.destroy', $issueBook->id) }}" method="post" class="mx-1">
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
