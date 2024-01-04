<?= $this->extend('fr/layout/base2') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
  <div class="dashboard_title_area">
    <h2>Dashboard</h2>
    <p class="text">Lorem ipsum dolor sit amet, consectetur.</p>
  </div>
</div>
</div>
<div class="row">
  <div class="col-sm-6 col-xxl-3">
    <div class="d-flex align-items-center justify-content-between statistics_funfact">
      <div class="details">
        <div class="fz15">Services Offered</div>
        <div class="title">25</div>
        <div class="text fz14"><span class="text-thm">10</span> New Offered</div>
      </div>
      <div class="icon text-center"><i class="flaticon-contract"></i></div>
    </div>
  </div>
  <div class="col-sm-6 col-xxl-3">
    <div class="d-flex align-items-center justify-content-between statistics_funfact">
      <div class="details">
        <div class="fz15">Completed Services</div>
        <div class="title">1292</div>
        <div class="text fz14"><span class="text-thm">80+</span> New Completed</div>
      </div>
      <div class="icon text-center"><i class="flaticon-success"></i></div>
    </div>
  </div>
  <div class="col-sm-6 col-xxl-3">
    <div class="d-flex align-items-center justify-content-between statistics_funfact">
      <div class="details">
        <div class="fz15">in Queue Services</div>
        <div class="title">182</div>
        <div class="text fz14"><span class="text-thm">35+</span> New Queue</div>
      </div>
      <div class="icon text-center"><i class="flaticon-review"></i></div>
    </div>
  </div>
  <div class="col-sm-6 col-xxl-3">
    <div class="d-flex align-items-center justify-content-between statistics_funfact">
      <div class="details">
        <div class="fz15">Total Review</div>
        <div class="title">22,786</div>
        <div class="text fz14"><span class="text-thm">290+</span> New Review</div>
      </div>
      <div class="icon text-center"><i class="flaticon-review-1"></i></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-8">
    <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
      <div class="navtab-style1">
        <div class="d-sm-flex align-items-center justify-content-between">
          <h4 class="title fz17 mb20">Profile Views</h4>
          <div class="page_control_shorting dark-color pr10 text-center text-md-end">
            <select class="selectpicker show-tick">
              <option>This Week</option>
              <option>This Month</option>
              <option>This Year</option>
            </select>
          </div>
        </div>
        <canvas id="myChartweave" style="height:230px;"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xl-4">
    <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
      <div class="bdrb1 pb15 mb50">
        <h5 class="title">Traffic</h5>
      </div>
      <canvas id="myChart" height="260px"></canvas>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-xxl-4">
    <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
      <div class="d-flex justify-content-between bdrb1 pb15 mb20">
        <h5 class="title">Most Viewed Services</h5>
        <a class="text-decoration-underline text-thm6" href="#">View All</a>
      </div>
      <div class="dashboard-img-service">
        <div class="listing-style1 list-style d-block d-xl-flex align-items-center border-0 mb10">
          <div class="list-thumb flex-shrink-0 bdrs4">
            <img class="w-100" src=" <?= base_url() ?>frontend/images/listings/g-1.jpg" alt="">
          </div>
          <div class="list-content flex-grow-1 pt10 pb10 pl15 pl0-lg">
            <h6 class="list-title mb-2"><a href="<?= base_url() ?>frontend/page-services-single.html">I will design modern websites in figma or adobe xd</a></h6>
            <div class="list-meta d-flex justify-content-between align-items-center">
              <div class="review-meta d-flex align-items-center">
                <i class="fas fa-star fz10 review-color me-2"></i>
                <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span></p>
              </div>
              <div class="budget">
                <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
              </div>
            </div>
          </div>
        </div>
        <hr class="opacity-100 mt-0">
        <div class="listing-style1 list-style d-block d-xl-flex align-items-center border-0 mb10">
          <div class="list-thumb flex-shrink-0 bdrs4">
            <img class="w-100" src=" <?= base_url() ?>frontend/images/listings/g-2.jpg" alt="">
          </div>
          <div class="list-content flex-grow-1 pt0 pb10 pl15 pl0-lg">
            <h6 class="list-title mb-2"><a href="<?= base_url() ?>frontend/page-services-single.html">I will create modern flat design illustration</a></h6>
            <div class="list-meta d-flex justify-content-between align-items-center">
              <div class="review-meta d-flex align-items-center">
                <i class="fas fa-star fz10 review-color me-2"></i>
                <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span></p>
              </div>
              <div class="budget">
                <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
              </div>
            </div>
          </div>
        </div>
        <hr class="opacity-100 mt-0">
        <div class="listing-style1 list-style d-block d-xl-flex align-items-center border-0 mb-0">
          <div class="list-thumb flex-shrink-0 bdrs4">
            <img class="w-100" src=" <?= base_url() ?>frontend/images/listings/g-6.jpg" alt="">
          </div>
          <div class="list-content flex-grow-1 pt0 pb-0 pl15 pl0-lg pe-0">
            <h6 class="list-title mb-2"><a href="<?= base_url() ?>frontend/page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h6>
            <div class="list-meta d-flex justify-content-between align-items-center">
              <div class="review-meta d-flex align-items-center">
                <i class="fas fa-star fz10 review-color me-2"></i>
                <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span></p>
              </div>
              <div class="budget">
                <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xxl-4">
    <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
      <div class="d-flex justify-content-between bdrb1 pb15 mb30">
        <h5 class="title">Recent Purchased Services</h5>
        <a class="text-decoration-underline text-thm6" href="#">View All</a>
      </div>
      <div class="dashboard-img-service">
        <div class="listing-style1 list-style d-block d-xl-flex align-items-start border-0 mb10">
          <div class="list-thumb wa flex-shrink-0 bdrs4 mb15-lg">
            <img class="wa img-2" src=" <?= base_url() ?>frontend/images/team/client-1.png" alt="">
          </div>
          <div class="list-content flex-grow-1 py-0 pb10 pl15 pl0-lg">
            <h6 class="list-title mb-2">Medium. <span class="text-thm">has purchased</span> I will deal with your item Description and assets</h6>
            <div class="list-meta d-flex justify-content-between align-items-center">
              <div class="review-meta d-flex align-items-center">
                <p class="mb-0 body-color fz14">February 26, 2021</p>
              </div>
              <div class="budget">
                <p class="mb-0"><span class="fz15 fw500 dark-color">$983</span></p>
              </div>
            </div>
          </div>
        </div>
        <hr class="opacity-100 mt-0">
        <div class="listing-style1 list-style d-block d-xl-flex align-items-start border-0 mb10 mt20">
          <div class="list-thumb wa flex-shrink-0 bdrs4 mb15-lg">
            <img class="wa img-2" src=" <?= base_url() ?>frontend/images/team/client-3.png" alt="">
          </div>
          <div class="list-content flex-grow-1 py-0 pb10 pl15 pl0-lg">
            <h6 class="list-title mb-2">Medium. <span class="text-thm">has purchased</span> I will deal with your item Description and assets</h6>
            <div class="list-meta d-flex justify-content-between align-items-center">
              <div class="review-meta d-flex align-items-center">
                <p class="mb-0 body-color fz14">February 26, 2021</p>
              </div>
              <div class="budget">
                <p class="mb-0"><span class="fz15 fw500 dark-color">$983</span></p>
              </div>
            </div>
          </div>
        </div>
        <hr class="opacity-100 mt-0">
        <div class="listing-style1 list-style d-block d-xl-flex align-items-start border-0 mb-0 mt20">
          <div class="list-thumb wa flex-shrink-0 bdrs4 mb15-lg">
            <img class="wa img-2" src=" <?= base_url() ?>frontend/images/team/client-6.png" alt="">
          </div>
          <div class="list-content flex-grow-1 py-0 pl15 pl0-lg">
            <h6 class="list-title mb-2">Medium. <span class="text-thm">has purchased</span> I will deal with your item Description and assets</h6>
            <div class="list-meta d-flex justify-content-between align-items-center">
              <div class="review-meta d-flex align-items-center">
                <p class="mb-0 body-color fz14">February 26, 2021</p>
              </div>
              <div class="budget">
                <p class="mb-0"><span class="fz15 fw500 dark-color">$983</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xxl-4">
    <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
      <div class="bdrb1 pb15 mb30">
        <h5 class="title">Recent Activity</h5>
      </div>
      <div class="dashboard-timeline-label">
        <div class="timeline-item pb15">
          <!--begin::Label-->
          <div class="child-timeline-label">08:42</div>
          <!--end::Label-->
          <!--begin::Badge-->
          <div class="timeline-badge d-flex align-items-center">
            <i class="fas fa-genderless"></i>
          </div>
          <!--end::Badge-->
          <!--begin::Text-->
          <div class="ra_pcontent pl10"><span class="title">Purchase by Ali Price</span> <br> <span class="subtitle">Product noise evolve smartwatch</span></div>
          <!--end::Text-->
        </div>
      </div>
      <div class="dashboard-timeline-label">
        <div class="timeline-item pb15">
          <!--begin::Label-->
          <div class="child-timeline-label">14:37</div>
          <!--end::Label-->
          <!--begin::Badge-->
          <div class="timeline-badge d-flex align-items-center color3">
            <i class="fas fa-genderless"></i>
          </div>
          <!--end::Badge-->
          <!--begin::Text-->
          <div class="ra_pcontent pl10">
            <span class="title">Make deposit <span class="text-thm6 fw500">USD 700</span> to TFN</span>
          </div>
          <!--end::Text-->
        </div>
      </div>
      <div class="dashboard-timeline-label">
        <div class="timeline-item pb0">
          <!--begin::Label-->
          <div class="child-timeline-label">16:50</div>
          <!--end::Label-->
          <!--begin::Badge-->
          <div class="timeline-badge d-flex align-items-center color4">
            <i class="fas fa-genderless"></i>
          </div>
          <!--end::Badge-->
          <!--begin::Text-->
          <div class="ra_pcontent pl10"><span class="title">Natasha Carey have liked the products</span> <br> <span class="subtitle">Allow users to like products in your WooCommerce store.</span></div>
          <!--end::Text-->
        </div>
      </div>
      <div class="dashboard-timeline-label">
        <div class="timeline-item pb10">
          <!--begin::Label-->
          <div class="child-timeline-label">21:03</div>
          <!--end::Label-->
          <!--begin::Badge-->
          <div class="timeline-badge d-flex align-items-center color5">
            <i class="fas fa-genderless"></i>
          </div>
          <!--end::Badge-->
          <!--begin::Text-->
          <div class="ra_pcontent pl10"><span class="title">Favoried Product</span> <br> <span class="subtitle">Esther James have favorited product.</span></div>
          <!--end::Text-->
        </div>
      </div>
      <div class="dashboard-timeline-label before-none mb30">
        <div class="timeline-item">
          <!--begin::Label-->
          <div class="child-timeline-label">23:07</div>
          <!--end::Label-->
          <!--begin::Badge-->
          <div class="timeline-badge d-flex align-items-center color6">
            <i class="fas fa-genderless"></i>
          </div>
          <!--end::Badge-->
          <!--begin::Text-->
          <div class="ra_pcontent pl10"><span class="title">Today offers by Digitech Galaxy</span> <br> <span class="subtitle">Offer is valid on orders of Rs.500 Or above for selected products only.</span></div>
          <!--end::Text-->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection() ?>