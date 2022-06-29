<html lang="en">

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
    <link rel="stylesheet" href="<?= base_url('aset/') ?>stylecard.css">
    <link rel="shortcut icon" href="<?= base_url('aset/') ?>images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div style="margin: 10px;" class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left">
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                                    <span class="online-status"></span>
                                    <img src="<?= base_url('aset/') ?>images/faces/face28.png" alt="profile">
                                    <span class="nav-profile-name">Johnson</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                                <ul class="navbar-nav navbar-nav-left">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-bell mx-0"></i>
                                            <span class="count bg-success">2</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                            <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-success">
                                                        <i class="mdi mdi-information mx-0"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        Just now
                                                    </p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-warning">
                                                        <i class="mdi mdi-settings mx-0"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        Private message
                                                    </p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-info">
                                                        <i class="mdi mdi-account-box mx-0"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content">
                                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                                    <p class="font-weight-light small-text mb-0 text-muted">
                                                        2 days ago
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-email mx-0"></i>
                                            <span class="count bg-primary">4</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                            <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                                                </div>
                                                <div class="preview-item-content flex-grow">
                                                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                                    </h6>
                                                    <p class="font-weight-light small-text text-muted mb-0">
                                                        The meeting is cancelled
                                                    </p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                                                </div>
                                                <div class="preview-item-content flex-grow">
                                                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                                    </h6>
                                                    <p class="font-weight-light small-text text-muted mb-0">
                                                        New product launch
                                                    </p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                                                </div>
                                                <div class="preview-item-content flex-grow">
                                                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                                    </h6>
                                                    <p class="font-weight-light small-text text-muted mb-0">
                                                        Upcoming board meeting
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.html">
                                <i class="mdi mdi-file-document-box menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-cube-outline menu-icon"></i>
                                <span class="menu-title">Berbelanja</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a href="../../pages/forms/basic_elements.html" class="nav-link">
                                <i class="mdi mdi-chart-areaspline menu-icon"></i>
                                <span class="menu-title">Designer</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../pages/tables/basic-table.html" class="nav-link">
                                <i class="mdi mdi-grid menu-icon"></i>
                                <span class="menu-title">Transaksi</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../pages/icons/mdi.html" class="nav-link">
                                <i class="mdi mdi-emoticon menu-icon"></i>
                                <span class="menu-title">Icons</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../docs/documentation.html" class="nav-link">
                                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                <span class="menu-title">Tentang Kami</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>