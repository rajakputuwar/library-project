@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>

    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            {{-- <h3 class="mb-0  text-white">Projects</h3> --}}
                        </div>
                        <div>
                            {{-- <a href="#" class="btn btn-white">Create New Project</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <a href="{{ route('users.index') }}">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Users</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">{{ $users->count() }}</h1>
                                {{-- <p class="mb-0"><span class="text-dark me-2">2<sspan>Completed</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <a href="{{ route('books.index') }}">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Books</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-list-task fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">{{ $books->count() }}</h1>
                                {{-- <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <a href="{{ route('bookings.index') }}">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Bookings</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-list-task fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">{{ $bookings->count() }}</h1>
                                {{-- <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <a href="{{ route('issue-books.index') }}">
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Books Issued</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">{{ $booksIssued->count() }}</h1>
                                {{-- <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <a href="{{ route('returned-books.index') }}">
                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Books Returned</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-bullseye fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h1 class="fw-bold">{{ $booksReturned->count() }}</h1>
                                {{-- <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
