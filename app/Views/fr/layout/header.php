<!DOCTYPE html>
<html dir="ltr" lang="<?= $locale ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="bidding, fiverr, freelance marketplace, freelancers, freelancing, gigs, hiring, job board, job portal, job posting, jobs marketplace, peopleperhour, proposals, sell services, upwork">
  <meta name="description" content="#">
  <meta name="CreativeLayers" content="ATFN">
  <!-- css file -->
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/ace-responsive-menu.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/menu.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/slider.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/ud-custom-spacing.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/responsive.css">
  <!-- Title -->
  <title>PT.MM Management PJTKI</title>
  <!-- Favicon -->
  <link href="<?php echo base_url() ?>frontend/images/logo.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
  <link href="<?php echo base_url() ?>frontend/images/logo.png" sizes="128x128" rel="shortcut icon" />
  <!-- Apple Touch Icon -->
  <link href="<?php echo base_url() ?>frontend/images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
  <link href="<?php echo base_url() ?>frontend/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
  <link href="<?php echo base_url() ?>frontend/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  <link href="<?php echo base_url() ?>frontend/images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <div class="wrapper ovh">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav nav-homepage-style at-home18 stricky main-menu border-0">
      <!-- Ace Responsive Menu -->
      <nav class="posr">
        <div class="container posr">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto px-0 px-xl-3">
              <div class="d-flex align-items-center justify-content-between">
                <div class="logos">
                  <a class="header-logo logo1" href="<?php echo base_url('/') ?>"><img src="<?php echo base_url() ?>frontend/images/header-logo-white.png" alt="Header Logo"></a>
                  <a class="header-logo logo2" href="<?php echo base_url('/') ?>"><img src="<?php echo base_url() ?>frontend/images/header-logo2.png" alt="Header Logo"></a>
                </div>
                <div class="home1_style at-home18 mx15">
                  <div id="mega-menu">
                    <div class="text-center"><a class="btn-mega fw500 text-white" href="#"><span class="pr5 fz15 vam flaticon-menu"></span> <?= lang('Header.services')?></a></div>
                    <ul class="menu ps-0">
                      <li> <a class="" href="#">
                          <span class="menu-icn flaticon-home"></span> <span class="menu-title"><?= lang('Header.house')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-child-head"></span>
                          <span class="menu-title"><?= lang('Header.baby')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-user-nurse"></span>
                          <span class="menu-title"><?= lang('Header.elder')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-car-side"></span>
                          <span class="menu-title"><?= lang('Header.driver')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-hat-chef"></span>
                          <span class="menu-title"><?= lang('Header.chef')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-mug-hot-alt"></span>
                          <span class="menu-title"><?= lang('Header.Barista')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-circle-user"></span>
                          <span class="menu-title"><?= lang('Header.Waitress')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi fi-rr-cash-register"></span>
                          <span class="menu-title"><?= lang('Header.Tailor')?></span> </a>
                      </li>
                      <li> <a class="" href="#"> <span class="menu-icn fi-rr-makeup-brush"></span>
                          <span class="menu-title"><?= lang('Header.Beautycian')?></span> </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Responsive Menu Structure-->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                  <li class="visible_list"> <a class="list-item" href="<?php echo base_url('/').$locale ?>"><span class="title"><?= lang('Header.home')?></span></a></li>
                  <li class="visible_list"> <a class="list-item" href="<?php echo base_url($locale.'/about/') ?>"><span class="title"><?= lang('Header.about')?></span></a></li>
                  <li class="visible_list"> <a class="list-item" href="<?php echo base_url($locale.'/blog/') ?>"><span class="title"><?= lang('Header.blog')?></span></a></li>
                  <li class="visible_list"> <a class="list-item" href="<?php echo base_url($locale.'/gallery/') ?>"><span class="title"><?= lang('Header.gallery')?></span></a></li>
                  <li> <a class="list-item pe-0" href="<?php echo base_url($locale.'/contact/') ?>"><?= lang('Header.contact')?></a></li>
                </ul>
              </div>
            </div>
            <div class="col-auto pe-0 pe-xl-3">
              <div class="d-flex align-items-center">
                <a class="login-info mr10 home18-sign-btn px30 py-1 bdrs120" href="<?php echo base_url('login') ?>"><?= lang('Header.sign')?></a>
                <a class="ud-btn btn-white add-joining home18-join-btn bdrs120" href="<?php echo base_url('register') ?>"><?= lang('Header.join')?></a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <div class="hiddenbar-body-ovelay"></div>

    <!-- Mobile Nav  -->
    <div id="page" class="mobilie_header_nav stylehome1">
      <div class="mobile-menu">
        <div class="header bdrb1">
          <div class="menu_and_widgets">
            <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
              <a class="mobile_logo" href="#"><img src="<?php echo base_url() ?>frontend/images/header-logo-mobile.png" alt=""></a>
              <div class="right-side text-end">
                <a class="" href="<?php echo base_url('login') ?>">join</a>
                <a class="menubar ml30" href="#menu"><img src="<?php echo base_url() ?>frontend/images/mobile-dark-nav-icon.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="posr">
            <div class="mobile_menu_close_btn"><span class="far fa-times"></span></div>
          </div>
        </div>
      </div>
      <!-- /.mobile-menu -->
      <nav id="menu" class="">
        <ul>
          <li><a href="<?= base_url('/').$locale ?>"><?= lang('Header.home')?></a></li>
          <li><a href="<?= base_url($locale.'/about/') ?>"><?= lang('Header.about')?></a></li>
          <li><a href="<?= base_url($locale.'/blog/') ?>"><?= lang('Header.blog')?></a></span></li>
          <li><a href="<?= base_url($locale.'/contact/') ?>"><?= lang('Header.contact')?></a>
          <li><a href="<?= base_url($locale.'/gallery/') ?>"><?= lang('Header.gallery')?></a></li>
          <!-- Only for Mobile View -->
        </ul>
      </nav>
    </div>