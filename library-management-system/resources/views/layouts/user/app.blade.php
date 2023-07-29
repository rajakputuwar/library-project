<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="bg-light">
    <div id="db-wrapper">
        @include('layouts.user.sidebar')
        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                @include('layouts.header')
            </div>
            @yield('content')
        </div>
    </div>
    @include('layouts.script')
</body>

</html>
