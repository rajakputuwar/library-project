<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('design') }}/assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->
    <link href="{{ asset('design') }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('design') }}/assets/libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{{ asset('design') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ asset('design') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('design') }}/assets/css/theme.min.css">
    <title>Register</title>
    <style>
        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body class="bg-light">
    <!-- container -->
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-5">
                        <div class="mb-3">
                            <h3><strong>Library Management System</strong></h3>
                            <p class="mb-4">Please enter your user information.</p>
                        </div>
                        <!-- Form -->
                        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">User Name</label>
                                <input type="text" id="username" class="form-control" name="name"
                                    placeholder="User Name" required="">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="college_id" class="form-label">Student Id</label>
                                <input type="text" id="college_id" class="form-control" name="college_id"
                                    placeholder="Enter student id " required="">
                                @error('college_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email address here" required="">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="Enter password here">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm
                                    Password</label>
                                <input type="password" id="confirm-password" class="form-control"
                                    name="password_confirmation" placeholder="Re-enter password here" required="">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Identification:</label>
                                <input type="file" id="image" class="form-control" name="image" required="">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>

                                <div class="d-md-flex justify-content-center mt-2">
                                    <div class="mb-2 mb-md-0">
                                        <a href="{{ route('login') }}" class="fs-5">Already member? Login </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
