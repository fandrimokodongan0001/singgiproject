<?php 
// CONNECTION DATABASE
@include('config.php');
// CONNECTION FUNCTIONS
@include('funct/functions.php');
@include('query.php');


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beranda | Singgi Project</title>

	<link rel="icon" type="img/png" href="assets/images/logo/Logo Singgi Project.png">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="assets/css/darkMode.css">

	<link rel="stylesheet" href="assets/css/responsive.css">

	<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

</head>
<body>

	<!-- === TOP BAR === -->
	<section>
		<top-bar>
			<div class="top-bar">
				
				<!-- nav -->
				<nav>
					<div class="nav">
						<div class="logo-top-bar">
							<a href=""><img src="assets/images/logo/sp.png" alt="Logo Singgi Project">
							<h2>Singgi Project</h2></a>
						</div>

						<!-- searching mobile -->
						<div class="search-mobile">
							
							<!-- checkbox search mobile -->
							<!-- <input type="checkbox" id="check-search-mobile">
							<label for="check-search-mobile">
								<i class="fa fa-search" id="btn-view-search"></i>
							</label> -->

						</div>
						<!-- end searching mobile -->

						<!-- menu mobile -->
						<div class="menu-mobile">

							<!-- checkbox menu mobile -->
							<input type="checkbox" id="check-menu">
							<label for="check-menu">
								<i class="fa fa-align-right" id="btn-view-menu-mobile"></i>
								<i class="fa fa-times" id="btn-close-menu-mobile"> <span id="title-menu">Menu Utama</span></i>
							</label>
							<div class="box-menu-mobile">
								<div class="auth">
									<ul>
										<li><a href="" class="link-login">Masuk</a></li>
										<li><a href="" class="link-regis">Daftar</a></li>
									</ul>
								</div>
								<div class="link-menu-mobile">
									<ul>
										<form action="" method="post">
											<span>Layanan</span>
											<li>
												<i class="fa fa-laptop"><i class="fa fa-mobile"></i>
													<a href="">
														<button type="submit" name="pc_hp">Komputer & Hp</button>
													</a>
												</i>
											</li>
											<li>
												<i class="fa fa-spinner">
													<a href="">
														<button type="submit" name="instalasi_app">Instalasi Aplikasi Laptop</button>
													</a>
												</i>
											</li>
											<li>
												<i class="fa fa-desktop">
													<a href="">
														<button type="submit" name="instalasi_so">Instalasi Sistem Operasi</button>
													</a>
												</i>
											</li>

											<span>Pusat Bantuan</span>
											<li>
												<i class="fa fa-question-circle">
													<a href="">
														<button type="submit" name="faq">FAQ</button>
													</a>
												</i>
											</li>

											<span>Lainnya</span>
											<li>
												<i class="fa fa-building">
													<a href="">
														<button type="submit" name="about">Tentang Kami</button>
													</a>
												</i>
											</li>

											<!-- checkbox dark-mode -->
											<span>Mode Gelap</span>
											<li>
												<input type="checkbox" id="check-dark-mode">
												<label for="check-dark-mode">
													<i class="fa fa-toggle-off" id="btn-view-dark-mode" onclick="setDarkMode(true)"></i>
													<i class="fa fa-toggle-on" id="btn-close-dark-mode" onclick="setDarkMode(false)"></i>
												</label>
											</li>
										</form>
									</ul>
								</div>
							</div>

							<div class="clear-both"></div>

						</div>
						<!-- end menu mobile -->

						<div class="menu">
							<ul>
								<li><a href="" class="bg-menu">Beranda</a></li>

								<li><a href="#teknisi" class="bg-menu">Teknisi</a></li>

								<li><a href="#layanan" class="bg-menu">Layanan</a></li>
								
								<li><a href="#faq" class="bg-menu">FAQ</a></li>

								<li><a href="#about" class="bg-menu">Tentang</a></li>


								<!-- checkbox search -->
								<input type="checkbox" id="check-search">
								<label for="check-search">
									<li><a class="bg-search" id="btn-view-search"><i class="fa fa-search"></i></a></li>
									<a id="btn-close-search" title="Hidden"><i class="fa fa-angle-right"></i></a>
								</label>
								<div class="box-list-search">
									<form action="" method="get">
										<table>
											<tr>
												<td colspan="2">
													<center><img src="assets/images/undraw/download_undraw_Web_search_re_efla.svg" alt=""></center>
												</td>
											</tr>
											<tr>
												<td>
													<input type="search" name="q" placeholder="Masukan pencarian..">
												</td>
												<td>
													<button type="submit" name="search"><i class="fa fa-search"></i></button>
												</td>
											</tr>
										</table>
									</form>
								</div>

								<li><a href="" class="bt-menu">Gabung</a></li>

								<!-- checbox DarkMode -->
								<li>
									<input type="checkbox" id="check-darkMode">
									<label for="check-darkMode">
										<a id="btn-moon" onclick="setDarkMode(true)" title="Tema Gelap"><i class="fa fa-moon"></i></a>
										<a id="btn-sun" onclick="setDarkMode(false)" title="Tema Terang"><i class="fa fa-sun"></i></a>
									</label>
								</li>

							</ul>
						</div>
						<div class="clear-both"></div>
					</div>
				</nav>
				<!-- end nav -->
				<div class="clear-both"></div>

			</div>
		</top-bar>
	</section>
	<!-- === END TOP BAR === -->


	<!-- === MENU BOTTOM BAR === -->
	<div class="bottom-bar">
		<div class="nav-bottom-bar">
			<div class="menu-bottom-bar">
				<ul>
					<li>
						<a href="">
							<i class="fa fa-home"></i> Beranda
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-laptop"></i> Teknisi
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-wrench"></i> Layanan
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-sign-in"></i> Masuk
						</a>
					</li>
				</ul>
			</div>
			<div class="clear-both"></div>
		</div>
	</div>
	<!-- === END MENU BOTTOM BAR === -->

	<div class="clear-both"></div>

	
	<!-- === CONTAINER === -->
		<section>
			<div class="container">

				<!-- BANNER -->
				<section>
					<div class="banner">
						
						<div class="content-banner">
							<h2>Selamat Datang di Website Singgi Project</h2>
							<p>Website ini adalah website yang menyediakan berbagai fasilitas yang berbau teknologi informasi. Dengan website ini anda bisa memesan layanan yang tersedia dengan potongan harga hingga 50%</p>
							<a href="" class="bt-banner">Gabung</a>
						</div>

						<div class="hero-banner">
							<img src="assets/images/undraw/download_undraw_accept_tasks_po1c.svg" alt="Gambar Hiro">
						</div>
						<div class="clear-both"></div>

						<!-- <div class="scroll-bottom"><a href="#layanan">Scroll Down <i class="fa fa-arrow-down"></i></a></div> -->

					</div>
				</section>
				<!-- END BANNER -->

				<div class="clear-both"></div>

				<!-- ARTIKEL-1 TEKNISI -->
				<section id="teknisi">
					<div class="article-1">
						
						<div class="title-article">
							<h2>TEKNISI</h2>
							<h1>Siapa Teknisi Pada Layanan Ini?</h1>
							<p>Ini adalah teknisi yang akan melayani kalian</p>
						</div>

						<div class="container-box-article-1">

							<?php foreach( $teknisi as $row ) : ?>
								<div class="box-article-1">
									<img src="assets/images/teknisi/<?= $row["gambar"]; ?>" alt="">
									<ul>
										<li>
											<a href="https://www.instagram.com/<?= $row["instagram"]; ?>"><i class="fa fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="https://www.facebook.com/<?= $row["facebook"]; ?>"><i class="fa fa-facebook"></i></a>
										</li>
									</ul>
									<h2><?= $row["nama"]; ?></h2>
									<span><?= $row["status"]; ?></span>
								</div>
							<?php endforeach; ?>


						</div>

					</div>
				</section>
				<!-- END ARTIKEL-1 TEKNISI -->

				<div class="clear-both"></div>

				<!-- ARTIKEL-2 LAYANAN -->
				<section id="layanan">
					<div class="article-2">

						<div class="title-article">
							<h2>LAYANAN</h2>
							<h1>Silahkan Pilih Layanan</h1>
							<p>Berikut adalah layanan yang tersedia saat ini</p>
						</div>

						<div class="box-article-2">
							<img src="assets/images/undraw/download_undraw_bug_fixing_oc7a.svg" alt="Gambar Komputer" id="img1-box">
							<p>Komputer & Hp</p>

							<table>

								<?php foreach( $komputerHp as $row ) : ?>
									<tr>
										<td>
											<i class="fa fa-check"></i>
										</td>
										<td>
											<?= $row["layanan"]; ?>
										</td>
									</tr>
								<?php endforeach; ?>

							</table>

							<a href="" id="order-pc-hp">Pesan</a>
							<div class="clear-both"></div>
						</div>

						<div class="box-article-2">
							<img src="assets/images/undraw/download_undraw_apps_m7mh.svg" alt="Gambar Komputer" id="img2-box">
							<p>Instalasi Aplikasi Laptop</p>

							<table>

								<?php foreach( $instalasiAppLaptop as $row ) : ?>
									<tr>
										<td>
											<i class="fa fa-check"></i>
										</td>
										<td>
											<?= $row["layanan"]; ?>
										</td>
									</tr>
								<?php endforeach; ?>

							</table>

							<a href="" id="order-instalasi-app">Pesan</a>
							<div class="clear-both"></div>
						</div>

						<div class="box-article-2">
							<img src="assets/images/undraw/download_undraw_Operating_system_re_iqsc.svg" alt="Gambar Komputer" id="img3-box">
							<p>Instalasi Sistem Operasi</p>

							<table>

								<?php foreach( $instalasiSo as $row ) : ?>
									<tr>
										<td>
											<i class="fa fa-check"></i>
										</td>
										<td>
											<?= $row["layanan"]; ?>
										</td>
									</tr>
								<?php endforeach; ?>

							</table>

							<a href="" id="order-instalasi-so">Pesan</a>
							<div class="clear-both"></div>
						</div>

						<div class="clear-both"></div>
					</div>
				</section>
				<!-- END ARTIKEL-2 -->

				<!-- ARTIKEL-3 FAQ -->
				<section id="faq">
					<div class="article-3">

						<div class="title-article">
							<h2>FAQ</h2>
							<h1>Pertanyaan yang Sering Diajukan</h1>
							<p>Sebelum kalian memutuskan untuk menggunakan layanan ini, ada baiknya informasi berikut ini dibaca terlebih dahulu untuk menghindari kebingungan dan adanya salah paham.</p>
						</div>

						<div class="box-article-3">

							<?php $idCheckBox = 1; ?>
							<?php foreach( $faq as $row ) : ?>
								<div class="content-faq-bagan<?= $idCheckBox; ?>">
									<input type="checkbox" id="check-faq-bagan<?= $idCheckBox; ?>">
									<label for="check-faq-bagan<?= $idCheckBox; ?>">
										<a id="btn-view-faq-bagan<?= $idCheckBox; ?>"><?= $row["questions"]; ?> 
											<i class="fa fa-angle-down fa-angle-down-faq"></i>
										</a>
									</label>
									<div class="box-faq-bagan<?= $idCheckBox; ?>">
										<p>
											<?= $row["answers"]; ?>
										</p>
									</div>
								</div>
								<?php $idCheckBox++; ?>
							<?php endforeach; ?>

						</div>

						<div class="box-article-3">
							<img src="assets/images/undraw/download_undraw_Questions_re_1fy7.svg" alt="">
						</div>

					</div>
				</section>
				<!-- END ARTIKEL-3 FAQ -->

				<div class="clear-both"></div>

				<!-- ARTIKEL-4 PAYMENT -->
				<section id="payment">
					<div class="article-4">

						<div class="box-article-4">
							<p>Metode Pembayaran..</p>
						</div>

						<div class="payment">
							<div class="payment-desktop">
								<img src="assets/images/payment/cod.png" alt="">
								<img src="assets/images/payment/bri.png" alt="">
								<img src="assets/images/payment/btn.png" alt="">
								<img src="assets/images/payment/dana.png" alt="">
								<img src="assets/images/payment/link-aja.png" alt="">
							</div>
							<table>
								<tr>
									<td><img src="assets/images/payment/cod.png" alt=""></td>
									<td id="payment-mg"></td>
									<td><img src="assets/images/payment/bri.png" alt=""></td>
									<td id="payment-mg"></td>
									<td><img src="assets/images/payment/btn.png" alt=""></td>
									<td id="payment-mg"></td>
									<td><img src="assets/images/payment/dana.png" alt=""></td>
									<td id="payment-mg"></td>
									<td><img src="assets/images/payment/link-aja.png" alt=""></td>
								</tr>
							</table>
						</div>

						<div class="clear-both"></div>
					</div>
				</section>
				<!-- END ARTIKEL-4 PAYMENT -->


				<!-- ARTIKEL-5 ABOUT -->
				<section id="about">
					<div class="article-5">

						<div class="title-article title-article-about">
							<h2>TENTANG</h2>
							<h1>Tentang Kami</h1>
							<p>Berikut adalah pengenalan tentang website kami.</p>
						</div>


					</div>
				</section>

				<!-- END ARTIKEL-5 ABOUT -->

				<div class="clear-both"></div>

				<!-- ARTIKEL-6 ABOUT-CONTENT -->
				<section id="about">
					<div class="article-6">

						<div class="box-article-6">
							<div class="layer1"></div>
							<div class="layer2"></div>
							<div class="card-article-6-mobile">
								<img src="assets/images/undraw/download_undraw_about_me_wa29.svg" alt="">
							</div>
							<div class="card-article-6">
								<?php foreach( $about as $row ) : ?>
									<p><?= $row["paragraf"]; ?></p>
									<span><strong><?= $row["ceo"]; ?></strong> CEO of SINGGI-PROJECT</span>
								<?php endforeach; ?>
							</div>
							<div class="card-article-6">
								<img src="assets/images/undraw/download_undraw_about_me_wa29.svg" alt="">
							</div>
							<div class="clear-both"></div>
						</div>

					</div>
				</section>

				<!-- END ARTIKEL-6 ABOUT-CONTENT -->


				<!-- FOOTER -->
				<section>
					<footer>
						<div class="bg-footer">
							
							<div class="footer">

								<div class="box-footer">
									<h2>SINGGI-PROJECT</h2>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Molestias, porro harum magni molestiae quaerat, modi omnis! Corrupti expedita repellendus eius amet libero, voluptas veritatis fuga voluptates. Culpa consequuntur, voluptatum reiciendis.</p>
								</div>
								
								<?php foreach( $teknisi as $row ) : ?>
									<div class="box-footer">
										<h2>Center Transaksi</h2>
										<p>
											<li><a href="https://api.whatsapp.com/send?phone=62<?= $row["whatsapp"]; ?>&text=Beri Pertanyaan kamu tentang aplikasi ini"><i class="fab fa-whatsapp"></i> +6282346455079</a></li>
											<li><a href="https://www.facebook.com/<?= $row["facebook"]; ?>"><i class="fab fa-facebook"></i> @<?= $row["facebook"]; ?></a></li>
										</p>
									</div>
								<?php endforeach; ?>

								<?php foreach( $teknisi as $row ) : ?>
									<div class="box-footer">
										<h2>Hubungi Kami</h2>
										<p>
											<li><a href=""><i class="fa fa-envelope"></i> <?= $row["email"]; ?></a></li>
										</p>
									</div>
								<?php endforeach; ?>

								<div class="box-footer">
									<h2>Lokasi SINGGI-PROJECT</h2>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.679121350163!2d124.63255364086129!3d0.7963280050816594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d429ce0aef97d22!2sSinggi%20Project!5e0!3m2!1sid!2sid!4v1627662066963!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>

								<div class="clear-both"></div>
							</div>

							<div class="copyright">
								<p>
									Copyrght &copy; 2021 All rights reserved | Made with <i class="fa fa-heart"></i> by <span>SINGGI PROJECT</span>
								</p>
								<ul>
									<?php foreach( $teknisi as $row ) : ?>
										<li>
											<a href="https://api.whatsapp.com/send?phone=62<?= $row["whatsapp"]; ?>&text=Beri Pertanyaan kamu tentang aplikasi ini"><i class="fab fa-whatsapp"></i></a>
											<a href="https://www.facebook.com/<?= $row["facebook"]; ?>"><i class="fab fa-facebook"></i></a>
											<a href="https://www.instagram.com/<?= $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a>
										</li>
									<?php endforeach; ?>
								</ul>
								<div class="clear-both"></div>
							</div>

						</div>
					</footer>
				</section>
				<!-- END FOOTER -->

				
			</div>
		</section>
	<!-- === END CONTAINER === -->




	<!-- COPYRIGHT IMAGES/IMG/ILUSTRATIONS -->
	<!-- https://undraw.co/illustrations -->
	
	<!-- DARK MODE -->
	<script>
		if(localStorage.getItem('theme') == 'dark' )
			setDarkMode(true)

		function setDarkMode(isDark){

			if( isDark ){
				document.body.setAttribute('id', 'darkmode')
				localStorage.setItem('theme', 'dark')
			} else{
				document.body.setAttribute('id', '')
				localStorage.removeItem('theme')
			}
		}
	</script>

</body>
</html>