{{-- @extends('admin.layouts.app')

@section('title', 'Add Category')

@section('content') --}}
<div class="col-12">
    <div class="card m-2 p-4">
        <form class="" action="{{ route('books.update',$category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $category->name }}">
                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Shelf_name</label>
                <input type="text" class="form-control" name="auther" id="exampleInputEmail2"  value="{{ $category->auther }}">
                @error('shelf_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection