<!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Admin</li>
                        <li> <a href="<?= base_url('admin') ?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Post</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('admin/createpost') ?>">Buat Post</a></li>
                                <li><a href="<?= base_url('admin/list_post') ?>">List Post</a></li>
                                <li><a href="<?= base_url('admin/kategori') ?>">Kategori</a></li>
                            </ul>
                        </li>

                        <li> <a href="<?= base_url('admin/pengguna') ?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Pengguna</span></a>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-address-book-o"></i><span class="hide-menu">Silabus</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('admin/tambah_silabus') ?>">Buat Silabus</a></li>
                                <li><a href="<?= base_url('admin/silabus') ?>">List Silabus</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-clone"></i><span class="hide-menu">Gallery</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('admin/album') ?>">Album</a></li>
                                <li><a href="<?= base_url('admin/foto') ?>">Foto</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->