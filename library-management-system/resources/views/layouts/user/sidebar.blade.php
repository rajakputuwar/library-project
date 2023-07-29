<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <p class="fs-3 m-2 text-center color-white">LMS</p><hr>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="{{ route('userDashboard') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('store') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Books Store
                </a>
            </li>
        </ul>

    </div>
</nav>
