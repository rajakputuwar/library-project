@extends('layouts.app')

@section('title', 'Books Issue')

@section('content')
@if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (Session::has('failure'))
            <div class="alert alert-danger">
                {{ session()->get('failure') }}
            </div>
        @endif
    

    <div class="card m-2 p-4">
        <div class="d-flex justify-content-between">
            <h3 class="mt-2">Issued Books List</h3>

            <a href="{{ route('issue-books.create') }}">
                <button type="submit" class="btn btn-primary mx-2">Issue New Book</button>
            </a>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Book</th>
                    <th scope="col">Issued To</th>
                    <th scope="col">Issued On</th>
                    <th scope="col">Fine</th>
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
                        <td><span class="">{{ $issueBook->fine }}</span></td>
                        <td class="d-flex">
                            {{-- <a href="{{ route('issue-books.edit', $issueBook->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a> --}}
                            <!-- Button trigger modal -->
                            @if ($issueBook->fine)
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">
                                    Release
                                </button>
                            @else
                                <a href="{{ route('issue-books.release', $issueBook->id) }}"><button type="submit`"
                                        class="btn btn-success">Release</button></a>
                            @endif
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure ?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Fine was accepted by {{ auth()->user()->name }}
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('issue-books.release', $issueBook->id) }}"><button
                                                    type="button" class="btn btn-primary">Accept</button></a>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('issue-books.destroy', $issueBook->id) }}" method="post"
                                class="mx-1">
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
