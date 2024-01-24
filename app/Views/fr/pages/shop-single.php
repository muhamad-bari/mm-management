<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>

<section class="shop-checkout pt40 pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-6">
            <div class="shop-single">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-item1" role="tabpanel" aria-labelledby="pills-item1-tab">
                  <div class="shop-single-item mb10 bdr1 bdrs8 text-center py-5">
                    <a class="popup-img" href="<?= base_url() ?>frontend/images/shop/shop-single-1.png"><img class="wa" src="<?= base_url() ?>frontend/images/shop/shop-single-1.png" alt=""></a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-item2" role="tabpanel" aria-labelledby="pills-item2-tab">
                  <div class="shop-single-item mb10 bdr1 bdrs8 text-center py-5">
                    <a class="popup-img" href="<?= base_url() ?>frontend/images/shop/shop-single-1.png"><img class="wa" src="<?= base_url() ?>frontend/images/shop/shop-single-1.png" alt=""></a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-item3" role="tabpanel" aria-labelledby="pills-item3-tab">
                  <div class="shop-single-item mb10 bdr1 bdrs8 text-center py-5">
                    <a class="popup-img" href="<?= base_url() ?>frontend/images/shop/shop-single-1.png"><img class="wa" src="<?= base_url() ?>frontend/images/shop/shop-single-1.png" alt=""></a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-item4" role="tabpanel" aria-labelledby="pills-item4-tab">
                  <div class="shop-single-item mb10 bdr1 bdrs8 text-center py-5">
                    <a class="popup-img" href="<?= base_url() ?>frontend/images/shop/shop-single-1.png"><img class="wa" src="<?= base_url() ?>frontend/images/shop/shop-single-1.png" alt=""></a>
                  </div>
                </div>
              </div>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link mr10 mb10 active" id="pills-item1-tab" data-bs-toggle="pill" data-bs-target="#pills-item1" type="button" role="tab" aria-controls="pills-item1" aria-selected="true">
                    <img src="<?= base_url() ?>frontend/images/shop/shop-single-2.png" alt="">
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mr10 mb10" id="pills-item2-tab" data-bs-toggle="pill" data-bs-target="#pills-item2" type="button" role="tab" aria-controls="pills-item2" aria-selected="false">
                    <img src="<?= base_url() ?>frontend/images/shop/shop-single-3.png" alt="">
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mr10 mb10" id="pills-item3-tab" data-bs-toggle="pill" data-bs-target="#pills-item3" type="button" role="tab" aria-controls="pills-item3" aria-selected="false">
                    <img src="<?= base_url() ?>frontend/images/shop/shop-single-4.png" alt="">
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mr10 mb10" id="pills-item4-tab" data-bs-toggle="pill" data-bs-target="#pills-item4" type="button" role="tab" aria-controls="pills-item4" aria-selected="false">
                    <img src="<?= base_url() ?>frontend/images/shop/shop-single-5.png" alt="">
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shop-single-content">
              <h2 class="mb15"><?= lang('service.house')?></h2>
              <div class="list-style1 mb10">
                <ul class="mb-1">
                  <li class="mb-1"><i class="far fa-check text-thm3 bgc-thm3-light"></i><?= lang('details.avail') ?></li>
                </ul>
              </div>
              <p class="text"><?= lang('details.detailhouse') ?></p>
              <h4 class="price mb30">$3.199/SAR 12.000 <small><del class="body-light-color fz13 fw400">$4.000</del></small></h4>
              <div class="d-sm-flex">
                <div class="cart-quantity mb10-xs mr20">
                  <div class="quantity-block">
                    <button class="quantity-arrow-minus"> <span class="fa fa-minus"></span> </button>
                    <input class="quantity-num" type="number" value="1">
                    <button class="quantity-arrow-plus"> <span class="fas fa-plus"></span> </button>
                  </div>
                </div>
                <a class="ud-btn btn-thm" href="<?= base_url($locale . '/checkout') ?>"><?= lang('details.checkout') ?><i class="fal fa-arrow-right-long"></i></a>
              </div>
              <div class="d-flex mt30 mb20-sm">
                <ul class="ps-0">
                  <li class="text"><?= lang('details.id') ?>:</li>
                  <li class="text"><?= lang('details.age') ?></li>
                  <li class="text"><?= lang('details.service') ?></li>
                </ul>
                <ul class="ps-0 ms-4">
                  <li class="text">RTA-0058</li>
                  <li class="text">23</li>
                  <li class="text"><?= lang('service.house')?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp mt90" data-wow-delay="300ms">
          <div class="col-md-3 col-lg-4">
            <div class="vertical-tab">
              <div class="widget_list">
                <nav>
                  <div class="nav flex-column nav-tabs text-start" id="nav-tab" role="tablist">
                    <button class="nav-link active text-start" id="nav-accountpayment-tab" data-bs-toggle="tab" data-bs-target="#nav-accountpayment" type="button" role="tab" aria-controls="nav-accountpayment" aria-selected="true"><span><?= lang('details.desc') ?></span></button>
                    <!-- <button class="nav-link text-start" id="nav-manageother-tab" data-bs-toggle="tab" data-bs-target="#nav-manageother" type="button" role="tab" aria-controls="nav-manageother" aria-selected="false"><span>Review</span></button> -->
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-lg-8">
            <div class="terms_condition_grid text-start">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-accountpayment" role="tabpanel" aria-labelledby="nav-accountpayment-tab">
                  <div class="grids">
                    <h4 class="title"><?= lang('modal.service') ?> <?= lang('service.house') ?></h4>
                    <div class="custom_bsp_grid d-sm-flex align-items-center">
                      <ul class="list-style-type-bullet p-0 ml15 mb0-sm">
                        <li><?= lang('modal.from') ?></li>
                        <li><?= lang('modal.experience') ?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="grids">
                    <h4 class="title"><?= lang('modal.criteria') ?></h4>
                    <div class="custom_bsp_grid d-sm-flex align-items-center">
                      <ul class="list-style-type-bullet p-0 ml15 mb0-sm">
                        <li><?= lang('modal.one') ?></li>
                        <li><?= lang('modal.two') ?></li>
                        <li><?= lang('modal.three') ?></li>
                        <li><?= lang('modal.four') ?></li>
                        <li><?= lang('modal.five') ?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="grids">
                    <h4 class="title"><?= lang('modal.category') ?></h4>
                    <div class="custom_bsp_grid d-sm-flex align-items-center">
                      <ul class="list-style-type-bullet p-0 ml15 mb0-sm">
                        <li><?= lang('modal.c1') ?></li>
                        <li><?= lang('modal.c2') ?></li>
                        <li><?= lang('modal.c3') ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- <div class="tab-pane fade" id="nav-manageother" role="tabpanel" aria-labelledby="nav-manageother-tab">
                  <div class="grids">
                    <div class="product_single_content mb50">
                      <div class="mbp_pagination_comments">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="total_review d-flex align-items-center justify-content-between mb20">
                              <h4 class="mb15 mb0-sm">80 Reviews</h4>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="mbp_first position-relative d-flex align-items-center justify-content-start mb30-sm">
                              <img src="<?= base_url() ?>frontend/images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                              <div class="ml20">
                                <h6 class="mt-0 mb-0">Bessie Cooper</h6>
                                <div><span class="fz14">12 March 2022</span></div>
                              </div>
                            </div>
                            <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <div class="review_cansel_btns d-flex">
                              <a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
                              <a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="mbp_first position-relative d-flex align-items-center justify-content-start mt30 mb30-sm">
                              <img src="<?= base_url() ?>frontend/images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                              <div class="ml20">
                                <h6 class="mt-0 mb-0">Darrell Steward</h6>
                                <div><span class="fz14">12 March 2022</span></div>
                              </div>
                            </div>
                            <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <div class="review_cansel_btns d-flex pb30">
                              <a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
                              <a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="position-relative bdrb1 pb50">
                              <a href="#" class="ud-btn btn-light-thm">See More<i class="fal fa-arrow-right-long"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="bsp_reveiw_wrt">
                      <h6 class="fz17">Add a Review</h6>
                      <p class="text">Your email address will not be published. Required fields are marked *</p>
                      <form class="comments_form mt30">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="mb-4">
                              <label class="fw500 ff-heading dark-color mb-2">Comment</label>
                              <textarea class="pt15" rows="6" placeholder="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb20">
                              <label class="fw500 ff-heading dark-color mb-2">Name</label>
                              <input type="text" class="form-control" placeholder="Ali Tufan">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb20">
                              <label class="fw500 ff-heading dark-color mb-2">Email</label>
                              <input type="email" class="form-control" placeholder="creativelayers088">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
                              <label class="custom_checkbox fz15 ff-heading">Save my name, email, and website in this browser for the next time I comment.
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                            <a href="#" class="ud-btn btn-thm">Send<i class="fal fa-arrow-right-long"></i></a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?= $this->endSection() ?>