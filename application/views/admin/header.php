<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon -->
    <link rel="icon" href="<?= base_url(); ?>assets/images/logo.png">
    <title><?= $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Data Table -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/DataTables/css/dataTables.bootstrap4.min.css">
    <!-- Ionicons -->
    <link href="<?= base_url(); ?>assets/ionicons/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?= site_url(); ?>admin" class="text-dark">Admin</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="<?= site_url(); ?>admin">Dashboard</a>
            <a class="p-2 text-dark" href="<?= site_url(); ?>admin/admin/">Admin</a>
            <a class="p-2 text-dark" href="<?= site_url(); ?>admin/sekretaris/">Sekretaris</a>
            <a class="p-2 text-dark" href="<?= site_url(); ?>admin/manager/">Manager</a>
        </nav>
        <a class="btn btn-outline-danger" href="#keluar" data-toggle="modal">Keluar <i class="ion-log-out"></i></a>
    </div>
