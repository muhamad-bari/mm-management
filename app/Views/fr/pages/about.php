<?= $this->extend ('fr/layout/base1') ?>
<?= $this->section ('content') ?>
<!-- Breadcumb Sections -->
<title>About</title>
<section class="breadcumb-section mt40">
      <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="position-relative">
                <h2 class="text-white">About</h2>
                <p class="text-white mb30">Give your visitor a smooth online experience with a solid UX design</p>
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
              <h2 class="mb25">Join World's Best Marketplace <br class="d-none d-xl-block"> for Workers</h2>
              <p class="text mb25">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              <div class="list-style2">
                <ul class="mb20">
                  <li><i class="far fa-check"></i>Connect to freelancers with proven business experience</li>
                  <li><i class="far fa-check"></i>Get matched with the perfect talent by a customer success manager</li>
                  <li><i class="far fa-check"></i>Unmatched quality of remote, hybrid, and flexible jobs</li>
                </ul>
              </div>
              <a href="page-freelancer-v1.html" class="ud-btn btn-thm-border">Find Talent<i class="fal fa-arrow-right-long"></i></a>
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
            <div class="funfact_one text-center">
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
            <div class="funfact_one text-center">
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
            <div class="funfact_one text-center">
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
            <div class="funfact_one text-center">
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

    <!-- CTA Banner -->
    <section class="p-0">
      <div class="cta-banner mx-auto maxw1600 pt120 pt60-lg pb90 pb60-lg position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-xl-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <div class="main-title">
                  <h2 class="title">A whole world of freelance <br class="d-none d-lg-block"> talent at your fingertips</h2>
                </div>
              </div>
              <div class="why-chose-list">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Proof of quality</h4>
                    <p class="text mb-0 fz15">Check any pro’s work samples, client reviews, and identity <br class="d-none d-lg-block"> verification.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-money"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">No cost until you hire</h4>
                    <p class="text mb-0 fz15">Interview potential fits for your job, negotiate rates, and only pay <br class="d-none d-lg-block"> for work you approve.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Safe and secure</h4>
                    <p class="text mb-0 fz15">Focus on your work knowing we help protect your data and privacy. We’re here with 24/7 support if you need it.</p>
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
              <h2 class="cta-title mb25">Find the talent needed to <br class="d-none d-lg-block">get your business growing.</h2>
              <p class="text-thm2 fz15 mb25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br class="d-none d-md-block"> do eiusmod tempor incididunt.</p>
              <a href="page-contact.html" class="ud-btn btn-thm">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <div class="funfact-style1 bdrs16 text-center ms-md-auto">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="timer title mb15">4</div></li>
                    <li><span>.9/5</span></li>
                  </ul>
                  <p class="fz15 dark-color">Clients rate <br>professionals on Freeio</p>
                </div>
                <div class="funfact-style1 bdrs16 text-center ms-md-auto">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="timer title mb15">96</div></li>
                    <li><span>%</span></li>
                  </ul>
                  <p class="fz15 dark-color">95% of customers are satisfied through to see their <br>freelancers</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="funfact-style1 bdrs16 text-center">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="title mb15">Award</div></li>
                  </ul>
                  <p class="fz15 dark-color">G2’s 2021 Best <br>Software Awards</p>
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
              <h2 class="title">What our students have to say</h2>
              <p class="paragraph mt10">Discover your perfect program in our courses.</p>
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
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav justify-content-center" id="pills-tab2" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/1.jpg" alt="1.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Albert Cole<br><small>Designer</small></h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/2.jpg" alt="2.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Alison Dawn<br><small>WP Developer</small></h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="<?= base_url() ?>frontend/images/testimonials/3.jpg" alt="3.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Daniel Parker<br><small>Front-end Developer</small></h6>
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

    <!-- Faq Area -->
    <section class="our-faq pb90">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Frequently Asked Questions</h2>
              <p class="paragraph mt10">Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-xl-8 mx-auto">
            <div class="ui-content">
              <div class="accordion-style1 faq-page mb-4 mb-lg-5">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item active">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What methods of payments are supported?</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I cancel at anytime?</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I get a receipt for my purchase?</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Which license do I need?</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How do I get access to a theme I purchased?</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="accordion-body">Cras vitae ac nunc orci. Purus amet tortor non at phasellus ultricies hendrerit. Eget a, sit morbi nunc sit id massa. Metus, scelerisque volutpat nec sit vel donec. Sagittis, id volutpat erat vel.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners pt0 pb90">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="<?= base_url() ?>frontend/images/partners/1.png" alt="1.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="<?= base_url() ?>frontend/images/partners/2.png" alt="2.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="<?= base_url() ?>frontend/images/partners/3.png" alt="3.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="<?= base_url() ?>frontend/images/partners/4.png" alt="4.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="<?= base_url() ?>frontend/images/partners/5.png" alt="5.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="<?= base_url() ?>frontend/images/partners/6.png" alt="6.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection () ?>