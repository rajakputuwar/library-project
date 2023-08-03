@extends('layouts.app')

@section('title', 'User Home')
@section('content')
    <div class="d-flex">
        <a href="{{ route('users.create') }}">
            <button type="submit" class="btn btn-primary m-2">Add User</button>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Details</th>
                    <th scope="col">College Id</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Books Taken</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->college_id }}</td>
                        <td>@if($user->isAdmin) Admin @else User @endif</td>
                        <td>{{ $user->issuebook->count() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('users.edit', $user->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2 mx-1x   "> Edit</button></a>
                            <a href="{{ route('users.profile', $user->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2 mx-1"> Profile</button></a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post" class="mx-1">
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
