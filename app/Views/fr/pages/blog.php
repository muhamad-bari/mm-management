<?= $this->extend ('fr/layout/base1') ?>
<?= $this->section ('content') ?>
<title>blog</title>
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <div class="breadcumb-list">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="#">Blog</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section pt-0">
      <div class="cta-about-v1 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="position-relative">
                <h2 class="text-white">Freeio Blog</h2>
                <p class="text-white mb-0">Give your visitor a smooth online experience with a solid UX design</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section Area -->
    <section class="our-blog pt40">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-8">
            <div class="blog-style1 large-size mb20">
              <div class="blog-img"><img class="w-100 bdrs4" src="<?= base_url() ?>frontend/images/blog/blog-17.jpg" alt=""></div>
              <div class="blog-content px-0 pt20 pb-0">
                <div class="blog-single-meta mb25">
                  <div class="post-author d-sm-flex align-items-center">
                    <img class="mr10" src="<?= base_url() ?>frontend/images/blog/author-1.png" alt=""><a class="pr15 body-light-color" href="#">Leslie Alexander</a><a class="ml15 pr15 body-light-color" href="#">Business</a><a class="ml15 body-light-color" href="#">December 2, 2022</a>
                  </div>
                </div>
                <h3 class="title mt-1 mb10"><a href="<?= base_url('post') ?>">Start an online business and work from home</a></h3>
                <p class="text mb25">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                <a href="<?= base_url('post') ?>" class="ud-btn btn-light-thm">Read More<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="blog-style1 large-size mb20">
              <div class="blog-img"><img class="w-100 bdrs4" src="<?= base_url() ?>frontend/images/blog/blog-18.jpg" alt=""></div>
              <div class="blog-content px-0 pt20 pb-0">
                <div class="blog-single-meta mb25">
                  <div class="post-author d-sm-flex align-items-center">
                    <img class="mr10" src="<?= base_url() ?>frontend/images/blog/author-1.png" alt=""><a class="pr15 body-light-color" href="#">Leslie Alexander</a><a class="ml15 pr15 body-light-color" href="#">Business</a><a class="ml15 body-light-color" href="#">December 2, 2022</a>
                  </div>
                </div>
                <h3 class="title mt-1 mb10"><a href="<?= base_url('post') ?>">Engendering a culture of professional development</a></h3>
                <p class="text mb25">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                <a href="<?= base_url('post') ?>" class="ud-btn btn-light-thm">Read More<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="blog-style1 large-size mb50">
              <div class="blog-img"><img class="w-100 bdrs4" src="<?= base_url() ?>frontend/images/blog/blog-19.jpg" alt=""></div>
              <div class="blog-content px-0 pt20 pb-0">
                <div class="blog-single-meta mb25">
                  <div class="post-author d-sm-flex align-items-center">
                    <img class="mr10" src="<?= base_url() ?>frontend/images/blog/author-1.png" alt=""><a class="pr15 body-light-color" href="#">Leslie Alexander</a><a class="ml15 pr15 body-light-color" href="#">Business</a><a class="ml15 body-light-color" href="#">December 2, 2022</a>
                  </div>
                </div>
                <h3 class="title mt-1 mb10"><a href="<?= base_url('post') ?>">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h3>
                <p class="text mb25">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                <a href="<?= base_url('post') ?>" class="ud-btn btn-light-thm">Read More<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="mbp_pagination text-center mb40-md">
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
          <div class="col-lg-4">
            <div class="blog-sidebar ms-lg-auto">
              <div class="default-box-shadow1 mb30">
                <div class="search_area">
                  <input type="text" class="form-control" placeholder="Search">
                  <label><span class="flaticon-loupe"></span></label>
                </div>
              </div>
              <div class="sidebar-widget mb30">
                <h4 class="widget-title">Category</h4>
                <div class="category-list mt30">
                  <a class="d-flex align-items-center justify-content-between" href="#">Designer <span class="body-light-color">(1,945)</span></a>
                  <a class="d-flex align-items-center justify-content-between" href="#">Web Developers <span class="body-light-color">(8,136)</span></a>
                  <a class="d-flex align-items-center justify-content-between" href="#">Illustrators <span class="body-light-color">(917)</span></a>
                  <a class="d-flex align-items-center justify-content-between" href="#">Node.js <span class="body-light-color">(240)</span></a>
                  <a class="d-flex align-items-center justify-content-between" href="#">Project Managers <span class="body-light-color">(2,460)</span></a>
                </div>
              </div>
              <div class="sidebar-widget mb30">
                <h4 class="widget-title">Recent Posts</h4>
                <div class="list-news-style d-flex align-items-center mt30 mb20">
                  <div class="news-img flex-shrink-0"><img src="<?= base_url() ?>frontend/images/blog/blog-s-1.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h6 class="new-text mb0">Why Public Schools Should <br class="d-none d-xl-block">Continue To Use Remote</h6>
                    <a class="body-light-color" href="#">December 2, 2022</a>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center mb20">
                  <div class="news-img flex-shrink-0"><img src="<?= base_url() ?>frontend/images/blog/blog-s-2.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h6 class="new-text mb0">The Benefits Of Using <br class="d-none d-xl-block">Technology In Learning</h6>
                    <a class="body-light-color" href="#">December 2, 2022</a>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center">
                  <div class="news-img flex-shrink-0"><img src="<?= base_url() ?>frontend/images/blog/blog-s-3.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h6 class="new-text mb0">A Better Alternative To <br class="d-none d-xl-block">Grading Student Writing</h6>
                    <a class="body-light-color" href="#">December 2, 2022</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget mb30 pb20">
                <h4 class="widget-title">Tags</h4>
                <div class="tag-list mt30">
                  <a href="#">Figma</a>
                  <a href="#">Sketch</a>
                  <a href="#">HTML5</a>
                  <a href="#">Software Design</a>
                  <a href="#">Prototyping</a>
                  <a href="#">SaaS</a>
                  <a href="#">Design Writing</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>