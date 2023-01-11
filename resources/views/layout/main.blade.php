<!--
    <?php
    if (!$this->session->has_userdata('username')) {
        redirect(base_url() . 'index.php/users/login');
    }

    ?>
    ?> -->

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
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" {{ url('/dashboard') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" {{ url('/mobil') }}" class="nav-link">Daftar Mobil</a>
                </li>
                <?php if ($this->session->userdata("role") == 'administrator') { ?>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" {{ url('/users') }}" class="nav-link">Daftar Users</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" {{ url('/sewa') }}" class="nav-link">Daftar Penyewaan</a>
                </li>
                <?php
                    }
                    ?>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="btn btn-danger" href=" {{ url('/users/logout') }}" role="button">LOGOUT</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="{{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php if ($this->session->has_userdata('username')) {
                                echo $this->session->userdata('username');
                                echo ' @ ' . $this->session->userdata('role');
                            } ?>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href=" {{ url('/mobil') }}" class="nav-link">
                                <i class="fa fa-car"></i>
                                <p>
                                    Daftar Mobil
                                </p>
                            </a>
                        </li>
                        <?php if ($this->session->userdata("role") == 'administrator') { ?>
                        <li class="nav-item">
                            <a href=" {{ url('/perawatan') }}" class="nav-link">
                                <i class=" fa fa-wrench"></i>
                                <p>
                                    Daftar Perawatan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ url('/sewa') }}" class="nav-link">
                                <i class="fa fa-check "></i>
                                <p>
                                    Daftar Penyewaan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ url('/users') }}" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>
                                    Daftar users
                                </p>
                            </a>
                        </li>
                        <?php
                }
                ?>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-danger" href=" {{ url('/users/logout') }}" role="button">LOGOUT</a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Blade Templating -->
        <div class="container">
            @yield('container')
        </div>
        <!-- Content Blade Templating -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
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
