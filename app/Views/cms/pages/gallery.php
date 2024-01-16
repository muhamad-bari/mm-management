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
        <button data-bs-target="#tambah-ktg-modal" class="btn btn-sm btn-submit mx-1" data-bs-toggle="modal">Tambah Kategeori</button>
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
           <!-- <div class="form-group mt-2">
                <label for="">Kategori</label>
                <input type="text" name="kategori_gl" id="" data-role="tagsinput" class="form-text" required>
           </div> -->
           <div class="form-group">
                <label for="">Kategori</label>
                <select name="kategori_gl" id="" class="form-text">
                    <?php
                        foreach($ktg as $ktgg)
                        {
                            echo "<option value='$ktgg[id_gl_ket]'>$ktgg[nama_gl_ket]</option>";
                        }
                    ?>
                </select>
           </div>
           <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="desc_gl" id="" cols="20" rows="5" class="form-text" required></textarea>
           </div>
           <div class="form-group mt-3">
                <label for="">Upload File</label>
                <input type="file" name="file_gl[]" id="" class="form-text" multiple accept=".jpg, .jpeg, .png, .svg, .bmp, .webp, .gif, .mov, .avi, .mp4, .mkv, .flv, .webM" required>
           </div>
           <div class="form-group mt-3">
                <label for="">Visibilitas</label>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="userradio">
                        <input type="radio" name="visibility" id="" value="1">
                        User
                        </label>
                    </div>
                    <div class="col-6">
                        <label for="publicradio">
                        <input type="radio" name="visibility" id="" value="0">
                        Public
                        </label>
                    </div>
                </div>
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
            <div class="row">
            <div class="col-md-6 kategori-container  p-4">
                <div class="form-login border">
                <div class="c-header-secondary">
                    <h6>Kategori</h6>
                </div>
                <div class="card-body kategori">
                    <?php 
                    foreach($ktg as $ktgr)
                    {

                 echo   "<span class='btn btn-sm btn-accent mx-1 ktg-btn' role='button' data-kategori='$ktgr[id_gl_ket]'>$ktgr[nama_gl_ket]</span>";
                }
                ?>
                <span class="btn btn-sm btn-accent mx-1 ktg-btn" role="button" data-kategori=''>Show All</span>
                </div>
                </div>
            </div>
            <div class="col-md-6 visibility-container   p-4">
            <div class="form-login border"> 
            <div class="c-header-secondary">
                    <h6>Visibilitas</h6>
                </div>
                <div class="card-body bordered kategori">
                <span class="btn btn-sm btn-accent mx-1 vsb-btn" role="button" data-visible='1'>User</span>
                <span class="btn btn-sm btn-accent mx-1 vsb-btn" role="button" data-visible='0'>Public</span>
                <span class="btn btn-sm btn-accent mx-1 vsb-btn" role="button" data-visible=''>Show All</span>
                </div>
                </div>
            </div>
            </div>
            <div class="row data-galeri justify-content-center align-items-center"></div>
            <div id="pagination-container">
                <button class="prevButton btn btn-submit p-3"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="pageButtons"></div>
                <button class="nextButton btn btn-submit p-3"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
<!-- End Show Gallery Item -->


<!-- modal-show-item -->
<div class="modal fade" id="modal-galeri" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content w-100">
            <div class="modal-header">
                <span class="btn btn-close" role="button" data-bs-dismiss="modal"></span>
            </div>
            <div class="modal-body w-100">
            <img src="" alt="" id="img-modal" >
            <video id="vd-modal"  class="w-100"controls>
                <source src="" >
            </video>
            </div>
        </div>
    </div>
</div>
<!-- modal-show-item -->

<!-- modal update galeri -->

<div class="modal fade" id="modal-up-galeri" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog w-100 d-flex flex-column">
	  <div class="modal-content">
      <div class="card-form">
        <div class="c-header d-flex justify-content-between align-items-center">
            <h4>Tambah Galeri</h4>
            <span type="button" data-bs-dismiss="modal" class="text-light" aria-label="Close"><i class="fa-solid fa-xl fa-xmark"></i></span>
        </div>
        <form action="<?= base_url('cms/updategaleri')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash()?>">
        <input type="hidden" name="id_gl" id="id_gl">
        <div class="c-body">
           <!-- <div class="form-group mt-2">
                <label for="">Kategori</label>
                <input type="text" name="kategori_gl" id="" data-role="tagsinput" class="form-text" required>
           </div> -->
           <div class="form-group">
                <label for="">Kategori</label>
                <select name="kategori_gl" id="ktg_gl" class="form-text">
                    <?php
                        foreach($ktg as $ktgg)
                        {
                            echo "<option value='$ktgg[id_gl_ket]'>$ktgg[nama_gl_ket]</option>";
                        }
                    ?>
                </select>
           </div>
           <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="desc_gl" id="desc" cols="20" rows="5" class="form-text" required></textarea>
           </div>
           <div class="form-group mt-3">
                <label for="">Visibilitas</label>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="userradio">
                        <input type="radio" name="visibility" id="userradio" value="1">
                        User
                        </label>
                    </div>
                    <div class="col-6">
                        <label for="publicradio">
                        <input type="radio" name="visibility" id="publicradio" value="0">
                        Public
                        </label>
                    </div>
                </div>
           </div>
        </div>
        <div class="c-footer text-center mt-3">
            <input type="submit" value="Update" name="update-galeri" id="tambah-ktg"class="btn btn-sm btn-submit">
        </div>
        </form>
      </div>
      </div>
            
    </div>
</div>

<!-- endmodal update galeri -->
<?= $this->endSection() ?>