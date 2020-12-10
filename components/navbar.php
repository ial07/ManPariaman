	<style type="text/css">
		#wh-widget-send-button {
			margin: 0 !important;
			padding: 0 !important;
			position: fixed !important;
			z-index: 16000160 !important;
			bottom: 0 !important;
			text-align: center !important;
			height: 90px;
			width: 60px;
			visibility: visible;
			transition: none !important;
		}

		#wh-widget-send-button.wh-widget-right {
			right: 0;
		}

		#wh-widget-send-button.wh-widget-left {
			left: 10px;
		}

		#wh-widget-send-button iframe {
			width: 100%;
			height: 100%;
			border: 0;
		}

		div.clear {
			clear: both;
		}
	</style>
	<header>

		<div class="container-menu-desktop">
			<div class="topbar " style="background-color: #28a745">
				<div class="content-topbar container h-100">
					<div class="left-topbar ">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								<i class="fa fa-envelope text-light" aria-hidden="true"></i> <a class="text-light">smkn2_padang@yahoo.co.id</a>
							</span>



						</span>

						<span class="left-topbar-item flex-wr-s-c">
							<span>
								<i class="fa fa-phone text-light" aria-hidden="true"></i> <a class="text-light">0751-21930</a>
							</span>

						</span>

					</div>
				</div>
			</div>

			<div class="wrap-header-mobile">

				<div class="logo-mobile">
					<a href="index.php"><img src="img/head1.png" alt="IMG-LOGO"></a>
				</div>


				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>


			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								<i class="fa fa-envelope" aria-hidden="true"></i> smkn2_padang@yahoo.co.id
							</span>
						</span>

						<span class="left-topbar-item flex-wr-s-c">
							<span>
								<i class="fa fa-phone" aria-hidden="true"></i> 0751-21930
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="" class="left-topbar-item">
							About
						</a>

					</li>
				</ul>

				<ul class="main-menu-m" style="background-color: #28a745">
					<li style="background-color: #28a745">
						<a href="index.php">Home</a>



					</li>

					<li style="background-color: #28a745">
						<a href="">Profil</a>
						<ul class="sub-menu-m">
							<li><a href="?page=pages/visimisi">Visi Misi</a></li>
							<li><a href="?page=pages/sejarah">Sejarah Singkat</a></li>
							<li><a href="?page=pages/sarana">Sarana Prasarana</a></li>
							<li><a href="?page=pages/struktur">Struktur Organisasi</a>
							</li>
							<!-- <li><a href="profile/kepala-sekolah">Kepala Sekolah</a></li> -->
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li style="background-color: #28a745">
						<a href="?page=pages/daftar_berita">Berita</a>
					</li>

					<li style="background-color: #28a745">
						<a href="?page=pages/daftar_pengumuman">Pengumuman</a>
					</li>

					<li style="background-color: #28a745">
						<a href="?page=pages/daftar_agenda">Agenda</a>
					</li>
					<!-- 
					<li style="background-color: #28a745">
						<a href="daftar_pengumuman">Pengumuman</a>
					</li> -->

					<li style="background-color: #28a745">
						<a href="?page=pages/daftar_guru">Guru</a>
						<ul class="sub-menu-m">
							<li><a href="?page=pages/daftar_guru">Direktori Guru</a></li>
							<li><a href="?page=pages/kalender">Kalendar Akademik</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angl	e-right" aria-hidden="true"></i>
						</span>
					</li>

					<li style="background-color: #28a745">
						<a href="?page=pages/galery">Galeri</a>

					</li>


				</ul>
			</div>


			<div class="wrap-logo no-banner container">

				<div class="logo">
					<a href="index.php"><img src="img/head1.png" style="width:450px;height: 106px" alt="LOGO"></a>
				</div>
			</div>


			<div class="wrap-main-nav">
				<div class="main-nav show-main-nav">

					<nav class="menu-desktop">
						<a class="logo-stick" href="index.php">
							<img src="img/logo.png" alt="LOGO">
						</a>

						<ul class="main-menu justify-content-center">
							<li class="index.php">
								<a href="index.php">Home</a>
							</li>

							<li class="main-menu">
								<a href="">Profil</a>
								<ul class="sub-menu">
									<li><a href="?page=pages/visimisi">Visi Misi</a></li>
									<li><a href="?page=pages/sejarah">Sejarah Singkat</a>
									</li>
									<li><a href="?page=pages/sarana">Sarana
											Prasarana</a></li>
									<li><a href="?page=pages/struktur">Struktur
											Organisasi</a></li>
									<!-- <li><a href="">Kepala Sekolah</a> -->
							</li>
						</ul>
						</li>

						<!-- UNTUK BERITA -->
						<li class="mega-menu-item">
							<a href="?page=pages/daftar_berita">Berita</a>

							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" data-toggle="pill" href="" role="tab" style="background-color: #28a745;">Berita Terbaru</a>

								</div>

								<div class="tab-content">
									<div class="tab-pane show active" id="business-1" role="tabpanel">
										<div class="row">

											<!-- Item post -->
											<?php $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
											while ($data = mysqli_fetch_assoc($sql)) { ?>
												<div class="col-3">

													<div>
														<a href="?page=pages/detail_berita&iddetail=<?php echo $data['id_berita'] ?>" class="wrap-pic-w hov1 trans-03">
															<img src="img/berita/<?= $data['gambar'] ?>" alt="IMG" height="80px">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="?page=pages/detail_berita&iddetail=<?php echo $data['id_berita'] ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?= $data['judul_berita'] ?></a>
															</h5>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="mega-menu-item">
							<a href="?page=pages/daftar_pengumuman">Pengumuman</a>

							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" data-toggle="pill" href="" role="tab" style="background-color: #28a745;">Pengumuman Terbaru</a>

								</div>

								<div class="tab-content">
									<div class="tab-pane show active" id="business-1" role="tabpanel">
										<div class="row">

											<!-- Item post -->
											<?php $sql = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 4");
											while ($data = mysqli_fetch_assoc($sql)) { ?>
												<div class="col-3">

													<div>
														<a href="?page=pages/detail_pengumuman&idpengumuman=<?php echo $data['id_pengumuman'] ?>" class="wrap-pic-w hov1 trans-03">
															<img src="assets/pengumuman.jpg" alt="IMG" height="80px">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="?page=pages/detail_pengumuman&idpengumuman=<?php echo $data['id_pengumuman'] ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?= $data['judul_pengumuman'] ?></a>
															</h5>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="mega-menu-item">
							<a href="?page=pages/daftar_agenda">Agenda</a>

							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" style="background-color: #28a745;" data-toggle="pill" href="" role="tab">Agenda Terbaru</a>

								</div>

								<div class="tab-content">
									<div class="tab-pane show active" id="business-1" role="tabpanel">
										<div class="row">

											<?php $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 4");
											while ($data = mysqli_fetch_assoc($sql)) { ?>
												<div class="col-3">

													<div>
														<a href="?page=pages/detail_agenda&idagenda=<?php echo $data['id_agenda'] ?>" class="wrap-pic-w hov1 trans-03">
															<img height="80px" class="f1-s-5 cl3 hov-cl10 trans-03" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" />
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="?page=pages/detail_agenda&idagenda=<?php echo $data['id_agenda'] ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?= $data['judul_agenda'] ?> </a>
															</h5>

														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>


						<li class="main-menu">
							<a href="?page=pages/daftar_guru">Guru</a>
							<ul class="sub-menu">
								<li><a href="?page=pages/daftar_guru">Direktori Guru</a></li>
								<li><a href="?page=pages/kalender">Kalendar Akademik</a>
								</li>
							</ul>
						</li>

						<li class="main-menu">
							<a href="?page=pages/galery">Galeri</a>
						</li>

						</ul>
					</nav>
				</div>

			</div>
		</div>
	</header>