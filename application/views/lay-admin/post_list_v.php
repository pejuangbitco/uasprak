        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">List Post</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h4>List Post </h4>
                    <div><?php echo $this->session->flashdata('msg'); ?></div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach ($news as $key) { ?>
                                <tr>
                                    <td scope="row"><?= ++$i ?></td>
                                    <td><img src="<?= base_url('assets/upload/'.$key->foto) ?>" alt="gambar" height="55" width="55"></td>
                                    <td><?= $key->judul ?></td>
                                    <td><?= $key->time ?></td>
                                    <td><?= $key->nama_kategori ?></td>
                                    <td><a class="btn" href="<?= base_url('admin/edit/' . $key->id_news) ?>"><span class="fa fa-pencil"></span></a>
                                    <a class="btn" href="<?= base_url('admin/delete/' . $key->id_news) ?>"><span class="fa fa-trash"></span></a>
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