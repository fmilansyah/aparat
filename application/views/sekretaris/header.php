<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icon -->
    <link rel="icon" href="<?= base_url(); ?>assets/images/logo.png">
    <title><?= $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- Data Table -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/DataTables/css/dataTables.bootstrap4.min.css">
    <!-- Custom -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="<?= base_url(); ?>assets/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- jQuery Core -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .active {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><?= $nama ?></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="<?php if($title == "Dashboard") { echo "active"; } ?>">
                    <a href="<?= site_url(); ?>sekretaris/"><i class="ion-home"></i> Dashboard</a>
                </li>
                <li class="<?php if($title == "Surat Masuk") { echo "active"; } ?>">
                    <a href="<?= site_url(); ?>sekretaris/suratMasuk"><i class="ion-archive"></i> Surat Masuk</a>
                </li>
                <li class="<?php if($title == "Surat Keluar") { echo "active"; } ?>">
                    <a href="<?= site_url(); ?>sekretaris/suratKeluar"><i class="ion-paper-airplane"></i> Surat Keluar</a>
                </li>
                <li class="<?php if($title == "Disposisi") { echo "active"; } ?>">
                    <a href="<?= site_url(); ?>sekretaris/disposisi"><i class="ion-forward"></i> Disposisi</a>
                </li>
                <li class="<?php if($title == "Bagian") { echo "active"; } ?>">
                    <a href="<?= site_url(); ?>sekretaris/bagian"><i class="ion-ios-people"></i> Bagian</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a href="#keluar" data-toggle="modal" class="download">Keluar <i class="ion-log-out"></i></a></li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content" style="width: 100%">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background-color: #ed7506">
                            <i class="ion-navicon-round"></i>
                        </button>
                    </div>

                    <h3 class="float-right"><a href="<?= site_url(); ?>">APARAT</a></h3>
                </div>
            </nav>
