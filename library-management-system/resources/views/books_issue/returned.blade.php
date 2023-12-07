@extends('layouts.app')

@section('title', 'Books returned')
@section('content')

    <div class="card m-2 p-4">
        <h3 class="mt-2">Returned Books List</h3>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Book</th>
                    <th scope="col">Issued To</th>
                    <th scope="col">Issued On</th>
                    <th scope="col">Returned On</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Released By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($returnedBooks as $returnedBook)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $returnedBook->book->name }}</td>
                        <td>{{ $returnedBook->user->name }}</td>
                        <td>{{ $returnedBook->issued_on }}</td>
                        <td>{{ $returnedBook->returned_on }}</td>
                        <td><span class="badge bg-danger fs-5">{{ $returnedBook->fine }}</span></td>
                        <td>{{ $returnedBook->released_by }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
