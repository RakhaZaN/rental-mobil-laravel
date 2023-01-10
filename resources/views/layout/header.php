<!--
<?php
if (!$this->session->has_userdata('username')) {
    redirect(base_url() . "index.php/users/login");
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free-6.1.1-web/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
    <!-- LINEARICONS -->
    <!-- <link rel="stylesheet" href="fonts/linearicons/style.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("dist/Registrasi/fonts/linearicons/style.css") ?>"> -->
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("dist/Registrasi/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css") ?>">
    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="<?php echo base_url("dist/Registrasi/vendor/date-picker/css/datepicker.min.css") ?>">

    <!-- STYLE CSS -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("dist/Registrasi/css/style.css") ?>"> -->
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= (base_url() . 'index.php/dashboard'); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= (base_url() . 'index.php/mobil'); ?>" class="nav-link">Daftar Mobil</a>
                </li>
                <?php if ($this->session->userdata('role') == 'administrator') { ?>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="<?= (base_url() . 'index.php/users'); ?>" class="nav-link">Daftar Users</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="<?= (base_url() . 'index.php/perawatan'); ?>" class="nav-link">Daftar Perawatan</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="<?= (base_url() . 'index.php/sewa'); ?>" class="nav-link">Daftar Penyewaan</a>
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
                    <a class="btn btn-danger" href="<?= (base_url() . 'index.php/users/logout'); ?>" role="button">LOGOUT</a>
                </li>



            </ul>
        </nav>
        <!-- /.navbar -->