    <div class="page-wrapper">
        <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">Tambah Gallery</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Gallery</h4>
                        <!-- <h6 class="card-subtitle">Ketikla berita yang bagus, jangan HOAX</h6> -->
                        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/tambah_gallery') ?>">
                            
                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">Caption<span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="text" class="form-control"  name="caption" placeholder="tulis caption" required>
                                </div>
                            </div>

                            
                            <div class="form-group form-validated">
                                <label for="foto">Foto<span class="text-danger">*</span></label>
                                <input type="file" name="berkas" accept="image/*" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input class="btn-primary input-group-btn form-control" type="submit" name="submit" value="Buat">    
                            </div>
                                    <!-- Form validation -->
    <script src="<?= base_url('assets/admin/') ?>js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>js/lib/form-validation/jquery.validate-init.js"></script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
        </div>
    
    </div>

