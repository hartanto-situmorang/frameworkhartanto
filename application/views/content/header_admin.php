<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hartanto Situmorang</title>
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>style.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>styleproduk.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>stylecard.css">
    <link rel="shortcut icon" href="<?= base_url('aset/') ?>images/auth/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body">
    <div class="container-scroller">
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left">
                            <img style="width: 70%;" src="<?= base_url('aset/') ?>images/auth/logo.png" alt="">
                        </ul>
                        <ul class="navbar-nav navbar-nav-left">
                            <img style="width: 90%;" src="<?= base_url('aset/') ?>images/auth/logot.png" alt="">
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                                    <span class="online-status"></span>
                                    <img src="<?= base_url('aset/') ?>images/faces/face3.jpg" alt="profile">
                                    <span class="nav-profile-name">ADMIN</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <!-- <a href="< ? = //base_url('Admin/profile') ?>" class="dropdown-item">
                                        <i class="mdi mdi-account text-primary"></i>
                                        Profile
                                    </a> -->
                                    <a href="<?= base_url('Home/logout') ?>" class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar mt-4">
                <div class="container">
                    <ul class="nav page-navigation justify-content-sm-center">
                        <li class="nav-item <?php if ($header == 'dasboards')  echo 'active'; ?>">
                            <a class="nav-link" href="<?= base_url('Admin/dasboard') ?>">
                                <i class="mdi mdi-file-document-box menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($header == 'lihatdesigner')  echo 'active'; ?>">
                            <a class="nav-link" href="<?= base_url('Admin/designer') ?>" class="nav-link">
                                <i class="mdi mdi-chart-areaspline menu-icon"></i>
                                <span class="menu-title">Daftar Designer</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($header == 'lihatcustomer')  echo 'active' ?>">
                            <a class="nav-link" href="<?= base_url('Admin/customer') ?>" class="nav-link">
                                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                <span class="menu-title">Daftar Customer</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>