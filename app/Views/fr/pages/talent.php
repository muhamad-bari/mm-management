<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Talents</title>
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
              <a href="<?= base_url($locale . '/') ?>">Home</a>
              <a href="<?= base_url($locale . '/talent') ?>">Talents</a>
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
              <h2>Talent List</h2>
              <p class="text mb-0">All the Lorem Ipsum generators on the Internet tend to repeat.</p>
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
        <div class="col-sm-6 col-lg-9">
          <div class="text-center text-sm-start">
            <div class="dropdown-lists">
              <!-- <ul class="p-0 mb-0 text-center text-sm-start">
                  <li class="d-block d-xl-none mb-2">
                    <button type="button" class="open-btn filter-btn-left"> <img class="me-2" src="<?= base_url() ?>frontend/images/icon/all-filter-icon.svg" alt=""> All Filter</button>
                  </li>
                  <li class="list-inline-item position-relative d-none d-xl-inline-block">
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Skills <i class="fa fa-angle-down ms-2"></i></button>
                    <div class="dropdown-menu dd4 pb20">
                      <div class="widget-wrapper pr20">
                        <div class="checkbox-style1">
                          <label class="custom_checkbox">UX Designer
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Web Developers
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Illustrators
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Node.js
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Project Managers
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                      <button class="done-btn ud-btn btn-thm drop_btn4">Apply<i class="fal fa-arrow-right-long"></i></button>
                    </div>
                  </li>
                  <li class="list-inline-item position-relative d-none d-xl-inline-block">
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Price <i class="fa fa-angle-down ms-2"></i></button>
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
                    <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Languages <i class="fa fa-angle-down ms-2"></i></button>
                    <div class="dropdown-menu dd4 pb20">
                      <div class="widget-wrapper pr20">
                        <div class="checkbox-style1">
                          <label class="custom_checkbox">English
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Italiano
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Spanish
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Greek
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="custom_checkbox">Turkish
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
        <div class="col-sm-6 col-lg-3">
          <div class="page_control_shorting mb10 d-flex align-items-center justify-content-center justify-content-sm-end">
            <div class="pcs_dropdown dark-color pr10"><span>Sort by</span>
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
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-1.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Robert Fox</h5>
              <p class="mb-0">Perawat Lansia</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Waitress</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-2.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Kristin Watson</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Waitress</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-3.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Darrell Steward</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Driver</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-4.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Theresa Webb</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Penjahit</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-1.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Robert Fox</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Baby Sitter</span>
                <span class="tag">Driver</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-2.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Kristin Watson</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Waitress</span>
                <span class="tag mx10">Barista</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-3.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Darrell Steward</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag mx10">Barista</span>
                <span class="tag">Driver</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-4.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Theresa Webb</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Perawat Lansia</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-1.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Robert Fox</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Asisten Rumah Tangga</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-2.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Kristin Watson</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Beautycian</span>
                <span class="tag mx10">Barista</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-3.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Darrell Steward</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Waitress</span>
                <span class="tag mx10">Barista</span>
                <span class="tag">Driver</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
            <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
              <img class="rounded-circle mx-auto" src="<?= base_url() ?>frontend/images/team/fl-4.png" alt="">
              <span class="online"></span>
            </div>
            <div class="details">
              <h5 class="title mb-1">Theresa Webb</h5>
              <p class="mb-0">Talent</p>
              <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                <span class="tag">Perawat Lansia</span>
              </div>
              <hr class="opacity-100 mt20 mb15">
              <div class="fl-meta d-flex align-items-center justify-content-between">
                <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Indonesia</span></a>
                <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$900 / month</span></a>
              </div>
              <div class="d-grid mt15">
                <a href="<?= base_url($locale . '/details-talent') ?>" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="mbp_pagination mt30 text-center">
          <ul class="page_navigation">
            <li class="page-item">
              <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
            </li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
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
          <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ Talent available</p>
        </div>
      </div>
    </div>
  </section>
  <?= $this->endSection() ?>