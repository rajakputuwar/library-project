<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ asset('') }}design/index.html">
            <img src="{{ asset('') }}design/assets/images/brand/logo/logo.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="{{ asset('') }}design/index.html">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Layouts & Pages</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2">
                    </i> Pages
                </a>
                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('') }}design/pages/profile.html">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="{{ asset('') }}design/pages/settings.html">
                                Settings
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('') }}design/pages/billing.html">
                                Billing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('') }}design/pages/pricing.html">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('') }}design/pages/404-error.html">
                                404 Error
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                    <i data-feather="lock" class="nav-icon icon-xs me-2">
                    </i> Authentication
                </a>
                <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('') }}design/pages/sign-in.html"> Sign
                                In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ asset('') }}design/pages/sign-up.html"> Sign
                                Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('') }}design/pages/forget-password.html">
                                Forget Password
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('') }}design/pages/layout.html">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Layouts
                </a>
            </li>
        </ul>

    </div>
</nav>
