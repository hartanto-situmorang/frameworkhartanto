<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reponsive Login Form</title>
    <link rel="stylesheet" href="<?= base_url('aset/login/') ?>style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>style.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>stylecard.css">
    <link rel="shortcut icon" href="<?= base_url('aset/') ?>images/auth/logo.png">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>styleproduk.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>

<body>
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div style="margin: 0px;" class="container-fluid">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                    <ul class="navbar-nav navbar-nav-left">
                        <img style="width: 70%;" src="<?= base_url('aset/') ?>images/auth/logo.png" alt="">
                    </ul>
                    <ul class="navbar-nav navbar-nav-left">
                        <img style="width: 90%;" src="<?= base_url('aset/') ?>images/auth/logot.png" alt="">
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <a href="<?= base_url('home/regis') ?>" class="btn btn-success"> Daftar </a>
                        <div class="col-3">
                            <a href="<?= base_url('home/login') ?>" class="btn btn-primary"> Login </a>
                        </div>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
    </div>