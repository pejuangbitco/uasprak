    <div class="page-wrapper">
        <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">Edit Pengguna</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div><?php $this->session->flashdata('msg'); ?></div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Pengguna</h4>
                        
                        <!-- <h6 class="card-subtitle">Ketikla berita yang bagus, jangan HOAX</h6> -->
                        <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/edit_pengguna/' .$pengguna->username) ?>">
                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">Username <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="text" value="<?= $pengguna->username ?>" class="form-control"  name="username" placeholder="username" required disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">Nama <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="text" value="<?= $pengguna->nama ?>" class="form-control"  name="nama" placeholder="nama" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">email <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="email" value="<?= $pengguna->email ?>" class="form-control"  name="email" placeholder="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">password <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="text" class="form-control"  name="password" placeholder="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">kontak <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="text" value="<?= $pengguna->kontak ?>" class="form-control"  name="kontak" placeholder="kontak" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">Role <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12 form-validated">
                                    <input type="number" value="<?= $pengguna->role ?>" class="form-control"  name="role" required>
                                </div>
                            </div>
                            
                            <div class="form-group form-validated">
                                <label for="foto">Foto</label>
                                <input type="file" name="berkas" accept="image/*" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-12 col-form-label">jenis kelamin <span class="text-danger">*</span></label>
                                <br>
                                <select class="form-control" name="gender">
                                    <?php foreach ($gender as $key) { ?>
                                        <option value="<?= $key->id_gender ?>"><?= $key->nama_gender ?></option>
                                    <?php } ?>
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <input class="btn-primary input-group-btn form-control" type="submit" name="submit" value="Edit">    
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
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    CKEDITOR.replace('ckeditor');
   
    
  });
</script>
