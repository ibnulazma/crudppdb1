<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();

$tahun = $db->table('tbl_ta')

    ->get()->getRowArray();
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?>| <?= $subtitle ?> </title>


    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/solid.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/dropzone/min/dropzone.min.css">
    <!-- iCheck for checkboxes and radio inputs -->


    <style>
        /* body {
            background-color: ;
        } */

        .judul {
            background-color: #ffff;
            position: absolute;
            width: 1000px;

            transform: translate(-50%, -50%);
            padding: 50px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

        }

        .about {
            padding: 50px;
        }

        .logo {
            width: 70px;
            align-items: center;
        }


        /* h5 {
            font-size: 30px;
            font-weight: bold;

        } */

        .gambar {
            width: 100px;
        }
    </style>

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <span class="brand-text " style="font-weight: bold;">PPDB INKA</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Buat Akun</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Login</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url('auth') ?>" class="dropdown-item">Admin </a></li>
                                <li><a href="<?= base_url('penguji') ?>" class="dropdown-item">Penguji</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content mt-5">
                <div class="container">
                    <?= $this->renderSection('content') ?>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?= base_url() ?>/AdminLTE/dist/js/demo.js"></script> -->

</html>