<?= $this->extend('fr/layout/base')?>
<?= $this->section('content') ?>

  <div class="body_content">
    <!-- Home Banner Style V1 -->
    <section class="hero-home13 at-home18 m30 overflow-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-7">
            <div class="home18-hero-content">
              <h1 class="banner-title animate-up-1 mb25">Freelance Services For <br class="d-none d-xl-block">Your Business</h1>
              <p class="text-white text animate-up-2">Work with talented people at the most affordable price to get the most <br class="d-none d-lg-block">out of your time and cost</p>
              <div class="d-sm-flex align-items-center mt30 animate-up-3">
                <a href="page-freelancer-v1.html" class="ud-btn btn-thm4 me-3 bdrs120 btn-1">Services</a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 d-none d-xl-block">
            <div class="home18-hero-img text-end animate-up-1">
              <div class="thumb position-relative">
                <img class="img" src="<?php echo base_url() ?>frontend/images/about/home18-hero-img1.png" alt="">
              </div>
              <div class="iconbox-small1 text-start d-flex wow fadeInRight default-box-shadow4 bounce-x">
                <span class="icon flaticon-badge"></span>
                <div class="details pl20">
                  <h6 class="mb-1">Proof of quality</h6>
                  <p class="text fz13 mb-0">Lorem Ipsum Dolar Amet</p>
                </div>
              </div>
              <img class="img-1 bounce-y" src="<?php echo base_url() ?>frontend/images/about/happy-client-1.png" alt="">
              <img class="img-2 bounce-y" src="<?php echo base_url() ?>frontend/images/about/element-15.png" alt="">
              <img class="img-3 spin-right" src="<?php echo base_url() ?>frontend/images/about/element-16.png" alt="">
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
              <h2 class="title">Trending Services</h2>
              <p class="paragraph">Most viewed and all-time top-selling services</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="page-service-single.html">All Services<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="navi_pagi_bottom_center slider-4-grid owl-carousel owl-theme">
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-1.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="<?php echo base_url() ?>frontend/images/team/fl-s-1.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-2.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will create modern flat design illustration</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="<?php echo base_url() ?>frontend/images/team/fl-s-2.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Ali Tufan</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-3.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="<?php echo base_url() ?>frontend/images/team/fl-s-3.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-4.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will do mobile app development for ios and android</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="<?php echo base_url() ?>frontend/images/team/fl-s-4.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-5.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="<?php echo base_url() ?>frontend/images/team/fl-s-1.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-6.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="<?php echo base_url() ?>frontend/images/team/fl-s-2.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-7.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="<?php echo base_url() ?>frontend/images/team/fl-s-3.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-1.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="<?php echo base_url() ?>frontend/images/team/fl-s-1.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 hover-box-shadow bdrs12">
                  <div class="list-thumb m10 bdrs12 overflow-hidden">
                    <img class="w-100" src="<?php echo base_url() ?>frontend/images/listings/g-2.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will create modern flat design illustration</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="<?php echo base_url() ?>frontend/images/team/fl-s-2.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Ali Tufan</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
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
    <section class="cta-banner-about2 at-home18 mx-auto maxw1700 position-relative pt60-lg pb60-lg">
      <img class="cta-about2-img bdrs24 d-none d-xl-block" src="<?php echo base_url() ?>frontend/images/about/about-18.jpg" alt="">
      <div class="container">
        <div class="row">
          <div class="col-md-11 wow fadeInUp" data-wow-delay="200ms">
            <div class="main-title">
              <h2 class="title text-capitalize">Need something done?</h2>
              <p class="text">Most viewed and all-time top-selling services</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="400ms">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-cv"></span>
              <h4 class="iconbox-title mt20">Post a job</h4>
              <p class="text mb-0">It’s free and easy to post a job.<br class="d-none d-md-block"> Simply fill in a title, description.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-web-design"></span>
              <h4 class="iconbox-title mt20">Choose freelancers</h4>
              <p class="text mb-0">It’s free and easy to post a job.<br class="d-none d-md-block"> Simply fill in a title, description.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
              <span class="icon fz40 flaticon-secure"></span>
              <h4 class="iconbox-title mt20">Pay safely</h4>
              <p class="text mb-0">It’s free and easy to post a job.<br class="d-none d-md-block"> Simply fill in a title, description.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->
    <section class="pb0 pt60">
      <div class="container maxw1600 bdrb1 pb60">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">834</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Total Freelancer</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">732</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Positive Review</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">90</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Order recieved</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">236</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Projects Completed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Highest Rated Freelancers -->
    <section class="pb90 pb30-md">
      <div class="container">
        <div class="row align-items-center wow fadeInUp">
          <div class="col-lg-9">
            <div class="main-title">
              <h2 class="title">Highest Rated Freelancers</h2>
              <p class="paragraph">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-lg-end mb-2">
              <a href="page-freelancer-v1.html" class="ud-btn2">All Services <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="vam_nav_style dots_none slider-4-grid2 owl-carousel owl-theme">
              <div class="item">
                <div class="feature-style2 mb30">
                  <div class="feature-img bdrs12"><img class="bdrs12" src="<?php echo base_url() ?>frontend/images/team/home18-team-1.jpg" alt=""></div>
                  <div class="feature-content pt15">
                    <h5 class="title mb-2">Robert Fox <span class="float-end fz15"><i class="fas fa-star fz10 pr10"></i>4.9</span></h5>
                    <p class="text fz15">Scrum Master</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-style2 mb30">
                  <div class="feature-img bdrs12"><img class="bdrs12" src="<?php echo base_url() ?>frontend/images/team/home18-team-2.jpg" alt=""></div>
                  <div class="feature-content pt15">
                    <h5 class="title mb-2">Floyd Miles <span class="float-end fz15"><i class="fas fa-star fz10 pr10"></i>4.9</span></h5>
                    <p class="text fz15">Software Developer</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-style2 mb30">
                  <div class="feature-img bdrs12"><img class="bdrs12" src="<?php echo base_url() ?>frontend/images/team/home18-team-3.jpg" alt=""></div>
                  <div class="feature-content pt15">
                    <h5 class="title mb-2">Brooklyn Simmons <span class="float-end fz15"><i class="fas fa-star fz10 pr10"></i>4.9</span></h5>
                    <p class="text fz15">Software Tester</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-style2 mb30">
                  <div class="feature-img bdrs12"><img class="bdrs12" src="<?php echo base_url() ?>frontend/images/team/home18-team-4.jpg" alt=""></div>
                  <div class="feature-content pt15">
                    <h5 class="title mb-2">Jane Cooper <span class="float-end fz15"><i class="fas fa-star fz10 pr10"></i>4.9</span></h5>
                    <p class="text fz15">UI/UX Designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Customers Testimonials -->
    <section class="bgc-light-yellow maxw1700 mx-auto bdrs24">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-12">
            <div class="testimonial-slider-home13 vam_nav_style dots_none slider-1-grid2 owl-carousel owl-theme">
              <div class="item">
                <div class="row align-items-center">
                  <div class="col-lg-5 col-xl-5">
                    <div class="testimonial-style4-img position-relative">
                      <img class="bdrs12" src="<?php echo base_url() ?>frontend/images/about/about-16.jpg" alt="">
                      <a class="video-button-home11 at-home13 popup-iframe popup-youtube" href="https://www.youtube.com/watch?v=1WdiUn9JaX0"><i class="far fa-play"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="testimonial-style4 position-relative ps-0">
                      <h2 class="sub-title mb25">Envato</h2>
                      <h4 class="title mb35">“ I have used Freeio numerous times for several different companies. I have always had great experiences. I once tried using someone else and I ended up having to cancel the order and move back to Freeio. ”</h4>
                      <h6 class="author fz14">Courtney Henry</h6>
                      <p class="desig mb-0">Product Manager | Envato</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row align-items-center">
                  <div class="col-lg-5 col-xl-5">
                    <div class="testimonial-style4-img position-relative">
                      <img class="bdrs12" src="<?php echo base_url() ?>frontend/images/about/about-16.jpg" alt="">
                      <a class="video-button-home11 popup-iframe popup-youtube" href="https://www.youtube.com/watch?v=1WdiUn9JaX0"><i class="far fa-play"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="testimonial-style4 position-relative ps-0">
                      <h2 class="sub-title mb25">Envato</h2>
                      <h4 class="title mb35">“ I have used Freeio numerous times for several different companies. I have always had great experiences. I once tried using someone else and I ended up having to cancel the order and move back to Freeio. ”</h4>
                      <h6 class="author fz14">Courtney Henry</h6>
                      <p class="desig mb-0">Product Manager | Envato</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- For Clien -->
    <section class="pb120 pb60-sm">
      <div class="container">
        <div class="row align-items-center wow fadeInUp mb100 mb0-md">
          <div class="col-md-6 col-xl-6">
            <div class="text-center mb30-sm">
              <img class="w-100 bdrs4" src="<?php echo base_url() ?>frontend/images/about/about-14.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 col-xl-4 offset-xl-1">
            <div class="main-title">
              <h5 class="text-thm">For clients</h5>
              <h2 class="title">Find talent <br class="d-none d-lg-block">your way</h2>
              <p class="paragraph">Work with the largest network of independent professionals and get things done—from quick turnarounds to big transformations.</p>
            </div>
            <a href="page-contact.html" class="ud-btn btn-white2 bdrs60">Get Started <i class="fal fa-arrow-right-long"></i></a>
          </div>
        </div>
        <div class="row align-items-center wow fadeInUp mt20">
          <div class="col-md-6 col-xl-4">
            <div class="main-title">
              <h5 class="text-thm">For clients</h5>
              <h2 class="title">Find great <br class="d-none d-lg-block">work</h2>
              <p class="paragraph">Work with the largest network of independent professionals and get things done—from quick turnarounds to big transformations.</p>
            </div>
            <a href="page-contact.html" class="ud-btn btn-white2 bdrs60">Contact Us <i class="fal fa-arrow-right-long"></i></a>
          </div>
          <div class="col-md-6 col-xl-6 offset-xl-1">
            <div class="text-center mt30-sm">
              <img class="w-100 bdrs4" src="<?php echo base_url() ?>frontend/images/about/about-15.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

<?= $this->endSection() ?>