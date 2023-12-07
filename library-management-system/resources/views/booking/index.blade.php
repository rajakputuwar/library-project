@extends('layouts.app')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (Session::has('failure'))
        <div class="alert alert-danger">
            {{ session('failure') }}
        </div>
    @endif
    <div class="card m-2 p-4">
        <h3 class="mt-2">Bookings List</h3>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Book</th>
                    <th scope="col">Booked By</th>
                    <th scope="col">Booked On</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $booking->book->name }}</td>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->booked_on }}</td>
                        <td class="d-flex">
                            <a href="{{ route('bookings.issue', $booking->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2">Issue</button></a>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="post" class="mx-1">
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
