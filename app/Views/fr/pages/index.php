<?= $this->extend('fr/layout/base') ?>
<?= $this->section('content') ?>

<div class="body_content">
  <!-- Home Banner Style V1 -->
  <section class="hero-home13 at-home18 m30 overflow-hidden">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-7">
          <div class="home18-hero-content">
            <h1 class="banner-title animate-up-1 mb25"><?= lang('index.title') ?></h1>
            <p class="text-white text animate-up-2"><?= lang('index.subtit') ?></p>
            <div class="d-sm-flex align-items-center mt30 animate-up-3">
              <a href="<?= base_url('service') ?>" class="ud-btn btn-thm4 me-3 bdrs120 btn-1"><?= lang('index.ourSer') ?></a>
              <a href="<?= base_url('career') ?>" class="ud-btn btn-white bdr1 bdrs120 btn-2"><?= lang('index.findwork') ?></a>
            </div>
          </div>
        </div>
        <div class="col-xl-5 d-none d-xl-block">
          <div class="home18-hero-img text-end animate-up-1">
            <div class="thumb position-relative">
              <img class="img" src="<?= base_url() ?>frontend/images/about/home18-hero-img1.png" alt="">
            </div>
            
            <img class="img-1 bounce-y" src="<?= base_url() ?>frontend/images/about/happy-client-1.png" alt="">
            <img class="img-2 bounce-y" src="<?= base_url() ?>frontend/images/about/element-15.png" alt="">
            <img class="img-3 spin-right" src="<?= base_url() ?>frontend/images/about/element-16.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Talent by category -->
  <!-- <section class="pb40-md pb90 pt80 pt60-md">
      <div class="container">
        <div class="row align-items-center wow fadeInU">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Browse talent by category</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-0">
              <a class="ud-btn2" href="page-service-single.html">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row d-none d-lg-flex wow fadeInUp">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-developer"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Development & <br class="d-none d-lg-block"> IT</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-web-design-1"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Design & <br class="d-none d-lg-block"> Creative</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-digital-marketing"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Digital <br class="d-none d-lg-block"> Marketing</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-translator"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Writing & <br class="d-none d-lg-block"> Translation</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-microphone"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Music & <br class="d-none d-lg-block"> Audio</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-video-file"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Video & <br class="d-none d-lg-block"> Animation</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-ruler"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Engineering & <br class="d-none d-lg-block"> Architecture</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-goal"></span></div>
              <div class="details ml40">
                <p class="mb-0 text">1.853 skills</p>
                <h5 class="title">Finance & <br class="d-none d-lg-block"> Accounting</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-block d-lg-none">
          <div class="col-lg-12">
            <div class="slider-outer-dib navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp">
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-developer"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Development & <br class="d-none d-lg-block"> IT</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-web-design-1"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Design & <br class="d-none d-lg-block"> Creative</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-digital-marketing"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Digital <br class="d-none d-lg-block"> Marketing</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-translator"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Writing & <br class="d-none d-lg-block"> Translation</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-microphone"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Music & <br class="d-none d-lg-block"> Audio</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-video-file"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Video & <br class="d-none d-lg-block"> Animation</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-ruler"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Engineering & <br class="d-none d-lg-block"> Architecture</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs12 d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-goal"></span></div>
                  <div class="details ml40">
                    <p class="mb-0 text">1.853 skills</p>
                    <h5 class="title">Finance & <br class="d-none d-lg-block"> Accounting</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- Trending Services -->
  <section class="pt-0">
    <div class="container">
      <div class="row align-items-center wow fadeInUp">
        <div class="col-lg-9">
          <div class="main-title">
            <h2 class="title"><?= lang('index.trendingSer') ?></h2>
            <p class="paragraph"><?= lang('index.mostView') ?></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-start text-lg-end mb-4 mb-lg-2">
            <a class="ud-btn2" href="<?= base_url('service') ?>"><?= lang('index.allSer') ?><i class="fal fa-arrow-right-long"></i></a>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp" data-wow-delay="300ms">
        <div class="col-lg-12">
          <div class="navi_pagi_bottom_center slider-4-grid owl-carousel owl-theme">
            <div class="item">
              <div class="listing-style1 hover-box-shadow bdrs12">
                <div class="list-thumb m10 bdrs12 overflow-hidden">
                  <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-1.jpg" alt="">
                  <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                </div>
                <div class="list-content">
                  <p class="list-text body-color fz14 mb-1"><?= lang('index.services') ?></p>
                  <h5 class="list-title"><a href="<?= base_url('login') ?>"><?= lang('index.house') ?></a></h5>
                  <div class="review-meta d-flex align-items-center">
                    <i class="fas fa-star fz10 review-color me-2"></i>
                    <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                  </div>
                  <hr class="my-2">
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <div class="budget">
                      <p class="mb-0 body-color"><?= lang('index.startingat') ?><span class="fz17 fw500 dark-color ms-1">SAR 12.000 / $3.199</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="listing-style1 hover-box-shadow bdrs12">
                <div class="list-thumb m10 bdrs12 overflow-hidden">
                  <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-2.jpg" alt="">
                  <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                </div>
                <div class="list-content">
                  <p class="list-text body-color fz14 mb-1"><?= lang('index.services') ?></p>
                  <h5 class="list-title"><a href="<?= base_url('login') ?>"><?= lang('index.baby') ?></a></h5>
                  <div class="review-meta d-flex align-items-center">
                    <i class="fas fa-star fz10 review-color me-2"></i>
                    <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                  </div>
                  <hr class="my-2">
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <div class="budget">
                      <p class="mb-0 body-color"><?= lang('index.startingat') ?><span class="fz17 fw500 dark-color ms-1">SAR 12.000 / $3.199</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="listing-style1 hover-box-shadow bdrs12">
                <div class="list-thumb m10 bdrs12 overflow-hidden">
                  <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-3.jpg" alt="">
                  <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                </div>
                <div class="list-content">
                  <p class="list-text body-color fz14 mb-1"><?= lang('index.services') ?></p>
                  <h5 class="list-title line-clamp2"><a href="<?= base_url('login') ?>"><?= lang('index.elder') ?></a></h5>
                  <div class="review-meta d-flex align-items-center">
                    <i class="fas fa-star fz10 review-color me-2"></i>
                    <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                  </div>
                  <hr class="my-2">
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <div class="budget">
                      <p class="mb-0 body-color"><?= lang('index.startingat') ?><span class="fz17 fw500 dark-color ms-1">SAR 12.000 / $3.199</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="listing-style1 hover-box-shadow bdrs12">
                <div class="list-thumb m10 bdrs12 overflow-hidden">
                  <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-4.jpg" alt="">
                  <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                </div>
                <div class="list-content">
                  <p class="list-text body-color fz14 mb-1"><?= lang('index.services') ?></p>
                  <h5 class="list-title line-clamp2"><a href="<?= base_url('login') ?>"><?= lang('index.driver') ?></a></h5>
                  <div class="review-meta d-flex align-items-center">
                    <i class="fas fa-star fz10 review-color me-2"></i>
                    <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                  </div>
                  <hr class="my-2">
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <div class="budget">
                      <p class="mb-0 body-color"><?= lang('index.startingat') ?><span class="fz17 fw500 dark-color ms-1">SAR 12.000 / $3.199</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="listing-style1 hover-box-shadow bdrs12">
                <div class="list-thumb m10 bdrs12 overflow-hidden">
                  <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-5.jpg" alt="">
                  <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                </div>
                <div class="list-content">
                  <p class="list-text body-color fz14 mb-1"><?= lang('index.services') ?></p>
                  <h5 class="list-title"><a href="<?= base_url('login') ?>"><?= lang('index.chef') ?></a></h5>
                  <div class="review-meta d-flex align-items-center">
                    <i class="fas fa-star fz10 review-color me-2"></i>
                    <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                  </div>
                  <hr class="my-2">
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <div class="budget">
                      <p class="mb-0 body-color"><?= lang('index.startingat') ?><span class="fz17 fw500 dark-color ms-1">SAR 12.000 / $3.199</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="listing-style1 hover-box-shadow bdrs12">
                <div class="list-thumb m10 bdrs12 overflow-hidden">
                  <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-6.jpg" alt="">
                  <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                </div>
                <div class="list-content">
                  <p class="list-text body-color fz14 mb-1"><?= lang('index.services') ?></p>
                  <h5 class="list-title"><a href="<?= base_url('login') ?>"><?= lang('index.barista') ?></a></h5>
                  <div class="review-meta d-flex align-items-center">
                    <i class="fas fa-star fz10 review-color me-2"></i>
                    <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                  </div>
                  <hr class="my-2">
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <div class="budget">
                      <p class="mb-0 body-color"><?= lang('index.startingat') ?><span class="fz17 fw500 dark-color ms-1">SAR 12.000 / $3.199</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="pb90 pb30-md">
      <div class="container">
        <div class="row align-items-center wow fadeInUp">
          <div class="col-lg-9">
            <div class="main-title mb50">
              <h2 class="title"><?= lang('index.ourlatjob') ?></h2>
              <p class="paragraph"><?= lang('index.knowurworth') ?></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="<?= base_url('career') ?>"><?= lang('index.browseall') ?><i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="job-list-style1 default-box-shadow1 bdrs8 bdr1">
              <div class="d-xl-flex align-items-start">
                <div class="icon d-flex align-items-center mb20">
                  <img class="wa" src="<?= base_url('') ?>frontend/images/team/client-2.png" alt="">
                  <span class="fav-icon flaticon-star"></span>
                </div>
                <div class="details ml20 ml0-xl">
                  <h5><?= lang('index.elder') ?></h5>
                  <h6 class="mb-3 text-thm">PT. Management Mandiri Internasional</h6>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Singapore</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Japan</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Malaysia</p>
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQy7K3nzsHM6kKAgdAfrK6b5g0cUBZBv0NrlhitnS_pDC5bA/viewform" class="ud-btn btn-white2 mb25 me-4 w100">Apply<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="job-list-style1 bdrs8 bdr1">
              <div class="d-xl-flex align-items-start">
                <div class="icon d-flex align-items-center mb20">
                  <img class="wa" src="<?= base_url('') ?>frontend/images/team/client-1.png" alt="">
                  <span class="fav-icon flaticon-star"></span>
                </div>
                <div class="details ml20 ml0-xl">
                  <h5><?= lang('index.house') ?></h5>
                  <h6 class="mb-3 text-thm">PT. Management Mandiri Internasional</h6>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Malaysia</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Japan</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Singapore</p>
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQy7K3nzsHM6kKAgdAfrK6b5g0cUBZBv0NrlhitnS_pDC5bA/viewform" class="ud-btn btn-white2 mb25 me-4 w100">Apply<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="job-list-style1 bdrs8 bdr1">
              <div class="d-xl-flex align-items-start">
                <div class="icon d-flex align-items-center mb20">
                  <img class="wa" src="<?= base_url('') ?>frontend/images/team/client-3.png" alt="">
                  <span class="fav-icon flaticon-star"></span>
                </div>
                <div class="details ml20 ml0-xl">
                  <h5><?= lang('index.barista') ?></h5>
                  <h6 class="mb-3 text-thm">PT. Management Mandiri Internasional</h6>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Japan</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Hongkong</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Singapore</p>
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQy7K3nzsHM6kKAgdAfrK6b5g0cUBZBv0NrlhitnS_pDC5bA/viewform" class="ud-btn btn-white2 mb25 me-4 w100">Apply<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="job-list-style1 bdrs8 bdr1">
              <div class="d-xl-flex align-items-start">
                <div class="icon d-flex align-items-center mb20">
                  <img class="wa" src="<?= base_url('') ?>frontend/images/team/client-6.png" alt="">
                  <span class="fav-icon flaticon-star"></span>
                </div>
                <div class="details ml20 ml0-xl">
                  <h5><?= lang('index.waitress') ?></h5>
                  <h6 class="mb-3 text-thm">PT. Management Mandiri Internasional</h6>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Singapore</p>
                  <p class="list-inline-item mb-0 bdrl1 pl10">Malaysia</p>
                  <div class="list-meta d-flex justify-content-between align-items-center mt15">
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQy7K3nzsHM6kKAgdAfrK6b5g0cUBZBv0NrlhitnS_pDC5bA/viewform" class="ud-btn btn-white2 mb25 me-4 w100">Apply<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <br class="d-none d-xl-block">
  <!-- Our CTA -->
  <section class="home11-cta-3 at-home15 bgc-thm4 bdrs24 mx30">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6 col-lg-8 wow fadeInLeft">
          <div class="cta-style3">
            <h2 class="cta-title"><?= lang('index.aboutus') ?></h2>
            <p class="cta-text"><?= lang('index.about') ?></p>
            <a href="<?= base_url('about') ?>" class="ud-btn btn-dark default-box-shadow1 bdrs16 mr20"><?= lang('index.readmore') ?><i class="fal fa-arrow-right-long"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeIn">
          <img class="home11-ctaimg-v3 at-home15 d-none d-md-block" src="<?= base_url() ?>frontend/images/about/about-16.png" alt="">
          <img class="home15-ctaimg-v2 d-none d-md-block" src="<?= base_url() ?>frontend/images/about/element-14.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Customers Testimonials -->
  <section class="our-testimonial">
    <div class="container wow fadeInUp" data-wow-delay="300ms">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="main-title text-center">
            <h2 class="title"><?= lang('index.havetosay') ?></h2>
            <p class="paragraph mt10"><?= lang('index.subhavetosay') ?></p>
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
                    <h6 class="title ml30 ml15-xl mb-0">Lia Noorsyah P<br><small><?= lang('index.house') ?></small></h6>
                  </div>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                  <div class="thumb d-flex align-items-center">
                    <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/1.png" alt="1.png">
                    <h6 class="title ml30 ml15-xl mb-0">Triyati Slamet<br><small><?= lang('index.chef') ?></small></h6>
                  </div>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                  <div class="thumb d-flex align-items-center">
                    <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/1.png" alt="1.png">
                    <h6 class="title ml30 ml15-xl mb-0">Putri Pantura<br><small><?= lang('index.beautycian') ?></small></h6>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- For Clien -->
  <section class="pb120 pb60-sm">
    <div class="container">
      <!-- <div class="row align-items-center wow fadeInUp mb100 mb0-md">
        <div class="col-md-6 col-xl-6">
          <div class="text-center mb30-sm">
            <img class="w-100 bdrs4" src="<?= base_url() ?>frontend/images/about/about-14.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-xl-4 offset-xl-1">
          <div class="main-title">
            <h5 class="text-thm">For clients</h5>
            <h2 class="title">Find talent <br class="d-none d-lg-block">your way</h2>
            <p class="paragraph">Work with the largest network of independent professionals and get things done—from quick turnarounds to big transformations.</p>
          </div>
          <a href="<?= base_url('talent') ?>" class="ud-btn btn-white2 bdrs60">Get Started <i class="fal fa-arrow-right-long"></i></a>
        </div>
      </div> -->
      <div class="row align-items-center wow fadeInUp mt20">
        <div class="col-md-6 col-xl-4">
          <div class="main-title">
            <h5 class="text-thm"><?= lang('index.forcl') ?></h5>
            <h2 class="title"><?= lang('index.findgreat') ?></h2>
            <p class="paragraph"><?= lang('index.subfindgreat') ?></p>
          </div>
          <a href="<?= base_url('contact') ?>" class="ud-btn btn-white2 bdrs60"><?= lang('index.contactus') ?><i class="fal fa-arrow-right-long"></i></a>
        </div>
        <div class="col-md-6 col-xl-6 offset-xl-1">
          <div class="text-center mt30-sm">
            <img class="w-100 bdrs4" src="<?= base_url() ?>frontend/images/about/about-15.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <?= $this->endSection() ?>