<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>SIPENDAKI</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">SIPENDAKI</h1>
							<small class="site-description">Website Pendakian Gunung Terbaik Masa Kini</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Beranda</a></li>
							<li class="menu-item"><a href="news.php">Berita</a></li>
							<li class="menu-item"><a href="about.php">Tentang</a></li>
							<li class="menu-item current-menu-item"><a href="project.php">Fasilitas</a></li>
							<li class="menu-item"><a href="contact.php">HikeGram</a></li>
							<li class="menu-item"><a href="login.php">Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

			<main class="main-content">

				<div class="page">
					<div class="container">
						<h2 class="entry-title">Barang, Tiket, dan Gunung</h2>
						<p>Bagian ini berisi mulai dari penyewaan barang yang kalian cari, pembelian tiket ke gunung yang akan dituju, penyewaan fasilitas di gunung yang akan dituju, dan informasi gunung yang ingin dicari.</p>
						<p>Terima Kasih</p>

						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value=".gunung">Show all</option>
								<option value=".sewabarang">skyscraper</option>
								<option value=".tiket">shopping-center</option>
								<option value=".apartment">apartment</option>
							</select>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".gunung">Gunung</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".sewabarang">Penyewaan Barang</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".tiket">Pembelian Tiket</a>
						</div>

						<div class="filterable-items">
							<div class="project-item filterable-item gunung">
								<figure class="featured-image">
									<a href="project-single-semeru.php"><img src="poto/gunung1semeru.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single-semeru.php">Gunung Semeru</a></h2>
										<p class="project-subtotle">Jawa Timur, Indonesia</p>
										<p>Gunung Semeru merupakan gunung aktif di Indonesia, gunung ini merupakan gunung tertinggi di pulau Jawa. Starvolcano ini dikenal sebagai Maheru, yang berarti "Gunung Hebat".</p>
										<a href="project-single-semeru.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item gunung">
								<figure class="featured-image">
									<a href="project-single-bromo.php"><img src="poto/gunung2bromo.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single-bromo.php">Gunung Bromo</a></h2>
										<p class="project-subtotle">Jawa Timur, Indonesia</p>
										<p>Gunung Bromo merupakan salah satu gunung berapi aktif yang ada di Indonesia. Gunung ini terkenal sebagai objek wisata utama karena daya tariknya yang masih berstatus aktif.</p>
										<a href="project-single-bromo.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item gunung">
								<figure class="featured-image">
									<a href="project-single-merbabu.php"><img src="poto/gunung3merbabu.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single-merbabu.php">Gunung Merbabu</a></h2>
										<p class="project-subtotle">Jawa Tengah, Indonesia</p>
										<p>Gunung Merbabu merupakan gunung berapi yang bertipe Strato. Gunung ini terkenal melalui naskah-naskah masa pra-islam sebagai Gunung Damalung atau Gunung Pamarihan.</p>
										<a href="project-single-merbabu.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item gunung">
								<figure class="featured-image">
									<a href="project-single-rinjani.php"><img src="poto/gunung4rinjani.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single-rinjani.php">Gunung Rinjani</a></h2>
										<p class="project-subtotle">Nusa Tenggara Barat, Indonesia</p>
										<p>Gunung Rinjani merupakan gunung berapi tertinggi kedua di Indonesia, gunung ini menjadi gunung terfavorit bagi para pendaki karena menyuguhkan pemandangan yang sangat indah.</p>
										<a href="project-single-rinjani.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item gunung">
								<figure class="featured-image">
									<a href="project-single-salak.php"><img src="poto/gunung5salak.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single-salak.php">Gunung Salak</a></h2>
										<p class="project-subtotle">Jawa Barat, Indonesia</p>
										<p>Gunung Salah dahulunya disebut sebagai Gunung Sapto Argo, gunung ini merupakan kompleks gunung berapi yang teretak di selatan Jakarta, di Pulau Jawa. Gunung ini beruia tua sehingga memiiki beberapa puncak.</p>
										<a href="project-single-salak.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item sewabarang">
								<figure class="featured-image">
									<a href="login.php"><img src="poto/hamok.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Hamock</a></h2>
										<p class="project-subtotle">Rp. 15.000/hari</p>
										<p>Hamok adalah sebuah alat pendakian yang digunakan sebagai tempat tidur yang cara penggunannya diikat di antara dua pohon.</p>
										<a href="login.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item sewabarang">
								<figure class="featured-image">
									<a href="login.php"><img src="poto/tasgunung.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tas Gunung</a></h2>
										<p class="project-subtotle">Rp.50.000/hari</p>
										<p>Tas Gunung adalah sebuah alat pendakian yang berfungsi sebagai tempat menyimpan barang-barang pendakian berupa baju , p3k, dll.</p>
										<a href="login.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item sewabarang">
								<figure class="featured-image">
									<a href="login.php"><img src="poto/kompor.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Kompor</a></h2>
										<p class="project-subtotle">Rp.30.000/hari</p>
										<p>Kompor adalah sebuah alat pendakian yang digunakan sebagai media untuk tempat memasak.</p>
										<a href="login.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item sewabarang">
								<figure class="featured-image">
									<a href="login.php"><img src="poto/tenda.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tenda Camping</a></h2>
										<p class="project-subtotle">Rp.50.000/hari</p>
										<p>Tenda adalah sebuah alat pendakian yang digunakan sebagai tempat berlindung dari panas, hujan, dan sebagai  tempat istirahat.</p>
										<a href="login.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item tiket">
								<figure class="featured-image">
									<a href="pembeli.php"><img src="poto/tiketsemeru.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tiket Gunung Semeru</a></h2>
										<p class="project-subtotle">Rp. 19.000/1 orang</p>
										<a href="login.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item tiket">
								<figure class="featured-image">
									<a href="login.php"><img src="poto/tiketbromo.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tiket Gunung Bromo</a></h2>
										<p class="project-subtotle">Rp. 80.000/1 orang</p>
										<a href="login.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item tiket">
								<figure class="featured-image">
									<a href="pembeli.php"><img src="poto/tiketmerbabu.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tiket Gunung Merbabu</a></h2>
										<p class="project-subtotle">Rp. 12.500/1 orang</p>
										<a href="pembeli.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item tiket">
								<figure class="featured-image">
									<a href="pembeli.php"><img src="poto/tiketrinjani.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tiket Gunung Rinjani</a></h2>
										<p class="project-subtotle">Rp. 150.000/1 orang</p>
										<a href="pembeli.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item tiket">
								<figure class="featured-image">
									<a href="pembeli.php"><img src="poto/tiketsalak.png" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Tiket Gunung Salak</a></h2>
										<p class="project-subtotle">Rp. 15.000/1 orang</p>
										<a href="pembeli.php" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							</div>
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="pull-left">

						<address>
							<strong>Pendaki Gila</strong>
							<p>Institut Teknologi Kalimantan, Balikpapan</p>
						</address>

						<a href="#" class="phone">+6285821552303</a>
					</div> <!-- .pull-left -->
					<div class="pull-right">

						<div class="social-links">

							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>

						</div>

					</div> <!-- .pull-right -->

					<div class="colophon">Copyright 2019 ITK. Designed by Fery Darmawan, Rahmat Hardiansyah, Gilang Perdana. Sistem Informasi 2017.</div>

				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
