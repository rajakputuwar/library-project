<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ asset('') }}design/index.html">
            <img src="{{ asset('') }}design/assets/images/brand/logo/logo.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="{{ route('dashboard') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Books Management</div>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('categories.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link has-arrow   " href="{{ route('books.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books
                </a>
            </li>
            {{-- <li class="nav-item">
                <div class="navbar-heading">Books Management</div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link " href="{{ route('issue-books.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books Issued
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('returned-books.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books Returned
                </a>
            </li>
        </ul>

    </div>
</nav>
