<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <p class="fs-3 m-2 text-center color-white">LMS</p>
        <hr>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  @if (Route::is('dashboard')) active @endif "
                    href="{{ route('dashboard') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <div class="navbar-heading">Users Management</div>
            </li>

            <li class="nav-item">
                <a class="nav-link @if (Route::is('users.*')) active @endif " href="{{ route('users.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Users
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Books Management</div>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::is('categories.*')) active @endif"
                    href="{{ route('categories.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link has-arrow @if (Route::is('books.*')) active @endif "
                    href="{{ route('books.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::is('bookings.*')) active @endif"
                    href="{{ route('bookings.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::is('issue-books.*')) active @endif"
                    href="{{ route('issue-books.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books Issued
                </a>
            </li>
            <li class="nav-item">
                <div class="navbar-heading">Report</div>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (Route::is('returned-books.*')) active @endif "
                    href="{{ route('returned-books.index') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books Returned
                </a>
            </li>
        </ul>
    </div>
</nav>
