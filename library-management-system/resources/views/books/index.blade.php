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
                    <th scope="col">Name</th>
                    <th scope="col">Auther</th>
                    <th scope="col">Released_date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->auther }}</td>
                        <td>{{ $book->released_date }}</td>
                        <td>{{ $book->price }}</td>

                       
                            <a href="{{ route('books.edit_books', $book->id) }}"><button type="submit"
                                    class="btn btn-primary mb-2"> Edit</button></a>
                                   
                            <form action="{{ route('books.destroy', $book->id) }}" method="post">
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