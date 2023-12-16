<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="bidding, fiverr, freelance marketplace, freelancers, freelancing, gigs, hiring, job board, job portal, job posting, jobs marketplace, peopleperhour, proposals, sell services, upwork">
<meta name="description" content="About">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/ace-responsive-menu.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/menu.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/fontawesome.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/flaticon.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/bootstrap-select.min.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/ud-custom-spacing.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/animate.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/slider.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/style.css">
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/galer.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?= base_url() ?>frontend/css/responsive.css">

<!-- Favicon -->
<link href="<?= base_url() ?>frontend/images/logo.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?= base_url() ?>frontend/images/logo.png" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="<?= base_url() ?>frontend/images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
<link href="<?= base_url() ?>frontend/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="<?= base_url() ?>frontend/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="<?= base_url() ?>frontend/images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<!-- <body class="bgc-thm4"> -->
<div class="wrapper ovh">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto pe-0">
            <div class="d-flex align-items-center">
              <a class="header-logo bdrr1 pr30 pr5-xl" href="<?= base_url('/') ?>"><img src="<?= base_url() ?>frontend/images/header-logo-dark.png" alt="Header Logo"></a>
              <div class="home1_style">
                <div id="mega-menu">
                  <a class="btn-mega fw500" href="#"><span class="pl30 pl10-xl pr5 fz15 vam flaticon-menu"></span> Services</a>
                  <ul class="menu ps-0">
                    <li> <a class="" href="#"> 
                      <span class="menu-icn flaticon-home"></span> <span class="menu-title">Asisten Rumah Tangga</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-child-head"></span> 
                    <span class="menu-title">Baby Sitter</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-user-nurse"></span> 
                    <span class="menu-title">Perawat Lansia</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-car-side"></span> 
                    <span class="menu-title">Driver</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-hat-chef"></span> 
                    <span class="menu-title">Chef</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-mug-hot-alt"></span> 
                    <span class="menu-title">Barista</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-circle-user"></span> 
                    <span class="menu-title">Waitress</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-cash-register"></span> 
                    <span class="menu-title">Penjahit</span> </a>
                    </li>
                    <li> <a class="" href="#"> <span class="menu-icn fi-rr-makeup-brush"></span> 
                    <span class="menu-title">Beautician</span> </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="visible_list"> <a class="list-item" href="<?= base_url('/') ?>"><span class="title">Home</span></a></li>
                <li class="visible_list"> <a class="list-item" href="<?= base_url('about') ?>"><span class="title">About</span></a></li>
                <li class="visible_list"> <a class="list-item" href="<?= base_url('blog') ?>"><span class="title">Blog</span></a></li>
                <li class="visible_list"> <a class="list-item" href="<?= base_url('gallery') ?>"><span class="title">Gallery</span></a></li>
                <li> <a class="list-item" href="<?= base_url('contact') ?>">Contact</a></li>
              </ul>
              <a class="login-info bdrl1 pl15-lg pl30" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe"></span></a>
              <a class="login-info mx15-lg mx30" href="<?= base_url('login') ?>"><span class="d-none d-xl-inline-block">Sign</span> in</a>
              <a class="ud-btn btn-thm add-joining" href="<?= base_url('register') ?>">Join</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Search Modal -->
  <div class="search-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-xmark"></i></button>
          </div>
          <div class="modal-body">
            <div class="popup-search-field search_area">
              <input type="text" class="form-control border-0" placeholder="What service are you looking for today?">
              <label><span class="far fa-magnifying-glass"></span></label>
              <button class="ud-btn btn-thm" type="submit">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bdrb1">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="<?= base_url() ?>frontend/images/header-logo-dark.png" alt=""></a>
            <div class="right-side text-end">
              <a class="" href="page-login.html">join</a>
              <a class="menubar ml30" href="#menu"><img src="<?= base_url() ?>frontend/images/mobile-dark-nav-icon.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="posr"><div class="mobile_menu_close_btn"><span class="far fa-times"></span></div></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
    <ul>
        <li><span><a href="<?= base_url('/') ?>">Home</a></span></li>
        <li><span><a href="<?= base_url('about') ?>">About</a></span></li>
        <li><span><a href="<?= base_url('blog') ?>">Blog</a></span></li>
        <li><span><a href="<?= base_url('contact') ?>">contact</a></span>
        <li><span><a href="<?= base_url('gallery') ?>">Gallery</a></span></li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>