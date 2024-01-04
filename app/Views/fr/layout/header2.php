<!DOCTYPE html>
<html dir="ltr" lang="<?= $locale ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="PJTKI, Indonesia, Tenaga Kerja Indonesia, Management mandiri, Management Internasional, PT MM Management, TKI, Terpercaya, Tumbuh, Kembang, Mandiri, Management, Internasional, Loker Luar Negeri">
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
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/slider.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/slider.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/galer.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/ud-custom-spacing.css">
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/dashbord_navitaion.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="<?= base_url() ?>frontend/css/responsive.css">
  <!-- Title -->
  <title>User Dashboard</title>
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
<script src=" <?= base_url() ?>frontend/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src=" <?= base_url() ?>frontend/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <!-- Titok Piksel -->
  <script>
    ! function(w, d, t) {
      w.TiktokAnalyticsObject = t;
      var ttq = w[t] = w[t] || [];
      ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function(t, e) {
        t[e] = function() {
          t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
        }
      };
      for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
      ttq.instance = function(t) {
        for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
        return e
      }, ttq.load = function(e, n) {
        var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
        ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
        n = document.createElement("script");
        n.type = "text/javascript", n.async = !0, n.src = i + "?sdkid=" + e + "&lib=" + t;
        e = document.getElementsByTagName("script")[0];
        e.parentNode.insertBefore(n, e)
      };

      ttq.load('CM3E05BC77U3QO244DD0');
      ttq.page();
    }(window, document, 'ttq');
  </script>
  <!-- End Titok Piksel -->
</head>

<body>
  <div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
      <!-- Ace Responsive Menu -->
      <nav class="posr">
        <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
          <div class="row align-items-center justify-content-between">
            <div class="col-6 col-lg-auto">
              <div class="text-center text-lg-start d-flex align-items-center">
                <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                  <a href="<?= base_url() ?>frontend/index.html" class="logo"><img src=" <?= base_url() ?>frontend/images/header-logo-mobile.png" alt=""></a>
                </div>
                <div class="fz20 ml90">
                  <a href="#" class="dashboard_sidebar_toggle_icon vam"><img src=" <?= base_url() ?>frontend/images/dashboard-navicon.svg" alt=""></a>
                </div>
                <a class="login-info d-block d-xl-none ml40 vam" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe"></span></a>
                <div class="ml40 d-none d-xl-block">
                  <div class="search_area dashboard-style">
                    <input type="text" class="form-control border-0" placeholder="<?= lang('Header.whatservice') ?>">
                    <label><span class="flaticon-loupe"></span></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-auto">
              <div class="text-center text-lg-end header_right_widgets">
                <ul class="dashboard_dd_menu_list d-flex align-items-center justify-content-center justify-content-sm-end mb-0 p-0">
                  <li class="d-none d-sm-block">
                    <a class="text-center mr5 text-thm2 dropdown-toggle fz20" type="button" data-bs-toggle="dropdown" href="#"><span class="flaticon-notification"></span></a>
                    <div class="dropdown-menu">
                      <div class="dboard_notific_dd px30 pt10 pb15">
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-1.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.resume') ?></p>
                            <p class="text mb-0"><?= lang('Header.updated') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-2.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.changed') ?></p>
                            <p class="text mb-0"><?= lang('Header.password') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-3.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.accountcreated') ?></p>
                            <p class="text mb-0"><?= lang('Header.successfully') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-4.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.applied') ?></p>
                            <p class="text mb-0"><?= lang('Header.house') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-5.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.uploaded') ?></p>
                            <p class="text mb-0"><?= lang('Header.successfully') ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-none d-sm-block">
                    <a class="text-center mr5 text-thm2 dropdown-toggle fz20" type="button" data-bs-toggle="dropdown" href="#"><span class="flaticon-mail"></span></a>
                    <div class="dropdown-menu">
                      <div class="dboard_notific_dd px30 pt20 pb15">
                        <div class="notif_list d-flex align-items-start bdrb1 pb25 mb10">
                          <img class="img-2" src=" <?= base_url() ?>frontend/images/testimonials/testi-1.png" alt="">
                          <div class="details ml15">
                            <p class="dark-color fw500 mb-2">Ali Tufan</p>
                            <p class="text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            <p class="mb-0 text-thm">4 hours ago</p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-start mb25">
                          <img class="img-2" src=" <?= base_url() ?>frontend/images/testimonials/testi-2.png" alt="">
                          <div class="details ml15">
                            <p class="dark-color fw500 mb-2">Ali Tufan</p>
                            <p class="text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            <p class="mb-0 text-thm">4 hours ago</p>
                          </div>
                        </div>
                        <div class="d-grid">
                          <a href="<?= base_url($locale . '/dashboard-message') ?>" class="ud-btn btn-thm w-100"><?= lang('Header.viewall') ?><i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-none d-sm-block">
                    <a class="text-center mr5 text-thm2 dropdown-toggle fz20" type="button" data-bs-toggle="dropdown" href="#"><span class="flaticon-like"></span></a>
                    <div class="dropdown-menu">
                      <div class="dboard_notific_dd px30 pt10 pb15">
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-1.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.resume') ?></p>
                            <p class="text mb-0"><?= lang('Header.updated') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-2.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.changed') ?></p>
                            <p class="text mb-0"><?= lang('Header.password') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-3.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.accountcreated') ?></p>
                            <p class="text mb-0"><?= lang('Header.successfully') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center bdrb1 pb15 mb10">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-4.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.applied') ?></p>
                            <p class="text mb-0"><?= lang('Header.house') ?></p>
                          </div>
                        </div>
                        <div class="notif_list d-flex align-items-center">
                          <img src=" <?= base_url() ?>frontend/images/resource/notif-5.png" alt="">
                          <div class="details ml10">
                            <p class="text mb-0"><?= lang('Header.uploaded') ?></p>
                            <p class="text mb-0"><?= lang('Header.successfully') ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="user_setting">
                    <div class="dropdown">
                      <a class="btn" href="#" data-bs-toggle="dropdown">
                        <img src=" <?= base_url() ?>frontend/images/resource/user.png" alt="user.png">
                      </a>
                      <div class="dropdown-menu">
                        <div class="user_setting_content">
                          <p class="fz15 fw400 ff-heading mb10 pl30"><?= lang('Header.start') ?></p>
                          <a class="dropdown-item active" href="<?= base_url($locale . '/user-dashboard') ?>"><i class=" flaticon-home mr10"></i><?= lang('Header.dashboard') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-proposal') ?>"><i class=" flaticon-document mr10"></i><?= lang('Header.proposal') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-save') ?>"><i class=" flaticon-like mr10"></i><?= lang('Header.saved') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-message') ?>"><i class=" flaticon-chat mr10"></i><?= lang('Header.message') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-reviews') ?>"><i class="flaticon-review-1 mr10"></i><?= lang('Header.reviews') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-invoice') ?>"><i class="flaticon-receipt mr10"></i><?= lang('Header.invoice') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-payouts') ?>"><i class="flaticon-dollar mr10"></i><?= lang('Header.payouts') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-statement') ?>"><i class="flaticon-web mr10"></i><?= lang('Header.statement') ?></a>
                          <p class="fz15 fw400 ff-heading mt30 pl30">Organize and Manage</p>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-manage-service') ?>"><i class="flaticon-presentation mr10"></i><?= lang('Header.manageservices') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-manage-jobs') ?>"><i class="flaticon-briefcase mr10"></i><?= lang('Header.managejobs') ?></a>
                          <a class="dropdown-item" href="<?= base_url() ?>frontend/page-dashboard-favorites.html"><i class="flaticon-content mr10"></i><?= lang('Header.manageprojects') ?></a>
                          <p class="fz15 fw400 ff-heading mt30 pl30">Account</p>
                          <a class="dropdown-item" href="<?= base_url($locale . '/dashboard-profile') ?>"><i class="flaticon-photo mr10"></i><?= lang('Header.myprofile') ?></a>
                          <a class="dropdown-item" href="<?= base_url($locale . '/login') ?>"><i class="flaticon-logout mr10"></i><?= lang('Header.logout') ?></a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
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
                <input type="text" class="form-control border-0" placeholder="<?= lang('Header.whatservice') ?>">
                <label><span class="far fa-magnifying-glass"></span></label>
                <button class="ud-btn btn-thm" type="submit"><?= lang('Header.search') ?></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Nav  -->
    <div id="page" class="mobilie_header_nav stylehome1">
      <div class="mobile-menu">
        <div class="header bdrb1">
          <div class="menu_and_widgets">
            <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
              <a class="mobile_logo" href="#"><img src=" <?= base_url() ?>frontend/images/header-logo-mobile.png" alt=""></a>
              <div class="right-side text-end">
                <a class="" href="<?= base_url($locale . '/login') ?>"><?= lang('Header.join') ?></a>
                <a class="menubar ml30" href="#menu"><img src=" <?= base_url() ?>frontend/images/mobile-dark-nav-icon.svg" alt=""></a>
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
          <li><a href="<?= base_url('/') . $locale ?>"><?= lang('Header.home') ?></a></li>
          <li><a href="<?= base_url($locale . '/about') ?>"><?= lang('Header.about') ?></a></li>
          <li><a href="<?= base_url($locale . '/blog') ?>"><?= lang('Header.blog') ?></a></span></li>
          <li><a href="<?= base_url($locale . '/contact') ?>"><?= lang('Header.contact') ?></a>
          <li><a href="<?= base_url($locale . '/gallery') ?>"><?= lang('Header.gallery') ?></a></li>
          <!-- Only for Mobile View -->
        </ul>
      </nav>
    </div>

    <div class="dashboard_content_wrapper">
      <div class="dashboard dashboard_wrapper pr30 pr0-xl">
        <div class="dashboard__sidebar d-none d-lg-block">
          <div class="dashboard_sidebar_list">
            <p class="fz15 fw400 ff-heading pl30">Start</p>
            <div class="sidebar_list_item">
              <a href="<?= base_url($locale . '/user-dashboard') ?>" class="items-center -is-active"><i class="flaticon-home mr15"></i><?= lang('Header.dashboard') ?></a>
            </div>
            <div class="sidebar_list_item">
              <a href="<?= base_url($locale . '/dashboard-proposal') ?>" class="items-center"><i class="flaticon-document mr15"></i><?= lang('Header.proposal') ?></a>
            </div>
            <div class="sidebar_list_item">
              <a href="<?= base_url($locale . '/dashboard-save') ?>" class="items-center"><i class="flaticon-like mr15"></i><?= lang('Header.saved') ?></a>
            </div>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/dashboard-message') ?>" class="items-center"><i class="flaticon-chat mr15"></i><?= lang('Header.message') ?></a>
            </div>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/dashboard-reviews') ?>" class="items-center"><i class="flaticon-review-1 mr15"></i><?= lang('Header.reviews') ?></a>
            </div>
            <div class="sidebar_list_item">
              <a href="<?= base_url($locale . '/dashboard-invoice') ?>" class="items-center"><i class="flaticon-receipt mr15"></i><?= lang('Header.invoice') ?></a>
            </div>
            <div class="sidebar_list_item">
              <a href="<?= base_url($locale . '/dashboard-payouts') ?>" class="items-center"><i class="flaticon-dollar mr15"></i><?= lang('Header.payouts') ?></a>
            </div>
            <div class="sidebar_list_item">
              <a href="<?= base_url($locale . '/dashboard-statement') ?>" class="items-center"><i class="flaticon-web mr15"></i><?= lang('Header.statement') ?></a>
            </div>
            <p class="fz15 fw400 ff-heading pl30 mt30"><?= lang('Header.organizeand') ?></p>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/dashboard-manage-service') ?>" class="items-center"><i class="flaticon-presentation mr15"></i><?= lang('Header.manageservices') ?></a>
            </div>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/dashboard-manage-jobs') ?>" class="items-center"><i class="flaticon-briefcase mr15"></i><?= lang('Header.managejobs') ?></a>
            </div>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/dashboard-manage-project') ?>" class="items-center"><i class="flaticon-content mr15"></i><?= lang('Header.manageprojects') ?></a>
            </div>
            <p class="fz15 fw400 ff-heading pl30 mt30"><?= lang('Header.account') ?></p>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/dashboard-profile') ?>" class="items-center"><i class="flaticon-photo mr15"></i><?= lang('Header.myprofile') ?></a>
            </div>
            <div class="sidebar_list_item ">
              <a href="<?= base_url($locale . '/login') ?>" class="items-center"><i class="flaticon-logout mr15"></i><?= lang('Header.logout') ?></a>
            </div>
          </div>
        </div>
        <div class="dashboard__main pl0-md">
          <div class="dashboard__content hover-bgc-color">
            <div class="row pb40">
              <div class="col-lg-12">
                <div class="dashboard_navigationbar d-block d-lg-none">
                  <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> <?= lang('Header.dashboardnav') ?></button>
                    <ul id="myDropdown" class="dropdown-content">
                      <li>
                        <p class="fz15 fw400 ff-heading mt30 pl30"><?= lang('Header.start') ?></p>
                      </li>
                      <li class="active"><a href="<?= base_url($locale . '/user-dashboard') ?>"><i class=" flaticon-home mr10"></i><?= lang('Header.dashboard') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-proposal') ?>"><i class=" flaticon-document mr10"></i><?= lang('Header.proposal') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-save') ?>"><i class=" flaticon-like mr10"></i><?= lang('Header.saved') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-message') ?>"><i class=" flaticon-chat mr10"></i><?= lang('Header.message') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-reviews') ?>"><i class="flaticon-review-1 mr10"></i><?= lang('Header.reviews') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-invoice') ?>"><i class="flaticon-receipt mr10"></i><?= lang('Header.invoice') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-payouts') ?>"><i class="flaticon-dollar mr10"></i><?= lang('Header.payouts') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-statement') ?>"><i class="flaticon-web mr10"></i><?= lang('Header.statement') ?></a></li>
                      <li>
                        <p class="fz15 fw400 ff-heading mt30 pl30"><?= lang('Header.organizeand') ?></p>
                      </li>
                      <li><a href="<?= base_url($locale . '/dashboard-manage-service') ?>"><i class="flaticon-presentation mr10"></i><?= lang('Header.manageservices') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-manage-jobs') ?>"><i class="flaticon-briefcase mr10"></i><?= lang('Header.managejobs') ?></a></li>
                      <li><a href="<?= base_url($locale . '/dashboard-manage-project') ?>"><i class="flaticon-content mr10"></i><?= lang('Header.manageprojects') ?></a></li>
                      <li>
                        <p class="fz15 fw400 ff-heading mt30 pl30"><?= lang('Header.account') ?></p>
                      </li>
                      <li><a href="<?= base_url($locale . '/dashboard-profile') ?>"><i class="flaticon-photo mr10"></i><?= lang('Header.myprofile') ?></a></li>
                      <li><a href="<?= base_url($locale . '/login') ?>"><i class="flaticon-logout mr10"></i><?= lang('Header.logout') ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>