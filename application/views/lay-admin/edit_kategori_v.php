        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">List Kategori</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h4>List Kategori </h4>
                    <div><?php echo $this->session->flashdata('msg'); ?></div>
                </div>
                <script type="text/javascript">
                    function tambah() {
                        var nama = prompt("Input Nama Kategori: ", "");
                        if (nama) {
                            window.location = "<?= base_url('admin/tambah_kategori/') ?>" + nama;    
                        }
                        
                    }

                    function edit(id) {
                        var before = document.getElementById(id).value;
                        var nama = prompt("edit nama kategori:", before);
                        if(nama) {
                            window.location = "<?= base_url('admin/edit_kategori/') ?>" + id + "/" + nama;    
                        }
                        
                    }
                </script>
                <div class="card-body">
                    <div class="table-responsive">
                        <button onclick="tambah()" class="btn btn-primary">
                            Tambah Kategori
                        </button>
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach ($kategori as $key) { ?>
                                <tr>
                                    <th scope="row"><?= ++$i ?></th>
                                    <td><?= $key->nama_kategori ?></td>
                                    <td><button class="btn" id="<?= $key->id_kategori ?>" onclick="edit(<?= $key->id_kategori ?>)"><span class="fa fa-pencil"></span></button>
                                    <a class="btn" href="<?= base_url('admin/kategori_delete/' . $key->id_kategori) ?>"><span class="fa fa-trash"></span></a>
                                    </td>
                                    

                                </tr>
                                <?php } ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
    </div>
</div>
</div>