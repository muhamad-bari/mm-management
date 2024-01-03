<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<!-- Breadcumb Sections -->
<title>About</title>
<section class="breadcumb-section mt40">
  <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
    <div class="container">
      <div class="row">
        <div class="col-xl-5">
          <div class="position-relative">
            <h2 class="text-white"><?= lang('about.aboutus') ?></h2>
            <p class="text-white mb30"><?= lang('about.subtitle') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section Area -->
<section class="our-about pb0 pt60-lg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-xl-6">
        <div class="about-img mb30-sm wow fadeInRight" data-wow-delay="300ms">
          <img class="w100" src="<?= base_url() ?>frontend/images/about/about-1.png" alt="">
        </div>
      </div>
      <div class="col-md-6 col-xl-5 offset-xl-1">
        <div class="position-relative wow fadeInLeft" data-wow-delay="300ms">
          <h2 class="mb25"><?= lang('about.aboutus') ?></h2>
          <p class="text mb25"><?= lang('about.about') ?>
            <br class="d-none d-md-block"> <?= lang('about.about2') ?>
          </p>
          <a href="<?= base_url($locale . '/login') ?>" class="ud-btn btn-thm-border"><?= lang('about.findt') ?><i class="fal fa-arrow-right-long"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CTA Banner -->
<section class="p-0">
  <div class="cta-banner mx-auto maxw1600 pt120 pt60-lg pb90 pb60-lg position-relative overflow-hidden mx20-lg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-xl-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
          <div class="mb30">
            <div class="main-title">
              <h2 class="title"><?= lang('about.awhole') ?></h2>
            </div>
          </div>
          <div class="why-chose-list">
            <div class="list-one d-flex align-items-start mb30">
              <span class="list-icon flex-shrink-0 flaticon-badge"></span>
              <div class="list-content flex-grow-1 ml20">
                <h4 class="mb-1"><?= lang('about.proofof') ?></h4>
                <p class="text mb-0 fz15"><?= lang('about.subproofof') ?></p>
              </div>
            </div>
            <div class="list-one d-flex align-items-start mb30">
              <span class="list-icon flex-shrink-0 flaticon-money"></span>
              <div class="list-content flex-grow-1 ml20">
                <h4 class="mb-1"><?= lang('about.nocost') ?></h4>
                <p class="text mb-0 fz15"><?= lang('about.subnocost') ?></p>
              </div>
            </div>
            <div class="list-one d-flex align-items-start mb30">
              <span class="list-icon flex-shrink-0 flaticon-security"></span>
              <div class="list-content flex-grow-1 ml20">
                <h4 class="mb-1"><?= lang('about.safeand') ?></h4>
                <p class="text mb-0 fz15"><?= lang('about.subsafeand') ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="500ms">
          <div class="about-img"><img class="w100" src="<?= base_url() ?>frontend/images/about/about-6.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Funfact -->
<section class="bgc-light-yellow pb90 pb30-md overflow-hidden maxw1700 mx-auto bdrs4">
  <img class="left-top-img wow zoomIn d-none d-lg-block" src="<?= base_url() ?>frontend/images/vector-img/left-top.png" alt="">
  <img class="right-bottom-img wow zoomIn d-none d-lg-block" src="<?= base_url() ?>frontend/images/vector-img/right-bottom.png" alt="">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-xl-4 offset-xl-1 wow fadeInRight" data-wow-delay="100ms">
        <div class="cta-style6 mb30-sm">
          <h2 class="mb25"><?= lang('about.why') ?></h2>
          <p class="text-thm2 fz15 mb25"> <?= lang('about.subwhy') ?></p>
        </div>
      </div>
      <div class="col-md-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="funfact-style1 bdrs16 text-center ms-md-auto">
              <ul class="ps-0 mb-0 d-flex justify-content-center">
                <li><span><?= lang('about.iso') ?></span></li>
              </ul>
              <p class="fz15 dark-color"><?= lang('about.subiso') ?></p>
            </div>
            <div class="funfact-style1 bdrs16 text-center ms-md-auto">
              <ul class="ps-0 mb-0 d-flex justify-content-center">
                <li><span><?= lang('about.official') ?></span></li>
              </ul>
              <p class="fz15 dark-color"><?= lang('about.subofficial') ?></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="funfact-style1 bdrs16 text-center">
              <ul class="ps-0 mb-0 d-flex justify-content-center">
                <li>
                  <div class="title mb15"><?= lang('about.accredited') ?></div>
                </li>
              </ul>
              <p class="fz15 dark-color"><?= lang('about.subaccredited') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Testimonials -->
<section class="our-testimonial">
  <div class="container wow fadeInUp" data-wow-delay="300ms">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="main-title text-center">
          <h2 class="title"><?= lang('about.havetosay') ?></h2>
          <p class="paragraph mt10"><?= lang('about.subhavetosay') ?></p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xl-10 mx-auto">
        <div class="home2_testimonial_tabs position-relative">
          <div class="tab-content" id="pills-tabContent2">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="testimonial-style2 at-about2 text-center">
                <div class="testi-content text-center">
                  <span class="icon fas fa-quote-left"></span>
                  <h4 class="testi-text">"Keakraban dan Penuh Kekeluargaan, antara pimpinan dan staff kpd semua TKInya, Proses yang cepat dan zero cost, hanya ada di PT Management Mandiri Internasional "</h4>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="testimonial-style2 at-about2 text-center">
                <div class="testi-content text-center">
                  <span class="icon fas fa-quote-left"></span>
                  <h4 class="testi-text">"PT Management Mandiri Internasioanal memberikan bukti zero cost, mksh sukses terus buat PT Management "</h4>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="testimonial-style2 at-about2 text-center">
                <div class="testi-content text-center">
                  <span class="icon fas fa-quote-left"></span>
                  <h4 class="testi-text">"Alhamdulillah Lewt, Tmn Saya masuk PT Management Mandiri Internasional yang bner" Tanpa Potongan dan Semoga PT Management Makin jaya "</h4>
                </div>
              </div>
            </div>
          </div>
          <ul class="nav justify-content-center" id="pills-tab2" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="thumb d-flex align-items-center">
                  <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/1.png" alt="1.png">
                  <h6 class="title ml30 ml15-xl mb-0">Lia Noorsyah P<br><small><?= lang('about.house') ?></small></h6>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                <div class="thumb d-flex align-items-center">
                  <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/1.png" alt="1.png">
                  <h6 class="title ml30 ml15-xl mb-0">Triyati Slamet<br><small><?= lang('about.chef') ?></small></h6>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                <div class="thumb d-flex align-items-center">
                  <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/1.png" alt="1.png">
                  <h6 class="title ml30 ml15-xl mb-0">Putri Pantura<br><small><?= lang('about.beautycian') ?></small></h6>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner-about2 mx-auto maxw1700 position-relative mx20-lg pt60-lg pb60-lg">
  <img class="cta-about2-img d-none d-xl-block" src="<?= base_url() ?>frontend/images/about/about-7.jpg" alt="">
  <div class="container">
    <div class="row">
      <div class="col-md-11 wow fadeInUp" data-wow-delay="200ms">
        <div class="main-title">
          <h2 class="title text-capitalize"><?= lang('about.needs') ?></h2>
        </div>
      </div>
    </div>
    <div class="row wow fadeInDown" data-wow-delay="400ms">
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
          <span class="icon fz40 flaticon-cv"></span>
          <h4 class="iconbox-title mt20"><?= lang('about.searcha') ?></h4>
          <p class="text mb-0"><?= lang('about.subsearcha') ?></p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
          <span class="icon fz40 flaticon-web-design"></span>
          <h4 class="iconbox-title mt20"><?= lang('about.choosea') ?></h4>
          <p class="text mb-0"><?= lang('about.subchoosea') ?></p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
          <span class="icon fz40 flaticon-secure"></span>
          <h4 class="iconbox-title mt20"><?= lang('about.paysafe') ?></h4>
          <p class="text mb-0"><?= lang('about.subpaysafe') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include('fr/layout/faq') ?>
<?= $this->endSection() ?>