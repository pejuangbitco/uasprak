    <div class="page-wrapper">
        <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">Create Post</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 style="color: green;"><?php echo $this->session->flashdata('msg'); ?></h3>
                        <h4 class="card-title">Edit Berita</h4>
                        <h6 class="card-subtitle">Ketikla berita yang bagus, jangan HOAX</h6>
                        <form method="post" action="<?= base_url('admin/edit/' . $u->id_news) ?>">
                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label">Judul <span class="text-danger">*</span></label>
                                <br>
                                <div class="col-lg-12">
                                    <input type="text" value="<?= $u->judul ?>" class="form-control"  name="judul" placeholder="judul berita">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea value="<?= $u->isi ?>" name="isi" class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height:450px">
                                    <?= $u->isi ?>
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-12 col-form-label">Kategori <span class="text-danger">*</span></label>
                                <br>
                                <select class="form-control" name="id_kategori">
                                    <?php foreach ($kategori as $key) { ?>
                                        <option value="<?= $key->id_kategori ?>"><?= $key->nama_kategori ?></option>
                                    <?php } ?>
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <input class="btn-primary input-group-btn form-control" type="submit" name="edit" value="Edit">    
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

