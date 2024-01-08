<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Gallery</title>

<!-- Modal -->
<div class="modal fade" id="galeri-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog w-100 bg-warning d-flex flex-column">
		<div class="d-flex justify-content-end">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<img src="" id="pop-img" alt="Gallery" />
	</div>
</div>

<div class="body_content" data-target=".ownavigation">
	<!-- Breadcumb Sections -->
	<section class="breadcumb-section wow fadeInUp mt40">
		<div class="cta-commmon-v1 cta-banner bgc-thm2 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
			<img class="left-top-img wow zoomIn" src="<?= base_url('') ?>frontend/images/vector-img/left-top.png" alt="">
			<img class="right-bottom-img wow zoomIn" src="<?= base_url('') ?>frontend/images/vector-img/right-bottom.png" alt="">
			<div class="container">
				<div class="row">
					<div class="col-xl-5">
						<div class="position-relative wow fadeInUp" data-wow-delay="300ms">
							<h2 class="text-white"><?= lang('gallery.gallery') ?></h2>
							<p class="text mb30 text-white"><?= lang('gallery.subgallery') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Agents -->
	<div class="container-fluid portfolio-section portfolio-4-col">
	<div class="kategori-container p-4">
                <h4>Kategori</h4>
                <div class="bordered kategori">
                </div>
            </div>
		<!-- Portfolio List -->
		<div class="row portfolio-list galeri-fr">
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box" data-ktr='berangkat'>
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-1.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Pelatihan Lanayan Baby Sitter</a>
						<a href="#" data-img="<?= base_url() ?>frontend/images/gallery/home-portfolio-1.jpg" data-bs-toggle="modal" data-bs-target="#galeri-modal" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box" data-ktr='pelatihan'>
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-2.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Persiapan Keberangkatan</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-2.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-3.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Persiapan Keberangkatan</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-3.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-4.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Persiapan Keberangkatan</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-4.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-5.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Persiapan Keberangkatan</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-5.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-6.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Persiapan Keberangkatan</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-6.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-7.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Pelatihan Materi</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-7.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-8.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Persiapan Keberangkatan</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-8.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-9.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Pelatihan Layanan Chef</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-9.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-10.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Pelatihan Materi</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-10.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-11.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Pelatihan Layanan Chef</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-11.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
				<div class="portfolio-detail">
					<i><img src="<?= base_url('') ?>frontend/images/gallery/home-portfolio-12.jpg" alt="Gallery" /></i>
					<div class="portfolio-content">
						<a href="#">Pelatihan Layanan Asisten Rumah Tangga</a>
						<a href="<?= base_url('') ?>frontend/images/gallery/home-portfolio-12.jpg" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
		</div><!-- Row -->
	</div>
	<div class="container">
		<div class="row">
			<div class="mbp_pagination mt30 text-center">
				<ul class="page_navigation pageButtons">
					<li class="page-item">
						<a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
					</li>
					<li class="page-item active" aria-current="page">
						<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item d-inline-block d-sm-none"><a class="page-link" href="#">...</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">...</a></li>
					<li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">20</a></li>
					<li class="page-item">
						<a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
					</li>
				</ul>
				<p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ Talent available</p>
				<br>
			</div>
		</div>
	</div>


	<?= $this->endSection() ?>