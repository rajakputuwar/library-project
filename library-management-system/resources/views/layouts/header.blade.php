<nav class="navbar-classic navbar navbar-expand-lg">
    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
    <div class="ms-lg-3 d-none d-md-none d-lg-block">
        <!-- Form -->
        <form class="d-flex align-items-center">
            <input type="search" name="search" class="form-control" placeholder="Search" value= "{{ $search ?? '' }}" />
            <button type="submit" class="btn btn-primary mx-2">Search</button>
        </form>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
        <!-- List -->
        <li class="dropdown ms-2">
            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="{{ asset('uploads/users') . '/' . Auth::user()->image }}"
                        class="rounded-circle" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                <div class="px-4 pb-0 pt-2">
                    <div class="lh-1 ">
                        <a href="">
                            <h5 class="mb-1 text-center text-primary">{{ Auth::user()->name }}</h5>
                        </a>
                    </div>
                    <div class=" dropdown-divider mt-3 mb-2"></div>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
                            Out
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
