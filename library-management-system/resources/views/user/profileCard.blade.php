<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Profile Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css"
        rel="stylesheet" />
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background-color: #f9f9fa;
        }

        .padding {
            padding: 3rem !important;
        }

        .user-card-full {
            overflow: hidden;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            border: none;
            margin-bottom: 30px;
        }

        .m-r-0 {
            margin-right: 0px;
        }

        .m-l-0 {
            margin-left: 0px;
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px;
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear,
                    left top,
                    right top,
                    from(#f29263),
                    to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263);
        }

        .user-profile {
            padding: 20px 0;
        }

        .card-block {
            padding: 1.25rem;
        }

        .m-b-25 {
            margin-bottom: 25px;
        }

        .img-radius {
            border-radius: 5px;
        }

        h6 {
            font-size: 14px;
        }

        .card .card-block p {
            line-height: 25px;
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px;
            }
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
            }
        }

        .card-block {
            padding: 1.25rem;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .card .card-block p {
            line-height: 25px;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .text-muted {
            color: #919aa3 !important;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .user-card-full .social-link li {
            display: inline-block;
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

    </style>
</head>

<body className="snippet-body">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <button type="submit" id="btn" onclick="printFnc()" class="btn btn-primary"> Print</button>
            <div class="row container d-flex justify-content-center m-auto">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <h6 class="f-w-600">LMS </h6>
                                    <div class="m-b-25">
                                        <img src="{{ asset('uploads/users') . '/' . $user->image }}"
                                            class="img-radius rounded-circle" width="100px" height="100px"
                                            alt="User-Profile-Image" />
                                    </div>
                                    <h6 class="f-w-600">{{ $user->name }}</h6>
                                    <p>
                                        @if ($user->isAdmin)
                                            Admin
                                        @else
                                            User
                                        @endif
                                    </p>
                                    {{-- <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i> --}}
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">
                                        Information
                                    </h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">
                                                Email
                                            </p>
                                            <h6 class="text-muted f-w-400">
                                                {{ $user->email }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">
                                                Phone
                                            </p>
                                            <h6 class="text-muted f-w-400">
                                                {{ $user->phone }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">
                                                Address
                                            </p>
                                            <h6 class="text-muted f-w-400">
                                                {{ $user->address }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">
                                                Validity
                                            </p>
                                            <h6 class="text-muted f-w-400">
                                                {{ date('d F Y', strtotime($user->created_at->addYear())) }}
                                            </h6>
                                        </div>
                                        <div class="col-sm-6 px-0">
                                            <img src="{{ asset('qr.png') }}" width="150px" alt="photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript">
        #
    </script>
    <script type="text/javascript">
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener("click", function(e) {
            e.preventDefault();
        });
    </script>
    <script>
         function printFnc()
        {
            document.getElementById('btn').style.display= 'none';
            window.print();
        }
    </script>
</body>

</html>
