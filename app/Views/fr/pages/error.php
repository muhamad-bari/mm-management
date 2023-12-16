<?= $this->extend('fr/layout/base1')?>
<?= $this->section('content') ?>
<title>Oops</title>
<div class="body_content">
    <!-- Error/404 Section Area -->
    <section class="our-error">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
            <div class="animate_content text-center text-xl-start">
              <div class="animate_thumb">
                <img class="w-100" src="<?= base_url()?>frontend/images/icon/error-page-img.svg" alt="error-page-img">
              </div>
            </div>
          </div>
          <div class="col-xl-5 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
            <div class="error_page_content text-center text-xl-start">
              <div class="erro_code">40<span class="text-thm">4</span></div>
              <div class="h2 error_title">Oops! It looks like you're lost.</div>
              <p class="text fz15 mb20">The page you're looking for isn't available. Try to search again or use the go <br class="d-none d-lg-block"> to.</p>
              <a href="<?= base_url('/')?>" class="ud-btn btn-thm">Go back to home<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection('') ?>