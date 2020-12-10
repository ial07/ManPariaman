<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">Direktori Guru</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <article class="entry" data-aos="fade-up">
                        <table class="table table-responsive">
                            <?php
                            $no = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tenaga_kp");
                            // $isi = substr($data['isi_tenaga_kp'], 0, 100);
                            while ($data = mysqli_fetch_assoc($sql)) {
                            ?>
                                <thead class="">
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                </thead>
                                <tbody>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_guru']; ?></td>
                                    <td><?= $data['jk_g']; ?></td>
                                    <td><?= $data['jabatan_g']; ?></td>
                                    <td><?= $data['alamat_g']; ?></td>
                                    <td><img width="100" src="img/guru/<?= $data['foto']; ?>"></td>
                                </tbody>

                            <?php } ?>
                        </table>
                    </article><!-- End blog entry -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar" data-aos="fade-left">
                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <!-- End sidebar categories-->

                        <h3 class="sidebar-title">Pengumuman</h3>
                        <?php $sql = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 1");
                        while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-4 mb-2">
                                            <img class="img-fluid" src="assets/pengumuman.jpg" alt="No Image" style="width: 100%; height: 60px;" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 mb-2">
                                            <h4><a href="?page=pages/detail_pengumuman&idpengumuman=<?php echo $data['id_pengumuman'] ?>"><?= substr($data['judul_pengumuman'], 0, 40); ?>...</a></h4>
                                        </div>
                                    </div><!-- End sidebar recent posts-->

                                </div>
                            </div><!-- End sidebar -->
                        <?php } ?>

                        <h3 class="sidebar-title">Recent Berita</h3>
                        <?php $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 2");
                        while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-lg-4  col-sm-4 col-4 mb-2">
                                            <img class="img-fluid" src="img/berita/<?= $data['gambar'] ?>" alt="No Image" style="width: 100%; height: 60px;" />
                                        </div>
                                        <div class="col-lg-8  col-sm-8 col-8 mb-2">
                                            <h4><a href="?page=pages/detail_berita&iddetail=<?php echo $data['id_berita'] ?>"><?= substr($data['judul_berita'], 0, 40); ?>...</a></h4>
                                        </div>
                                    </div><!-- End sidebar recent posts-->

                                </div>
                            </div><!-- End sidebar -->
                        <?php } ?>
                        <br>
                        <h3 class="sidebar-title">Recent Agenda</h3>
                        <?php $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 2");
                        while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-4 mb-2">
                                            <img class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" style="width: 100%; height: 60px;" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 mb-2">
                                            <h4><a href="?page=pages/detail_agenda&idagenda=<?php echo $data['id_agenda'] ?>"><?= substr($data['judul_agenda'], 0, 40); ?>...</a></h4>
                                        </div>
                                    </div><!-- End sidebar recent posts-->

                                </div>
                            </div><!-- End sidebar -->
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>