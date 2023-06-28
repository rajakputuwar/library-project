@extends('layouts.app')

@section('content')
    <a href="{{ route('categories.create') }}"><button type="submit" class="btn btn-primary m-2">Add Category</button></a>
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
                    <th scope="col">Category</th>
                    <th scope="col">Shelf Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $category->category }}</td>
                        <td>{{ $category->shelf_name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('categories.edit', $category->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>

                            <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="mx-1">
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
