<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
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
              <h2 class="text-white"><?= lang('contact.contact') ?></h2>
              <p class="text mb0 text-white"><?= lang('contact.subcontact') ?></p>
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
              <h4 class="form-title mb25"><?= lang('contact.keep') ?></h4>
              <p class="text"><?= lang('contact.subscribe') ?></p>
            </div>
            <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-tracking"></span></div>
              <div class="details">
                <h5 class="title"><?= lang('contact.address') ?></h5>
                <p class="mb-0 text">Jl. Tebet Barat IX No.2, DKI Jakarta 12810</p>
              </div>
            </div>
            <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-call"></span></div>
              <div class="details">
                <h5 class="title">WhatsApp</h5>
                <p class="mb-0 text">+62 852-1994-9685</p>
              </div>
            </div>
            <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
              <div class="icon flex-shrink-0"><span class="flaticon-mail"></span></div>
              <div class="details">
                <h5 class="title"><?= lang('contact.email') ?></h5>
                <p class="mb-0 text">admin@pt-managementinternasional.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-page-form default-box-shadow1 bdrs8 bdr1 p50 mb30-md bgc-white">
            <h4 class="form-title mb25"><?= lang('contact.tell') ?></h4>
            <p class="text mb30"><?= lang('contact.wether') ?></p>
            <form action="#" class="form-style1">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10" for=""><?= lang('contact.name') ?></label>
                    <input type="text" class="form-control" placeholder="Ali">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10" for=""><?= lang('contact.email') ?></label>
                    <input type="email" class="form-control" placeholder="Tufan@gmail.com">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb20">
                    <label class="heading-color ff-heading fw500 mb10" for=""><?= lang('contact.messages') ?></label>
                    <textarea name="" id="" cols="30" rows="6" placeholder="<?= lang('contact.desc') ?>"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="">
                    <a class="ud-btn btn-thm" href="page-contact.html"><?= lang('contact.send') ?><i class="fal fa-arrow-right-long"></i></a>
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
      <iframe class="contact-page-map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.193561376233!2d106.84912507499051!3d-6.238199993750064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTQnMTcuNSJTIDEwNsKwNTEnMDYuMSJF!5e0!3m2!1sid!2sid!4v1702720274823!5m2!1sid!2sid" loading="lazy"></iframe>
      <!-- <iframe class="contact-page-map" loading="lazy" src="https://maps.google.com/maps?q=-6.238200,106.851700&entry=gps&g_ep=CAESCjExLjEwOC4xMDAYACDXggMqEjQ3MDY4NjE1LCw0NzA3NTkxNUICSUQ%3D&shorturl=1" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe> -->
    </div>
  </section>

  <!-- Faq -->
  <?= $this->include('fr/layout/faq') ?>
  <?= $this->endSection() ?>