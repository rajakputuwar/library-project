<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                @include('layouts.header')
            </div>
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('') }}design/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/prismjs/prism.js"></script>
    <script src="{{ asset('') }}design/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="{{ asset('') }}design/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
    </script>

    <!-- Theme JS -->
    <script src="{{ asset('') }}design/assets/js/theme.min.js"></script>

</body>

</html>
