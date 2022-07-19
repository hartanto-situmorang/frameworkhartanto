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

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div style="margin: 10px;" class="container-fluid">
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
                                    <img src="<?= base_url('aset/') ?>images/faces/<?= $user['gambar']; ?>" alt="profile">
                                    <span class="nav-profile-name"><?= $user2['nama']; ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a href="<?= base_url('Customer/profile') ?>" class="dropdown-item">
                                        <i class="mdi mdi-account text-primary"></i>
                                        Profile
                                    </a>
                                    <a href="<?= base_url('Home/logout') ?>" class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                                <ul class="navbar-nav navbar-nav-left">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-bell mx-0"></i>
                                            <span class="count bg-success"><?= $jmlnotif; ?></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                            <p class="mb-0 font-weight-normal float-left dropdown-header"><b>Pesanan Baru</b></p>
                                            <?php
                                            if ($this->session->userdata('role') == 'designer') {
                                                foreach ($NotifPesanan as $notif1) {
                                            ?>
                                                    <a href="<?= base_url('Designer/baca') ?>?id_pesanan=<?= $notif1['id']; ?>" class="dropdown-item preview-item">
                                                        <div class="preview-thumbnail">
                                                            <div class="preview-icon bg-success">
                                                                <i></i>
                                                                <img class="mdi mdi-information mx-0" src="<?= base_url('aset/images/tf/') ?><?= $notif1['gambar']; ?>" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="preview-item-content">
                                                            <h6 class="preview-subject font-weight-normal"><?= $notif1['nama_penerima']; ?></h6>
                                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                                <?= date('d F Y', $notif1['tanggal']); ?>
                                                            </p>
                                                        </div>
                                                    </a>
                                                <?php
                                                }
                                            } else {
                                                foreach ($NotifPesanan as $notif1) {
                                                ?>
                                                    <a href="<?= base_url('Customer/baca') ?>?id_pesanan=<?= $notif1['id']; ?>" class="dropdown-item preview-item">
                                                        <div class="preview-thumbnail">
                                                            <div class="preview-icon bg-success">
                                                                <i></i>
                                                                <img class="mdi mdi-information mx-0" src="<?= base_url('aset/images/tf/') ?><?= $notif1['gambar']; ?>" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="preview-item-content">
                                                            <h6 class="preview-subject font-weight-normal"><?= $notif1['nama_penerima']; ?></h6>
                                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                                <?= date('d F Y', $notif1['tanggal']); ?>
                                                            </p>
                                                        </div>
                                                    </a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <?php
                    if ($this->session->userdata('role') == 'customer') {
                    ?>
                        <ul class="nav page-navigation">
                            <li class="nav-item  <?php if ($header == 'dasboard')  echo 'active'; ?>">
                                <a class="nav-link" href="<?= base_url('Customer/dasboard') ?>">
                                    <i class="mdi mdi-file-document-box menu-icon"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'berbelanja')  echo 'active'; ?>">
                                <a href="#" class="nav-link">
                                    <i class="mdi mdi-cube-outline menu-icon"></i>
                                    <span class="menu-title">Berbelanja</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="submenu">
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Barang_user/pakaian') ?>">Pakaian</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Barang_user/celana') ?>">Celana</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Barang_user/aksesories') ?>">Aksesories</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item  <?php if ($header == 'Designer')  echo 'active'; ?>">
                                <a href="<?= base_url('Customer/designer') ?>" class="nav-link">
                                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                                    <span class="menu-title">Designer</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'transaksi')  echo 'active'; ?>">
                                <a href="<?= base_url('Customer/transaksi') ?>" class="nav-link">
                                    <i class="mdi mdi-grid menu-icon"></i>
                                    <span class="menu-title">Transaksi</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item <?php if ($header == 'tentang')  echo 'active'; ?>">
                                <a href="<?= base_url('Customer/tentang') ?>" class="nav-link">
                                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                    <span class="menu-title">Tentang Kami</span></a>
                            </li>
                        </ul>
                    <?php
                    } elseif ($this->session->userdata('role') == 'designer') {
                    ?>
                        <ul class="nav page-navigation">
                            <div class="m-5">
                            </div>
                            <li class="nav-item  <?php if ($header == 'dasboard')  echo 'active'; ?>">
                                <a href="<?= base_url('Designer/dasboard') ?>" class="nav-link">
                                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                                    <span class="menu-title">Dasboard</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'barang')  echo 'active'; ?>">
                                <a href="<?= base_url('Barang_designer/tampil') ?>" class="nav-link">
                                    <i class="mdi mdi-store menu-icon"></i>
                                    <span class="menu-title">Jual Barang</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'transaksi')  echo 'active'; ?>">
                                <a href="<?= base_url('Designer/transaksi') ?>" class="nav-link">
                                    <i class="mdi mdi-grid menu-icon"></i>
                                    <span class="menu-title">Transaksi</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'pemesanan')  echo 'active'; ?>">
                                <a href="<?= base_url('Designer/Pesanan') ?>" class="nav-link">
                                    <i class="mdi mdi mdi-shopping menu-icon"></i>
                                    <span class="menu-title">Pemesanan</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <div class="m-5">
                            </div>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul class="nav page-navigation">
                            <li class="nav-item  <?php if ($header == 'dasboard')  echo 'active'; ?>">
                                <a class="nav-link" href="<?= base_url('Customer/dasboard') ?>">
                                    <i class="mdi mdi-file-document-box menu-icon"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'berbelanja')  echo 'active'; ?>">
                                <a href="#" class="nav-link">
                                    <i class="mdi mdi-cube-outline menu-icon"></i>
                                    <span class="menu-title">Berbelanja</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="submenu">
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Barang_user/pakaian') ?>">Pakaian</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Barang_user/celana') ?>">Celana</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Barang_user/aksesories') ?>">Aksesories</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item  <?php if ($header == 'Designer')  echo 'active'; ?>">
                                <a href="<?= base_url('Customer/designer') ?>" class="nav-link">
                                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                                    <span class="menu-title">Designer</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item  <?php if ($header == 'transaksi')  echo 'active'; ?>">
                                <a href="<?= base_url('Customer/transaksi') ?>" class="nav-link">
                                    <i class="mdi mdi-grid menu-icon"></i>
                                    <span class="menu-title">Transaksi</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item <?php if ($header == 'tentang')  echo 'active'; ?>">
                                <a href="<?= base_url('Customer/tentang') ?>" class="nav-link">
                                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                    <span class="menu-title">Tentang Kami</span></a>
                            </li>
                            <div class="m-4">
                            </div>
                        </ul>
                    <?php
                    }
                    ?>
            </nav>
        </div>