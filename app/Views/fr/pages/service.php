<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Service</title>
<div class="body_content">
    <!-- <section class="categories_list_section overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="listings_category_nav_list_menu">
              <ul class="mb0 d-flex ps-0">
                <li><a class="active" href="#">All Categories</a></li>
                <li><a href="#">Graphics & Design</a></li>
                <li><a href="#">Digital Marketing</a></li>
                <li><a href="#">Writing & Translation</a></li>
                <li><a href="#">Video & Animation</a></li>
                <li><a href="#">Music & Audio</a></li>
                <li><a href="#">Programming & Tech</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Trending</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <div class="breadcumb-list">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('service') ?>">Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section pt-0">
      <div class="cta-service-v1 cta-banner mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg px30-lg">
        <img class="left-top-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/left-top.png" alt="">
        <img class="right-bottom-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/right-bottom.png" alt="">
        <img class="service-v1-vector bounce-y d-none d-lg-block" src="<?= base_url() ?>frontend/images/vector-img/vector-service-v1.png" alt="">
        <div class="container">
          <div class="row wow fadeInUp">
            <div class="col-xl-5">
              <div class="position-relative">
                <h2>Service</h2>
                <p class="text mb30">Give your visitor a smooth online experience with a solid UX design</p>
                <div class="d-flex align-items-center">
                  <a class="video-btn mr10 popup-iframe popup-youtube" href="#"><i class="fal fa-play"></i></a>
                  <h6 class="mb-0">How Management Mandiri Internasional Works</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Listings All Lists -->
    <section class="pt30 pb90">
      <div class="container">
        <div class="row align-items-center mb20">
          <div class="col-6 col-sm-6 col-lg-9 pe-0">
            <div class="text-center text-sm-start">
              <div class="dropdown-lists">
                <!-- <ul class="p-0 mb-0 text-center text-sm-start">
                  <li class="list-inline-item">
                    <button type="button" class="open-btn filter-btn-left mb10"> <img class="me-2" src="<?= base_url() ?>frontend/images/icon/all-filter-icon.svg" alt=""> All Filter</button>
                  </li>
                  <li class="list-inline-item position-relative d-none d-xl-inline-block">
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Delivery Time <i class="fa fa-angle-down ms-2"></i></button>
                    <div class="dropdown-menu">
                      <div class="widget-wrapper pb25 mb0">
                        <div class="radio-element">
                          <div class="form-check d-flex align-items-center mb10">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Express 24H</label>
                          </div>
                          <div class="form-check d-flex align-items-center mb10">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                            <label class="form-check-label" for="flexRadioDefault2">Up to 3 days</label>
                          </div>
                          <div class="form-check d-flex align-items-center mb10">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">Up to 7 days</label>
                          </div>
                          <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">Anytime</label>
                          </div>
                        </div>
                      </div>
                      <button class="done-btn ud-btn btn-thm drop_btn">Apply<i class="fal fa-arrow-right-long"></i></button>
                    </div>
                  </li>
                  <li class="list-inline-item position-relative d-none d-xl-inline-block">
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Budget <i class="fa fa-angle-down ms-2"></i></button>
                    <div class="dropdown-menu dd3">
                      <div class="widget-wrapper pb25 mb0 pr20">
                        <div class="range-slider-style1">
                          <div class="range-wrapper">
                            <div class="slider-range mb20"></div>
                            <div class="text-center">
                              <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-1 dark-color"></span>
                              <input type="text" class="amount2" placeholder="$70987">
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="done-btn ud-btn btn-thm drop_btn3">Apply<i class="fal fa-arrow-right-long"></i></button>
                    </div>
                  </li>
                  <li class="list-inline-item position-relative d-none d-xl-inline-block">
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Level <i class="fa fa-angle-down ms-2"></i></button>
                    <div class="dropdown-menu">
                      <div class="widget-wrapper pb25 mb0">
                        <div class="checkbox-style1">
                          <label class="custom_checkbox">Top Rated Seller
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Level Two
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Level One
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">New Seller
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                      <button class="done-btn ud-btn btn-thm dropdown-toggle">Apply<i class="fal fa-arrow-right-long"></i></button>
                    </div>
                  </li>
                  <li class="list-inline-item position-relative d-none d-xl-inline-block">
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Location <i class="fa fa-angle-down ms-2"></i></button>
                    <div class="dropdown-menu dd4 pb20">
                      <div class="widget-wrapper pr20">
                        <div class="checkbox-style1">
                          <label class="custom_checkbox">United States
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">United Kingdom
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Canada
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Germany
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Turkey
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                      <button class="done-btn ud-btn btn-thm drop_btn4">Apply<i class="fal fa-arrow-right-long"></i></button>
                    </div>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-lg-3 px-0">
            <div class="page_control_shorting mb10 d-flex align-items-center justify-content-center justify-content-sm-end">
              <div class="pcs_dropdown dark-color pr10 pr0-xs"><span>Sort by</span>
                <select class="selectpicker show-tick">
                  <option>Best Seller</option>
                  <option>Recommended</option>
                  <option>New Arrivals</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-1.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Asisten Rumah Tangga</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <div class="listing-thumbIn-slider position-relative navi_pagi_bottom_center slider-1-grid owl-carousel owl-theme">
                  <div class="item">
                    <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-2.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="item">
                    <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-3.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="item">
                    <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-4.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="item">
                    <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-5.jpg" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                </div>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Baby Sitter</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-3.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title line-clamp2"><a href="<?= base_url('details-service') ?>">Perawat Lansia</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-4.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Driver</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-5.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Chef</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-6.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Barista</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-7.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title line-clamp2"><a href="<?= base_url('details-service') ?>">Waitress</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-8.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Penjahit</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-9.jpg" alt="">
                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
              </div>
              <div class="list-content">
                <p class="list-text body-color fz14 mb-1">Service</p>
                <h5 class="list-title"><a href="<?= base_url('details-service') ?>">Beautycian</a></h5>
                <div class="review-meta d-flex align-items-center">
                  <i class="fas fa-star fz10 review-color me-2"></i>
                  <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                </div>
                <hr class="my-2">
                <div class="list-meta d-flex justify-content-between align-items-center mt15">
                  <div class="budget">
                    <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="mbp_pagination mt30 text-center">
            <ul class="page_navigation">
              <li class="page-item">
                <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item d-inline-block d-sm-none"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">...</a></li>
              <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
              </li>
            </ul>
            <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ property available</p>
          </div>
        </div> -->
      </div>
    </section>

<?= $this->endSection() ?>