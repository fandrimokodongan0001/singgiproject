<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beranda | Singgi Mokodompit</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/darkMode.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="img/png" href="assets/images/logo/Logo Singgi Project.png">
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
							<div class="box-article-1">
								<img src="assets/images/teknisi/singgi.jpg" alt="">
								<ul>
									<li><a href=""><i class="fa fa-instagram"></i></a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
								</ul>
								<h2>Singgi Mokodompit</h2>
								<span>MAHASISWA | PROGRAMMER</span>
							</div>
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
							<p>Komputer & Handphone</p>

							<table>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Hapus Virus Laptop</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Blue Screen Laptop</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Keyboard Laptop Error</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Internet Laptop Error</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Pemulihan Data Laptop / Hp</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Lupa Sandi Laptop / Hp</td>
								</tr>
							</table>

							<a href="" id="order-pc-hp">Pesan</a>
							<div class="clear-both"></div>
						</div>

						<div class="box-article-2">
							<img src="assets/images/undraw/download_undraw_apps_m7mh.svg" alt="Gambar Komputer" id="img2-box">
							<p>Instalasi Aplikasi</p>

							<table>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Aplikasi Laptop</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Driver Laptop </td>
								</tr>
							</table>

							<a href="" id="order-instalasi-app">Pesan</a>
							<div class="clear-both"></div>
						</div>

						<div class="box-article-2">
							<img src="assets/images/undraw/download_undraw_Operating_system_re_iqsc.svg" alt="Gambar Komputer" id="img3-box">
							<p>Instalasi Sistem Operasi</p>

							<table>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Windows 7 32bit / 64bit - Pro</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Windows 7 32bit / 64bit - Ultimate</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Windows 10 32bit / 64bit - Pro</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Windows 10 32bit / 64bit - Home</td>
								</tr>
								<tr>
									<td>
										<i class="fa fa-check"></i>
									</td>
									<td>Kali Linux 32bit / 64bit</td>
								</tr>
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

							<div class="content-faq-bagan1">
								<input type="checkbox" id="check-faq-bagan1">
								<label for="check-faq-bagan1">
									<a id="btn-view-faq-bagan1">Untuk Apa Web Ini Dibuat? 
										<i class="fa fa-angle-down fa-angle-down-faq"></i>
									</a>
								</label>
								<div class="box-faq-bagan1">
									<p>Untuk mempermudah orang-orang agar bisa memilih layanan yang telah disediakan.</p>
								</div>
							</div>

							<div class="content-faq-bagan2">
								<input type="checkbox" id="check-faq-bagan2">
								<label for="check-faq-bagan2">
									<a id="btn-view-faq-bagan2">Apakah Pendaftaran Akun Baru Di Web Ini Gratis? 
										<i class="fa fa-angle-down fa-angle-down-faq"></i>
									</a>
								</label>
								<div class="box-faq-bagan2">
									<p>Pendaftaran pengguna akun baru tidak dipunggut biaya sepeserpun Gratis!</p>
								</div>
							</div>

							<div class="content-faq-bagan3">
								<input type="checkbox" id="check-faq-bagan3">
								<label for="check-faq-bagan3">
									<a id="btn-view-faq-bagan3">Apa Keuntungan Menggunakan Aplikasi Berbasis Web Ini? 
										<i class="fa fa-angle-down fa-angle-down-faq"></i>
									</a>
								</label>
								<div class="box-faq-bagan3">
									<p>User bisa lebih mudah mencari layanan seperti yang ada di website ini apalagi di masa pandemi yang sulit seperti ini.</p>
								</div>
							</div>

							<div class="content-faq-bagan4">
								<input type="checkbox" id="check-faq-bagan4">
								<label for="check-faq-bagan4">
									<a id="btn-view-faq-bagan4">Bagaimana Cara Menggunakan Aplikasi Ini? 
										<i class="fa fa-angle-down fa-angle-down-faq"></i>
									</a>
								</label>
								<div class="box-faq-bagan4">
									<p>Silahkan lakukan pendaftaran dan pilih layanan sesuai kebutuhan anda.</p>
								</div>
							</div>

						</div>

						<div class="box-article-3">
							<img src="assets/images/undraw/download_undraw_Questions_re_1fy7.svg" alt="">
						</div>

					</div>
				</section>
				<!-- END ARTIKEL-3 FAQ -->

				<div class="clear-both"></div>

				<!-- ARTIKEL-4 PAYMENT -->
				<section id="about">
					<div class="article-4">

						<div class="box-article-4">
							<p>Metode Pembayaran..</p>
						</div>

						<div class="payment">
							<img src="assets/images/payment/cod.png" alt="">
							<img src="assets/images/payment/bri.png" alt="">
							<img src="assets/images/payment/btn.png" alt="">
							<img src="assets/images/payment/dana.png" alt="">
							<img src="assets/images/payment/link-aja.png" alt="">
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
								<p>SINGGI-PROJECT adalah sebuah platform bisnis yang menyediakan berbagai layanan mengenai dunia IT. Dengan bergabung bersama kami, Anda dapat memesan atau memilih berbagai layanan yang tersedia di platform kami. Jika anda mendaftar sebagai anggota kami anda akan mendapat potongan harga sesuai pesanan layanan anda.</p>
								<span><strong>Singgi Mokodompit</strong> CEO of SINGGI-PROJECT</span>
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

								<div class="box-footer">
									<h2>Center Transaksi</h2>
									<p>
										<li><a href=""><i class="fab fa-whatsapp"></i> +6282346455079</a></li>
										<li><a href=""><i class="fab fa-facebook"></i> @singgimokodompit</a></li>
									</p>
								</div>

								<div class="box-footer">
									<h2>Hubungi Kami</h2>
									<p>
										<li><a href=""><i class="fa fa-envelope"></i> admin@singgiproject.com</a></li>
									</p>
								</div>

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
									<li>
										<a href=""><i class="fab fa-whatsapp"></i></a>
										<a href=""><i class="fab fa-facebook"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
									</li>
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
		function setDarkMode(isDark){

			if( isDark ){
				document.body.setAttribute('id', 'darkmode')
			} else{
				document.body.setAttribute('id', '')
			}
		}
	</script>

</body>
</html>