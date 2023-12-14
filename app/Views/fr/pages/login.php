<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<div class="body_content">
    <!-- Our LogIn Area -->
    <section class="our-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Log In</h2>
              <p class="paragraph">Give your visitor a smooth online experience with a solid UX design</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-xl-6 mx-auto">
            <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">
              <div class="mb30">
                <h4>We're glad to see you again!</h4>
                <p class="text">Don't have an account? <a href="page-register.html" class="text-thm">Sign Up!</a></p>
              </div>
              <div class="mb20">
                <label class="form-label fw600 dark-color">Email Address</label>
                <input type="email" class="form-control" placeholder="alitfn58@gmail.com">
              </div>
              <div class="mb15">
                <label class="form-label fw600 dark-color">Password</label>
                <input type="text" class="form-control" placeholder="*******">
              </div>
              <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
                <label class="custom_checkbox fz14 ff-heading">Remember me
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <a class="fz14 ff-heading" href="#">Lost your password?</a>
              </div>
              <div class="d-grid mb20">
                <button class="ud-btn btn-thm" type="button">Log In <i class="fal fa-arrow-right-long"></i></button>
              </div>
              <div class="hr_content mb20"><hr><span class="hr_top_text">OR</span></div>
              <div class="d-md-flex justify-content-between">
                <button class="ud-btn btn-fb fz14 fw400 mb-2 mb-md-0" type="button"><i class="fab fa-facebook-f pr10"></i> Continue Facebook</button>
                <button class="ud-btn btn-google fz14 fw400 mb-2 mb-md-0" type="button"><i class="fab fa-google"></i> Continue Google</button>
                <button class="ud-btn btn-apple fz14 fw400" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>