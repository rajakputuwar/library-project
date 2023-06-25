<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand fs-3" href="{{ route('dashboard') }}">Library Management System</a>
      <form class="d-flex">
        <p class="px-3 fs-4">{{ Auth::user()->name }}</p>
        <a href="{{ route('logout') }}" class="fs-5 mt-1">Logout</a>
      </form>
    </div>
  </nav>
