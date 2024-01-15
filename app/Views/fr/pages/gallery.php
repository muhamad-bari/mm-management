<?= $this->extend('fr/layout/base1') ?>
<?= $this->section('content') ?>
<title>Gallery</title>

<!-- Modal -->
<div class="modal fade" id="galeri-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen d-flex flex-column" >
		<div class="modal-content m-auto" style="width:90%; height:100vh; overflow:auto;">
		<div class="d-flex justify-content-end">
			<button type="button" class="btn-close p-3 bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>

		<div id="cp-img" class="row justify-content-center"></div>
		</div>
	</div>
</div>

<div class="modal fade" id="galeri-modal-detail" tabindex="-1">
	<div class="modal-dialog modal-fullscreen d-flex flex-column" >
		<div class="modal-content m-auto" style="width:90%; height:100vh; overflow:auto; background:transparent;">
		<div class="d-flex justify-content-end">
			<button type="button" class="btn-close p-3 bg-light modal-galeri-detail" data-bs-toggle="modal" data-bs-target="#galeri-modal" aria-label="Close"></button>
		</div>
		<img src="" alt="" id="img-galeri-detail">
		</div>
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
                <!-- <h4>Kategori</h4> -->
                <div class="bordered kategori">
                </div>
            </div>
		<!-- Portfolio List -->
		<div class="row portfolio-list galeri-fr justify-content-center">
			<?php
			if(!$ktg)
			{
				?>
				<div class="col-md-12">
					<span>Tidak Ada Album Item Galeri</span>
				</div>
				<?php
			}
			else
			{
				$no=0;
				foreach($ktg as $ktgr)
				{
					$noo = $no++;
					$ktgg = $ktgr['id_gl_ket'];
					if(count($tgaleri[$noo]) > 0)
					{
					?>
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
						<div class="portfolio-detail" style="width:250px; height:250px;">
							<i style="width:250px; height:250px"><img src="<?= base_url('uploads/galeri/'.$galeri[$noo]['file']) ?>" alt="Gallery" width="400" height="400"/></i>
							<div class="portfolio-content">
								<a href="#"><?= $ktgr['nama_gl_ket']?>(<?= count($tgaleri[$noo]) ?>)</a>
								<a href="#galeri-modal" data-alb=<?= $ktgg ?>  data-bs-toggle="modal" class="zoom glr-btn" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
							</div>
						</div>
                    </div>
					<?php
					}
					else
					{
						?>
						<div class="col-md-12">
							<span>Tidak Ada Album Item Galeri</span>
						</div>
						<?php
					}
				}
			}
			?>
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
				<!-- <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ Talent available</p> -->
				<br>
			</div>
		</div>
	</div>


	<?= $this->endSection() ?>