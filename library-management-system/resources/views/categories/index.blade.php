{{-- @extends('admin.layouts.app')

@section('content') --}}
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
                <th scope="col">Shelf_name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->category }}</td>
                    <td>{{ $category->shelf_name }}</td>
                        <a href="{{ route('categories.edit_books', $book->id) }}"><button type="submit"
                                class="btn btn-primary mb-2"> Edit</button></a>
                               
                        <form action="{{ route('categories.destroy', $book->id) }}" method="post">
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