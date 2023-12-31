<?= $this->extend('/fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Service Details</title>
<div class="body_content">
  <!-- Breadcumb Sections -->
  <section class="breadcumb-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-10">
          <div class="breadcumb-style1 mb10-xs">
            <div class="breadcumb-list">
              <a href="<?= base_url($locale . '/') ?>">Home</a>
              <a href="<?= base_url($locale . '/service') ?>">Services</a>
              <a href="<?= base_url($locale . '/details-service') ?>">Service Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-lg-2">
          <div class="d-flex align-items-center justify-content-sm-end">
            <div class="share-save-widget d-flex align-items-center">
              <span class="icon flaticon-share dark-color fz12 mr10"></span>
              <div class="h6 mb-0">Share</div>
            </div>
            <div class="share-save-widget d-flex align-items-center ml15">
              <span class="icon flaticon-like dark-color fz12 mr10"></span>
              <div class="h6 mb-0">Save</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcumb Sections -->
  <section class="breadcumb-section pt-0">
    <div class="cta-service-single cta-banner mx-auto maxw1700 pt120 pt60-sm pb120 pb60-sm bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg px30-lg">
      <img class="left-top-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/left-top.png" alt="">
      <img class="right-bottom-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/right-bottom.png" alt="">
      <img class="service-v1-vector bounce-y d-none d-xl-block" src="<?= base_url() ?>frontend/images/vector-img/vector-service-v1.png" alt="">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-xl-7">
            <div class="position-relative">
              <h2>Asisten Rumah Tangga</h2>
              <div class="list-meta mt30">
                <p class="mb-0 dark-color fz14 list-inline-item ml25 ml15-sm mb5-sm ml0-xs"><i class="fas fa-star vam fz10 review-color me-2"></i> 4.82 94 reviews</p>
                <p class="mb-0 dark-color fz14 list-inline-item ml25 ml15-sm mb5-sm ml0-xs"><i class="flaticon-file-1 vam fz20 me-2"></i> 2 Order in Queue</p>
                <p class="mb-0 dark-color fz14 list-inline-item ml25 ml15-sm mb5-sm ml0-xs"><i class="flaticon-website vam fz20 me-2"></i> 902 Views</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Details -->
  <section class="pt10 pb90 pb30-md">
    <div class="container">
      <div class="row wrap">
        <div class="col-lg-8">
          <div class="column">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-calendar"></span></div>
                  <div class="details">
                    <h5 class="title">Delivery Time</h5>
                    <p class="mb-0 text">3-6 Month</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-goal"></span></div>
                  <div class="details">
                    <h5 class="title">Language Level</h5>
                    <p class="mb-0 text">Professional</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-tracking"></span></div>
                  <div class="details">
                    <h5 class="title">Location</h5>
                    <p class="mb-0 text">Indonesia</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="service-single-sldier vam_nav_style slider-1-grid owl-carousel owl-theme mb60">
              <div class="item">
                <div class="thumb p50 p30-sm"><img src="<?= base_url() ?>frontend/images/listings/service-details-1.jpg" alt="" class="w-100"></div>
              </div>
              <div class="item">
                <div class="thumb p50 p30-sm"><img src="<?= base_url() ?>frontend/images/listings/service-details-1.jpg" alt="" class="w-100"></div>
              </div>
              <div class="item">
                <div class="thumb p50 p30-sm"><img src="<?= base_url() ?>frontend/images/listings/service-details-1.jpg" alt="" class="w-100"></div>
              </div>
            </div>
            <div class="service-about">
              <h4>About</h4>
              <p class="text mb30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              <p class="text mb-0">Services I provide:</p>
              <p class="text mb-0">1) Website Design</p>
              <p class="text mb-0">2) Mobile App Design</p>
              <p class="text mb-0">3) Brochure Design</p>
              <p class="text mb-0">4) Business Card Design</p>
              <p class="text mb30">5) Flyer Design</p>
              <p class="text mb30">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
              <div class="d-flex align-items-start mb50">
                <div class="list1">
                  <h6>App type</h6>
                  <p class="text mb-0">Business, Food & drink,</p>
                  <p class="text">Graphics & design</p>
                </div>
                <div class="list1 ml80">
                  <h6>Design tool</h6>
                  <p class="text mb-0">Adobe XD, Figma,</p>
                  <p class="text">Adobe Photoshop</p>
                </div>
                <div class="list1 ml80">
                  <h6>Device</h6>
                  <p class="text">Mobile, Desktop</p>
                </div>
              </div>
              <hr class="opacity-100 mb60">
              <h4>Compare Packages</h4>
              <div class="table-style2 table-responsive bdr1 mt30 mb60">
                <table class="table table-borderless mb-0">
                  <thead class="t-head">
                    <tr>
                      <th class="col" scope="col"></th>
                      <th class="col" scope="col">
                        <span class="h2">$29 <small>/ monthly</small></span><br>
                        <span class="h4">Basic</span><br>
                        <span class="text">I will redesign your current <br class="d-none d-lg-block"> landing page or create one for <br class="d-none d-lg-block"> you (upto 4 sections)</span>
                      </th>
                      <th class="col" scope="col">
                        <span class="h2">$49 <small>/ monthly</small></span><br>
                        <span class="h4">Standard</span><br>
                        <span class="text">4 High Quality Desktop <br class="d-none d-lg-block"> Pages.</span>
                      </th>
                      <th class="col" scope="col">
                        <span class="h2">$89 <small>/ monthly</small></span><br>
                        <span class="h4">Premium</span><br>
                        <span class="text">4 High Quality Desktop and <br class="d-none d-lg-block"> Mobile Pages.</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="t-body">
                    <tr class="bgc-thm3">
                      <th scope="row">Source file</th>
                      <td><a class="check_circle bgc-thm" href="#"><span class="fas fa-check"></span></a></td>
                      <td><a class="check_circle bgc-thm" href="#"><span class="fas fa-check"></span></a></td>
                      <td><a class="check_circle bgc-thm" href="#"><span class="fas fa-check"></span></a></td>
                    </tr>
                    <tr>
                      <th scope="row">Number of pages</th>
                      <td>2</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                    <tr class="bgc-thm3">
                      <th scope="row">Revisions</th>
                      <td>1</td>
                      <td>3</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <th scope="row">Delivery Time </th>
                      <td>2 Days</td>
                      <td>3 Days</td>
                      <td>4 Days</td>
                    </tr>
                    <tr class="bgc-thm3">
                      <th scope="row">Total</th>
                      <td>$29</td>
                      <td>$49</td>
                      <td>$89</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td><a href="#" class="ud-btn btn-thm">Select<i class="fal fa-arrow-right-long"></i></a></td>
                      <td><a href="#" class="ud-btn btn-thm">Select<i class="fal fa-arrow-right-long"></i></a></td>
                      <td><a href="#" class="ud-btn btn-thm">Select<i class="fal fa-arrow-right-long"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr class="opacity-100 mb60">
              <h4>Frequently Asked Questions</h4>
              <div class="accordion-style1 faq-page mb-4 mb-lg-5 mt30">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item active">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What methods of payments are supported?</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I cancel at anytime?</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I get a receipt for my purchase?</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Which license do I need?</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How do I get access to a theme I purchased?</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="opacity-100 mb60">
              <h4>Add Extra Services</h4>
              <div class="extra-service-tab mb40 mt30">
                <nav>
                  <div class="nav flex-column nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link" id="nav-home2-tab" data-bs-toggle="tab" data-bs-target="#nav-home2" type="button" role="tab" aria-selected="true">
                      <label class="custom_checkbox fw500 text-start">100 Words (+2 days)
                        <span class="text text-bottom">I will professionally translate english to german</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <span class="price">$25</span>
                    </button>
                    <button class="nav-link active" id="nav-profile2-tab" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-selected="false">
                      <label class="custom_checkbox fw500 text-start">100 Words (+2 days)
                        <span class="text text-bottom">I will professionally translate english to german</span>
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                      <span class="price">$45</span>
                    </button>
                    <button class="nav-link" id="nav-contact2-tab" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-selected="false">
                      <label class="custom_checkbox fw500 text-start">100 Words (+2 days)
                        <span class="text text-bottom">I will professionally translate english to german</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <span class="price">$75</span>
                    </button>
                  </div>
                </nav>
              </div>
              <hr class="opacity-100 mb15">
              <div class="product_single_content mb50">
                <div class="mbp_pagination_comments">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="total_review mb30 mt45">
                        <h4>80 Reviews</h4>
                      </div>
                      <div class="d-md-flex align-items-center mb30">
                        <div class="total-review-box d-flex align-items-center text-center mb30-sm">
                          <div class="wrapper mx-auto">
                            <div class="t-review mb15">4.96</div>
                            <h5>Exceptional</h5>
                            <p class="text mb-0">3,014 reviews</p>
                          </div>
                        </div>
                        <div class="wrapper ml60 ml0-sm">
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">5 Star</div>
                            <div class="progress">
                              <div class="progress-bar" style="width: 90%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="value text-end">58</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">4 Star</div>
                            <div class="progress">
                              <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="value text-end">20</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">3 Star</div>
                            <div class="progress">
                              <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="value text-end">15</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">2 Star</div>
                            <div class="progress">
                              <div class="progress-bar" style="width: 30%;" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="value text-end">2</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">1 Star</div>
                            <div class="progress">
                              <div class="progress-bar" style="width: 20%;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="value text-end">1</div>
                          </div>
                        </div>
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
                        <a href="<?= base_url($locale . '/details-service') ?>" class="ud-btn btn-light-thm">See More<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bsp_reveiw_wrt">
                <h6 class="fz17">Add a Review</h6>
                <p class="text">Your email address will not be published. Required fields are marked *</p>
                <h6>Your rating of this product</h6>
                <div class="d-flex">
                  <i class="fas fa-star review-color"></i>
                  <i class="far fa-star review-color ms-2"></i>
                  <i class="far fa-star review-color ms-2"></i>
                  <i class="far fa-star review-color ms-2"></i>
                  <i class="far fa-star review-color ms-2"></i>
                </div>
                <form class="comments_form mt30 mb30-md">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-4">
                        <label class="fw500 fz16 ff-heading dark-color mb-2">Comment</label>
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
          </div>
        </div>
        <div class="col-lg-4">
          <div class="column">
            <div class="blog-sidebar ms-lg-auto">
              <div class="price-widget">
                <div class="navtab-style1">
                  <nav>
                    <div class="nav nav-tabs mb20" id="nav-tab2p" role="tablist">
                      <button class="nav-link fw500" id="nav-item1p-tab" data-bs-toggle="tab" data-bs-target="#nav-item1p" type="button" role="tab" aria-controls="nav-item1p" aria-selected="true">Basic</button>
                      <button class="nav-link active fw500" id="nav-item2p-tab" data-bs-toggle="tab" data-bs-target="#nav-item2p" type="button" role="tab" aria-controls="nav-item2p" aria-selected="false">Standart</button>
                      <button class="nav-link fw500" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3p" type="button" role="tab" aria-controls="nav-item3p" aria-selected="false">Premium</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-item1p" role="tabpanel" aria-labelledby="nav-item1p-tab">
                      <div class="price-content">
                        <div class="price">$50</div>
                        <div class="h5 mb-2">High-converting Landing Pages</div>
                        <p class="text fz14">I will redesign your current landing page or create one for you (upto 4 sections)</p>
                        <hr class="opacity-100 mb20">
                        <ul class="p-0 mb15 d-sm-flex align-items-center">
                          <li class="fz14 fw500 dark-color"><i class="flaticon-sandclock fz20 text-thm2 me-2 vam"></i>3 Days Delivery</li>
                          <li class="fz14 fw500 dark-color ml20 ml0-xs"><i class="flaticon-recycle fz20 text-thm2 me-2 vam"></i>2 Revisions</li>
                        </ul>
                        <div class="list-style1">
                          <ul class="">
                            <li class="mb15"><i class="far fa-check text-thm3 bgc-thm3-light"></i>2 Page / Screen</li>
                            <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Source file</li>
                          </ul>
                        </div>
                        <div class="d-grid">
                          <a href="#" class="ud-btn btn-thm">Continue $50<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade show active" id="nav-item2p" role="tabpanel" aria-labelledby="nav-item2p-tab">
                      <div class="price-content">
                        <div class="price">$29</div>
                        <div class="h5 mb-2">High-converting Landing Pages</div>
                        <p class="text fz14">I will redesign your current landing page or create one for you (upto 4 sections)</p>
                        <hr class="opacity-100 mb20">
                        <ul class="p-0 mb15 d-sm-flex align-items-center">
                          <li class="fz14 fw500 dark-color"><i class="flaticon-sandclock fz20 text-thm2 me-2 vam"></i>3 Days Delivery</li>
                          <li class="fz14 fw500 dark-color ml20 ml0-xs"><i class="flaticon-recycle fz20 text-thm2 me-2 vam"></i>2 Revisions</li>
                        </ul>
                        <div class="list-style1">
                          <ul class="">
                            <li class="mb15"><i class="far fa-check text-thm3 bgc-thm3-light"></i>2 Page / Screen</li>
                            <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Source file</li>
                          </ul>
                        </div>
                        <div class="d-grid">
                          <a href="#" class="ud-btn btn-thm">Continue $29<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-item3p" role="tabpanel" aria-labelledby="nav-item3p-tab">
                      <div class="price-content">
                        <div class="price">$250</div>
                        <div class="h5 mb-2">High-converting Landing Pages</div>
                        <p class="text fz14">I will redesign your current landing page or create one for you (upto 4 sections)</p>
                        <hr class="opacity-100 mb20">
                        <ul class="p-0 mb15 d-sm-flex align-items-center">
                          <li class="fz14 fw500 dark-color"><i class="flaticon-sandclock fz20 text-thm2 me-2 vam"></i>3 Days Delivery</li>
                          <li class="fz14 fw500 dark-color ml20 ml0-xs"><i class="flaticon-recycle fz20 text-thm2 me-2 vam"></i>2 Revisions</li>
                        </ul>
                        <div class="list-style1">
                          <ul class="">
                            <li class="mb15"><i class="far fa-check text-thm3 bgc-thm3-light"></i>2 Page / Screen</li>
                            <li><i class="far fa-check text-thm3 bgc-thm3-light"></i>Source file</li>
                          </ul>
                        </div>
                        <div class="d-grid">
                          <a href="#" class="ud-btn btn-thm">Continue $250<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
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

  <!-- Listings -->
  <section class="pt30 pb90 pb30-md">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-lg-12">
          <div class="main-title mb35">
            <h2>People Who Viewed This Service Also Viewed </h2>
            <p class="text">Give your visitor a smooth online experience with a solid UX design</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-sm-6 col-lg-3">
          <div class="listing-style1">
            <div class="list-thumb">
              <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-1.jpg" alt="">
              <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
            </div>
            <div class="list-content">
              <p class="list-text body-color fz14 mb-1">Service</p>
              <h5 class="list-title"><a href="<?= base_url($locale . '/details-service') ?>">Asisten Rumah Tangga</a></h5>
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
        <div class="col-sm-6 col-lg-3">
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
              <h5 class="list-title"><a href="<?= base_url($locale . '/details-service') ?>">Baby Sitter</a></h5>
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
        <div class="col-sm-6 col-lg-3">
          <div class="listing-style1">
            <div class="list-thumb">
              <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-3.jpg" alt="">
              <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
            </div>
            <div class="list-content">
              <p class="list-text body-color fz14 mb-1">Service</p>
              <h5 class="list-title line-clamp2"><a href="<?= base_url($locale . '/details-service') ?>">Perawat Lansia</a></h5>
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
        <div class="col-sm-6 col-lg-3">
          <div class="listing-style1">
            <div class="list-thumb">
              <img class="w-100" src="<?= base_url() ?>frontend/images/listings/g-4.jpg" alt="">
              <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
            </div>
            <div class="list-content">
              <p class="list-text body-color fz14 mb-1">Service</p>
              <h5 class="list-title"><a href="<?= base_url($locale . '/details-service') ?>">Driver</a></h5>
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
    </div>
  </section>
  <?= $this->endSection() ?>