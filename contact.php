<?php
	include "koneksi.php";
?>
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
		<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
							<li class="menu-item"><a href="project.php">Fasilitas</a></li>
							<li class="menu-item current-menu-item"><a href="contact.php">HikeGram</a></li>
							<li class="menu-item"><a href="login.php">Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

			<main class="main-content">

				<div class="page">
					<div class="container">
						<a href="project.php" class="button-back"><img src="images/arrow-back.png" alt="" class="icon">Kembali</a>
						<section class="row justify-content-center">
				      <section class="col-12 col-sm-6 col-md3">
						<div class="row">
						<div class="col-12">
						<div class="card text-center">
						  <div class="card-header">
								<form class="form-group" action="add_post.php" method="post" enctype="multipart/form-data">
						    <h3 style="color: black;">HikeGram</h3>
						  </div>
						  <div class="card-body">
								<input type="text" class="form-control" name="judul" placeholder="Judul"><br>
								<textarea class="form-control" rows="4" name="caption" placeholder="Caption"></textarea>
						    <input type="file" class="form-control" name="foto" >
						  </div>
						  <div class="card-footer text-muted">
						    <button class="btn btn-info btn-sm" type="submit">POST</button>
						  </div>
						</form>
						</div>
					</div>
				</div><br><br>

				<?php
				$tampil = mysqli_query($db, "SELECT*FROM hikegram");
				while($file = mysqli_fetch_array($tampil)){
				 ?>

				<div class="row">
					<div class="col-sm-12">
				<div class="card text-center">
				  <div class="card-header">
				    <img src="images/post/<?= $file['foto'] ?>">
				  </div>
				  <div class="card-body">
				    <h5 class="card-title" style="font-size: 18px; color: black;"><strong><?= $file['judul'] ?></strong></h5>
				    <p class="card-text" style="font-size: 14px; color: black"><?= $file['caption'] ?></p>
				  </div>
				  <div class="card-footer text-muted">
				    <?= $file['waktu'] ?>
					</div>
				</div>
					</div>
				</div><br><br>

				<?php
				} ?>

			</div>
			</div>

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
		<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	</body>

</html>
