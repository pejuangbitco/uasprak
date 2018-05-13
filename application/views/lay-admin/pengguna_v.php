        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">Pengguna</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h4>List Pengguna </h4>
                    <div><?php echo $this->session->flashdata('msg'); ?></div>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="<?= base_url('admin/tambah_pengguna/') ?>" class="btn btn-primary">
                            Tambah Pengguna
                        </a>
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>kontak</th>
                                    <th>Role</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach ($pengguna as $key) { ?>
                                <tr>
                                    <th scope="row"><?= ++$i ?></th>
                                    <td><img src="<?= base_url('assets/upload/'. $key->foto) ?>" height="55" width="55"></td>
                                    <td><?= $key->nama ?></td>
                                    <td><?= $key->email ?></td>
                                    <td><?= $key->username ?></td>
                                    <td><?= $key->password ?></td>
                                    <td><?= $key->kontak ?></td>
                                    <td><?= $key->role ?></td>
                                    <td><?= $key->nama_gender ?></td>
                                    <td><a class="btn" href="<?= base_url('admin/edit_pengguna/' . $key->username) ?>"><span class="fa fa-pencil"></span></a>
                                    <a class="btn" href="<?= base_url('admin/delete_pengguna/' . $key->username) ?>"><span class="fa fa-trash"></span></a>
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