<?= $this->extend ('fr/layout/base1') ?>
<?= $this->section ('content') ?>
<title>Contact</title>
<div class="body_content">
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section wow fadeInUp mt40">
      <div class="cta-commmon-v1 cta-banner bgc-thm2 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <img class="left-top-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/left-top.png" alt="">
        <img class="right-bottom-img wow zoomIn" src="<?= base_url() ?>frontend/images/vector-img/right-bottom.png" alt="">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="position-relative wow fadeInUp" data-wow-delay="300ms">
                <h2 class="text-white">Contact us</h2>
                <p class="text mb0 text-white">We'd love to talk about how we can help you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Contact Info -->
    <section class="pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-6">
            <div class="position-relative mt40">
              <div class="main-title">
                <h4 class="form-title mb25">Keep In Touch With Us.</h4>
                <p class="text">Subscribe To Get Latest News Update!</p>
              </div>
              <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                <div class="icon flex-shrink-0"><span class="flaticon-tracking"></span></div>
                <div class="details">
                  <h5 class="title">Address</h5>
                  <p class="mb-0 text">Jl. Tebet Barat IX No.2, DKI Jakarta 12810</p>
                </div>
              </div>
              <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                <div class="icon flex-shrink-0"><span class="flaticon-call"></span></div>
                <div class="details">
                  <h5 class="title">WhatsApp</h5>
                  <p class="mb-0 text">+62 83894176515</p>
                </div>
              </div>
              <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                <div class="icon flex-shrink-0"><span class="flaticon-mail"></span></div>
                <div class="details">
                  <h5 class="title">Email</h5>
                  <p class="mb-0 text">admin@pt-managementinternasional.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-page-form default-box-shadow1 bdrs8 bdr1 p50 mb30-md bgc-white">
              <h4 class="form-title mb25">Tell us about yourself</h4>
              <p class="text mb30">Whether you have questions or you would just like to say hello, contact us.</p>
              <form action="#" class="form-style1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw500 mb10" for="">Name</label>
                      <input type="text" class="form-control" placeholder="Ali">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw500 mb10" for="">Email</label>
                      <input type="email" class="form-control" placeholder="Tufan">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw500 mb10" for="">Messages</label>
                      <textarea name="" id="" cols="30" rows="6" placeholder="Description"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="">
                      <a class="ud-btn btn-thm" href="page-contact.html">Send Messages<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <!-- Google Map -->
    <section class="p-0 wow fadeInUp" data-wow-delay="300ms">
      <div class="mx-auto maxw1700 bdrs16 position-relative mx20-lg">
      <iframe class="contact-page-map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.193561376233!2d106.84912507499051!3d-6.238199993750064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTQnMTcuNSJTIDEwNsKwNTEnMDYuMSJF!5e0!3m2!1sid!2sid!4v1702720274823!5m2!1sid!2sid"loading="lazy"></iframe>
        <!-- <iframe class="contact-page-map" loading="lazy" src="https://maps.google.com/maps?q=-6.238200,106.851700&entry=gps&g_ep=CAESCjExLjEwOC4xMDAYACDXggMqEjQ3MDY4NjE1LCw0NzA3NTkxNUICSUQ%3D&shorturl=1" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe> -->
      </div>
    </section>

    <!-- Faq -->
    <section class="pb70">
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
          <div class="col-lg-8 mx-auto">
            <div class="ui-content">
              <div class="accordion-style1 faq-page">
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
<?= $this->endSection () ?>