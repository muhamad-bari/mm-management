<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>blog</title>
<!-- Blog Section -->
<section class="breadcumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcumb-style1">
          <div class="breadcumb-list">
            <a href="#">Home</a>
            <a href="#">Blog</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt40 pb0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title mb50">
          <h2 class="title"><?= lang('blog.ourblog') ?></h2>
          <p class="text mb-0"><?= lang('blog.subourblog') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog Section Area -->
<section class="our-blog pt-0">
  <div class="container">
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-xl-12">
        <div class="navtab-style1 blog-page-style">
          <!-- <div class="nav nav-tabs mb30" id="nav-tab2" role="tablist">
            <button class="nav-link active fw600" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">All</button>
            <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2" aria-selected="false">Freelancer</button>
            <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3" aria-selected="false">Graphics Design</button>
            <button class="nav-link fw600" id="nav-item4-tab" data-bs-toggle="tab" data-bs-target="#nav-item4" type="button" role="tab" aria-controls="nav-item4" aria-selected="false">App Developer</button>
            <button class="nav-link fw600" id="nav-item5-tab" data-bs-toggle="tab" data-bs-target="#nav-item5" type="button" role="tab" aria-controls="nav-item5" aria-selected="false">Digital Marketing</button>
            <button class="nav-link fw600" id="nav-item6-tab" data-bs-toggle="tab" data-bs-target="#nav-item6" type="button" role="tab" aria-controls="nav-item6" aria-selected="false">Music & Audio</button>
            <button class="nav-link fw600" id="nav-item7-tab" data-bs-toggle="tab" data-bs-target="#nav-item7" type="button" role="tab" aria-controls="nav-item7" aria-selected="false">Video & Audio</button>
          </div> -->
        </div>
        <div class="navtab-style1">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active fz15 text" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">March 16, 2022</a>
                      <h4 class="title mt-1"><a href="<?= base_url($locale . '/blog1') ?>">Informasi Ketenagakerjaan : Bagi Pekerja Migran Indonesia (PMI) khususnya yang bekerja di Perusahaan (Muassasah / Syarikah)</a></h4>
                      <p class="text mb-0">Bagi Pekerja di Perusahaan (Muassasah / Syarikah) yang tidak diperpanjang izin tinggalnya (iqomah), <a href="<?= base_url($locale . '/blog1') ?>">Read More...</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">August 25, 2023</a>
                      <h4 class="title mt-1"><a href="<?= base_url($locale . '/blog2') ?>">Bertemu PMI di Arab Saudi, Menaker Ida: Yang Mau Kerja di Arab Harus Lewat Syarikah</a></h4>
                      <p class="text mb-0">Menteri Ketenagakerjaan (Menaker) Ida Fauziyah mengatakan, <a href="<?= base_url($locale . '/blog2') ?>">Read More...</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">August 26, 2023</a>
                      <h4 class="title mt-1"><a href="<?= base_url($locale . '/blog3') ?>">Temui Pekerja Migran di Arab Saudi, Menaker Ingatkan Pentingnya Kompetensi</a></h4>
                      <p class="text mb-0">Menteri Ketenagakerjaan, Ida Fauziyah kembali menemui Pekerja Migran Indonesia (PMI) <a href="<?= base_url($locale . '/blog3') ?>">Read More...</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="tab-pane fade fz15 text" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-4.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-5.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-6.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-7.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-8.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">4 Learning Management System Design Tips For Better eLearning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-9.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">A Better Alternative To Grading Student Writing</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-10.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Exactly How Technology Can Make Reading Better</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-11.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-12.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">The Benefits Of Using Technology In Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade fz15 text" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-4.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-5.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-6.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-7.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-8.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">4 Learning Management System Design Tips For Better eLearning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-9.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">A Better Alternative To Grading Student Writing</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-10.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Exactly How Technology Can Make Reading Better</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-11.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-12.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">The Benefits Of Using Technology In Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade fz15 text" id="nav-item4" role="tabpanel" aria-labelledby="nav-item4-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-4.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-5.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-6.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-7.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-8.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">4 Learning Management System Design Tips For Better eLearning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-9.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">A Better Alternative To Grading Student Writing</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-10.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Exactly How Technology Can Make Reading Better</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-11.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-12.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">The Benefits Of Using Technology In Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade fz15 text" id="nav-item5" role="tabpanel" aria-labelledby="nav-item5-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-4.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-5.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-6.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-7.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-8.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">4 Learning Management System Design Tips For Better eLearning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-9.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">A Better Alternative To Grading Student Writing</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-10.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Exactly How Technology Can Make Reading Better</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-11.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-12.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">The Benefits Of Using Technology In Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade fz15 text" id="nav-item6" role="tabpanel" aria-labelledby="nav-item6-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-4.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-5.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-6.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-7.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-8.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">4 Learning Management System Design Tips For Better eLearning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-9.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">A Better Alternative To Grading Student Writing</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-10.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Exactly How Technology Can Make Reading Better</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-11.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-12.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">The Benefits Of Using Technology In Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade fz15 text" id="nav-item7" role="tabpanel" aria-labelledby="nav-item7-tab">
              <div class="row">
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-1.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-2.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-3.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-4.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-5.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-6.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">How to “Woo” a Recruiter and Land Your Dream Job</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-7.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-8.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">4 Learning Management System Design Tips For Better eLearning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-9.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">A Better Alternative To Grading Student Writing</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-10.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">Exactly How Technology Can Make Reading Better</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-11.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1 line-clamp2"><a href="page-blog-single.html">Why Public Schools Should Continue To Use Remote Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="blog-style1">
                    <div class="blog-img"><img class="w-100" src="<?= base_url() ?>frontend/images/blog/blog-12.jpg" alt=""></div>
                    <div class="blog-content">
                      <a class="date" href="#">December 2, 2022</a>
                      <h4 class="title mt-1"><a href="page-blog-single.html">The Benefits Of Using Technology In Learning</a></h4>
                      <p class="text mb-0">A complete guide to starting a small business online</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="mbp_pagination text-center">
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
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">20</a></li>
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