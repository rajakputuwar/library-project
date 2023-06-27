{{-- @extends('admin.layouts.app')

@section('title', 'Add Category')

@section('content') --}}
    <div class="col-12">
        <div class="card m-2 p-4">
            <form class="" action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Auther</label>
                    <input type="text" class="form-control" name="auther" id="exampleInputEmail2">
                    @error('auther')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Released_date</label>
                    <input type="text" class="form-control" name="released_date" id="exampleInputEmail2">
                    @error('released_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail2">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                {{-- <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" id="gridRadios1" type="radio" name="is_active" value="1">
                            <label class="form-check-label" for="gridRadios1">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="gridRadios2" type="radio" name="is_active" value="0" checked>
                            <label class="form-check-label" for="gridRadios2">InActive</label>
                        </div>
                    </div>
                    @error('is_active')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </fieldset> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection