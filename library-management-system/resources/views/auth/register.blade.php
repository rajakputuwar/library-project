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
<link href="{{ asset('design') }}/assets/libs/dropzone/dist/dropzone.css"  rel="stylesheet">
<link href="{{ asset('design') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="{{ asset('design') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">








<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('design') }}/assets/css/theme.min.css">
  <title>Sign Up | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
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
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="{{ asset('design') }}/index.html"><img src="{{ asset('') }}design/assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a>
              <p class="mb-6">Please enter your user information.</p>

            </div>
            <!-- Form -->
            <form>
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="User Name" required="">
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm
                    Password</label>
                <input type="password" id="confirm-password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Checkbox -->
              <div class="mb-3">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="agreeCheck">
                  <label class="form-check-label" for="agreeCheck"><span
                        class="fs-5">I agree to the <a
                          href="terms-condition-page.html">Terms of
                          Service </a>and
                        <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                </div>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    Create Free Account
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="sign-up.html" class="fs-5">Already
                        member? Login </a>
                  </div>
                  <div>
                    <a href="forget-password.html" class="text-inherit
                        fs-5">Forgot your password?</a>
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
<script src="{{ asset('') }}design/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>




<!-- Theme JS -->
<script src="{{ asset('') }}design/assets/js/theme.min.js"></script>
</body>

</html>
