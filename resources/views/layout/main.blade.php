<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Rental Mobil</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- LINEARICONS -->
    <!-- <link rel="stylesheet" href="fonts/linearicons/style.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('dist/Registrasi/fonts/linearicons/style.css') }}"> -->
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->
    <link rel="stylesheet"
        href="{{ asset('dist/Registrasi/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="{{ asset('dist/Registrasi/vendor/date-picker/css/datepicker.min.css') }}">

    <!-- STYLE CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('dist/Registrasi/css/style.css') }}"> -->
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('layout.sidebar')

        <!-- Content Blade Templating -->
        {{-- <div class="container"> --}}
        @yield('container')
        {{-- </div> --}}
        <!-- Content Blade Templating -->

        <!-- Footer -->
        @include('layout.footer')
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->

    <script src="{{ asset(' dist/Registrasi/js/jquery-3.3.1.min.js') }}
                                                                                        "></script>
    <!-- DATE-PICKER -->
    <script src="{{ asset(' dist/Registrasi/vendor/date-picker/js/datepicker.js') }}
                                                                                        "></script>
    <script src="{{ asset(' dist/Registrasi/vendor/date-picker/js/datepicker.en.js') }}
                                                                                        "></script>
    <script src="{{ asset(' dist/Registrasi/js/main.js') }}
                                                                                        "></script>

</body>

</html>
