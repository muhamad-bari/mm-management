<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title><?= $title ?></title>
    <link rel="icon" href=
            "<?= base_url('frontend/images/apple-touch-icon-60x60.png')?>"
          type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('backend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('backend/css/tags-input.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('backend/css/style.css')?>">
    
</head>
<body>
<div class="wrapper">
        <div class="side-bar pt-3">
            <div class="d-flex justify-content-between w-100 align-items-center">
                <div class="logo px-2">
                    <img src="<?= base_url('frontend/images/header-logo.png')?>" alt="" width="200">
                    <p class="text-light">Selamat Datang kembali, <?= session()->get('nama') ?></p>
                </div>
                <span class="px-3 close-btn" id="menu-close" style="color:white"><i class="fa-solid fa-close fa-xl"></i></span>
            </div>
            <?php
                if(session()->get('level')=="1")
                {
                    ?>
            <ul class="side-menu mt-3">
                <li><a href="<?= base_url('Dashboard/') ?>" class="menu-link">Dashboard</a></li>
                <li><a href="<?= base_url('Dashboard/transaksi') ?>" class="menu-link">Transaksi</a></li>
                <li><a href="<?= base_url('Dashboard/report') ?>" class="menu-link">Report</a></li>
                <li><a href="<?= base_url('Dashboard/histori') ?>">Histori Transaksi</a></li>
                <li><a href="<?= base_url('Dashboard/User') ?>" class="menu-link">User Roles</a></li>
            </ul>
                    <?php
                }
                elseif(session()->get('level')=="2")
                {
            ?>
            <div class="side-menu">
                <li class="text-light"><i class="fa-solid fa-chart-simple mr-3"></i><a href="<?= base_url('cms/dashboard') ?>" class="menu-link mx-2"> Dashboard</a></li>
                <li class="text-light"><i class="fa-solid fa-image mr-3"></i><a href="<?= base_url('cms/galeri') ?>" class="menu-link mx-2"> Galeri</a></li>
                <!-- <li><a href="<?= base_url('Admin/transaksi') ?>" class="menu-link">Transaksi</a></li>
                <li><a href="#" class="menu-link  dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#menu-sub">Report</a>
                <ul class="sub-menu nav flex-column collapse" id="menu-sub">
                    <li><a href="<?= base_url('Admin/report') ?>" class="menu-link">Report Pertanggal</a></li>
                    <li><a href="<?= base_url('Admin/report') ?>" class="menu-link">Report Harian</a></li>
                    <li><a href="<?= base_url('Admin/report') ?>" class="menu-link">Report Semua Transaksi</a></li>
                </ul>
                </li>
                <li><a href="<?= base_url('Admin/histori') ?>">Histori Transaksi</a></li> -->
                </div>
            <?php
                }
                ?>
        </div>
        <div class="d-flex flex-column w-100">
            <div class="nv-bar d-flex justify-content-between align-items-center">
                <div class="profile mx-3 d-flex justify-content-between align-items-center">
                    <span class="text-light mx-3" id="menu-button"><i class="fa-solid fa-bars fa-xl"></i></span>
                    <h5><?= session()->get('nama') ?></h5>
                </div>
                    <div class="profile mx-3 d-flex justify-content-between align-items-center">
                    <a href="<?= base_url('logout/')?>"><span class="text-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="logout"><i class="fa fa-power-off fa-xl"></i></span></a>
                </div>
            </div>
        
            <!-- main menu -->
            <div class="main-page">
                <div class="container">