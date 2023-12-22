<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Careers</title>
<div class="body_content">

  <!-- Breadcumb Sections -->
  <section class="breadcumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcumb-style1">
            <div class="breadcumb-list">
              <a href="#">Home</a>
              <a href="#">Career</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcumb Sections -->
  <section class="breadcumb-section pt-0">
    <div class="cta-job-v1 cta-banner mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg px30-lg">
      <img class="left-top-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/left-top.png" alt="">
      <img class="right-bottom-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/right-bottom.png" alt="">
      <img class="service-v1-vector at-job bounce-x d-none d-xl-block" src="<?= base_url() ?>frontend/images/vector-img/vector-service-v1.png" alt="">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-xl-7">
            <div class="position-relative">
              <h2>Job List</h2>
              <p class="text">All the Lorem Ipsum generators on the Internet tend to repeat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Listings All Lists -->
  <section class="pt40 pb90">
    <div class="container">
      <div class="row align-items-center mb20">
        <div class="col-sm-6 col-lg-9">
          <div class="text-center text-sm-start">
            <div class="dropdown-lists">
              <ul class="p-0 mb-0 text-center text-sm-start">
                <li class="d-block d-xl-none mb-2">
                  <!-- Advance Features modal trigger -->
                  <button type="button" class="open-btn filter-btn-left"> <img class="me-2" src="<?= base_url() ?>frontend/images/icon/all-filter-icon.svg" alt=""> All Filter</button>
                </li>
                <li class="list-inline-item position-relative d-none d-xl-inline-block">
                  <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Negara <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu dd4 pb20">
                    <div class="widget-wrapper pr20">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Singapore
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Taiwan
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Hongkong
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Malaysia
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Japan
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <button class="done-btn ud-btn btn-thm drop_btn4">Apply<i class="fal fa-arrow-right-long"></i></button>
                  </div>
                </li>
                <li class="list-inline-item position-relative d-none d-xl-inline-block">
                  <button class="open-btn mb10 dropdown-toggle" type="button" data-bs-toggle="dropdown">Jenis Pekerjaan <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu">
                    <div class="widget-wrapper pb25 mb0">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">All
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Household Assistant
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Baby Sitter
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Elderly Nurse
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Driver
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Chef
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Barista
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Waitress
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Tailor
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Beautycian
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Other
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <button class="done-btn ud-btn btn-thm dropdown-toggle">Apply<i class="fal fa-arrow-right-long"></i></button>
                  </div>
                </li>
              </ul>
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
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-2.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Caddy Golf</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Japan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-1.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Biscuit Factory</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Singapore</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-3.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Everwan Factory</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Hongkong</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-6.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Elderly Nurse</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Singapore</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Japan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-5.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Electronic Factory</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-8.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Chicken Farm</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-7.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">hotel employee</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Singapore</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Taiwan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Japan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-4.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Cow Farm</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-2.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">baby Sitter</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Japan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Taiwan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-1.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Chef</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Hongkong</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Japan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Singapore</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-3.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Waitress</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Singapore</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-6.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Tailor</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-2.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Beautycian</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Japan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Malaysia</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-1.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Household Assistant</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Japan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Singapore</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-3.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Driver</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Malaysia</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Singapore</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="job-list-style1 bdr1">
            <div class="icon d-flex align-items-center mb20">
              <img class="wa" src="<?= base_url() ?>frontend/images/team/client-6.png" alt="">
              <h6 class="mb-0 text-thm ml20">PT. Management Mandiri Internasional</h6>
              <span class="fav-icon flaticon-star"></span>
            </div>
            <div class="details">
              <h5 class="mb20">Barista</h5>

              <p class="list-inline-item mb-3 bdrl1 pl15">Japan</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Hongkong</p>
              <p class="list-inline-item mb-0 bdrl1 pl15">Singapore</p>
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
          <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ property available</p>
        </div>
      </div>
    </div>
  </section>
  <?= $this->endSection() ?>