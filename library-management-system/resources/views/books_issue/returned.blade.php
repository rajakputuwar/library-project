
@extends('layouts.app')

@section('content')

    <div class="card m-2 p-4">
        <caption class="fs-4"> Report on the returned books </caption><hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Book</th>
                    <th scope="col">Issued To</th>
                    <th scope="col">Issued On</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($returnedBooks as $returnedBook)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $returnedBook->book->name }}</td>
                        <td>{{ $returnedBook->user->name }}</td>
                        <td>{{ $returnedBook->issued_on }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
