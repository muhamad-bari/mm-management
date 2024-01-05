<?= $this->extend('cms/layout/base') ?>
<?= $this->section('content') ?>
<div class="form-login border mt-3">
    <div class="c-header text-center">
        <h4>Management Gallery</h4>
    </div>
    <div class="c-body">
    <?php if(session()->getFlashdata('succ')){
                echo "<div class='alert alert-success alert-dismissible'>".session()->getFlashdata('succ')."
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            }?>
            <?php if(session()->getFlashdata('err')){
                echo "<div class='alert alert-danger alert-dismissible'>".session()->getFlashdata('err')."
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            }?>
        <div class=" d-flex justify-content-center align-items-center">
        <!-- <button data-bs-target="#tambah-ktg-modal" class="btn btn-sm btn-submit mx-1" data-bs-toggle="modal">Tambah Kategeori</button> -->
        <button data-bs-target="#tambah-gl-modal" class="btn btn-sm btn-terti mx-1" data-bs-toggle="modal">Tambah Item Galeri</button>
        </div>
    </div>
</div>

<!-- Modal  Kategori-->
<div class="modal fade" id="tambah-ktg-modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog w-100 d-flex flex-column">
	  <div class="modal-content">
      <div class="card-form">
        <div class="c-header d-flex justify-content-between align-items-center">
            <h4>Tambah Kategori Galeri</h4>
            <span type="button" data-bs-dismiss="modal" class="text-light" aria-label="Close"><i class="fa-solid fa-xl fa-xmark"></i></span>
        </div>
        <form action="<?= base_url('cms/add_ktg_gl')?>" method="post">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash()?>">
        <div class="c-body">
            <label for="">Nama Kategori</label>
            <input type="text" name="ktg" id="ktg" class="form-text"  placeholder="Nama Kategori"required>
            <div id="err" style="color:red; font-size:0.7rem"></div>
        </div>
        <div class="c-footer text-center">
            <input type="submit" value="Tambah" name="tambah-ktg" id="tambah-ktg"class="btn btn-sm btn-submit">
        </div>
        </form>
      </div>
      </div>

    </div>
</div>
<!-- End Modal  Kategori-->

<!-- Modal Galeri -->
<div class="modal fade" id="tambah-gl-modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog w-100 d-flex flex-column">
	  <div class="modal-content">
      <div class="card-form">
        <div class="c-header d-flex justify-content-between align-items-center">
            <h4>Tambah Galeri</h4>
            <span type="button" data-bs-dismiss="modal" class="text-light" aria-label="Close"><i class="fa-solid fa-xl fa-xmark"></i></span>
        </div>
        <form action="<?= base_url('cms/addgaleri')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash()?>">
        <div class="c-body">
           <div class="form-group mt-2">
                <label for="">Kategori</label>
                <input type="text" name="kategori_gl" id="" data-role="tagsinput" class="form-text" required>
           </div>
           <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="desc_gl" id="" cols="20" rows="5" class="form-text" required></textarea>
           </div>
           <div class="form-group mt-3">
                <label for="">Upload File</label>
                <input type="file" name="file_gl[]" id="" class="form-text" multiple accept=".jpg, .png, .svg, .bmp, .webp, .gif, .mov, .avi, .mp4, .mkv, .flv, .webM" required>
           </div>
        </div>
        <div class="c-footer text-center mt-3">
            <input type="submit" value="Tambah" name="tambah-galeri" id="tambah-ktg"class="btn btn-sm btn-submit">
        </div>
        </form>
      </div>
      </div>

    </div>
</div>
<!-- End Modal Galeri -->



<!-- Show Gallery Item -->
            <div class="kategori-container p-4">
                <h4>Kategori</h4>
                <div id="kategori" class="bordered"></div>
            </div>
            <div id="data-container"></div>
            <div id="pagination-container">
                <button id="prevButton">Previous</button>
                <div id="pageButtons"></div>
                <button id="nextButton">Next</button>
            </div>
<!-- End Show Gallery Item -->
<?= $this->endSection() ?>