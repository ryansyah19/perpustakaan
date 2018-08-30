<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perpustakaan Grafika</title>

		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php echo base_url() ?>asset/img/icons/grf.png" type="image/x-icon">
		<link rel="apple-touch-icon" href="<?php echo base_url() ?>asset/img/icons/grf.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>asset/img/icons/grf.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>asset/img/icons/grf.png">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/fonts/font-awesome/css/font-awesome.css">

		<!-- Stylesheet -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/nivo-lightbox/default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">
	
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
		<nav id="menu" class="navbar navbar-default navbar-fixed-top">
			<div class="container"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<img src="<?php echo base_url() ?>asset/img/icons/grf.png" class="img-header">
					<a class="navbar-brand page-scroll" href="#page-top">GRAFIKA</a> 
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('welcome/about_user') ?>">About</a></li>
                        <li><a href="<?php echo site_url('welcome/beranda') ?>">Book</a></li>
                        <li><a href="<?php echo site_url('welcome/testimoni_user') ?>">Testimonial</a></li>
                        <li><a href="<?php echo site_url('welcome/contact_user') ?>">Contact Us</a></li>
                        <li><a href="<?php echo site_url('welcome/logout') ?>">Logout</a></li>
                    </ul>
				</div>
				<!-- /.navbar-collapse --> 
			</div>
		</nav>
		
		<!-- Header -->
		<header id="header">
			<div class="intro" id="image">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="intro-text">
								<h1 class="fadeInUp"><strong>GRAFIKA</strong> <span>/</span> Perpustakaan</h1>
								<p class="zoomIn">"Ayo! ke perpustakaan SMKN 4 Malang"</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
			<div>
				<!-- About Section -->
		<div id="about">
			<div class="container">
				<div class="section-title text-center center">
					<h2>Our Story</h2>
					<hr>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 text-center"> <img src="<?php echo base_url() ?>asset/img/thumbnails/perpus.jpg" class="img-responsive" alt=""> </div>
					<div class="col-xs-12 col-md-6">
						<div class="about-text">
							<h3>Peresmian Perpustakaan</h3>
							<p>Pembangunan perpustakaan SMKN 4 Malang telah sampai ke tahap akhir, yaitu peresmian. Menteri Pendidikan dan Kebudayaan Indonesia, Prof. Dr. Muhadjir Effendy M.Ap. diundang ke SMKN 4 Malang untuk 
							meresmikan perpustakaan. Buku merupakan salah satu sumber ilmu pengetahuan terbanyak, oleh karena itu SMKN 4 Malang berusaha sebaik mungkin untuk membuat 
							perpustakaan yang nyaman bagi para siswa.</p>
							<h3>Prestasi Perpustakaan SMKN 4 Malang</h3>
							<p>Beberapa Prestasi yang pernah diraih adalah sebagai Juara 1 Kategori Pustakawan terbaik se-Jawa Timur tahun 2016 , Juara 2 Lomba Kreasi jinggle perpustakaan tahun 2016 , Juara 2 Pustakawan terbaik Tingkat Nasional</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 text-center img-library"> <img src="<?php echo base_url() ?>asset/img/thumbnails/perpus1.jpg" class="img-responsive" alt=""> </div>
					<div class="col-xs-12 col-md-6 img-library">
						<div class="about-text">
							<h3>Fungsi Perpustakaan SMKN 4 Malang</h3>
							<p>Sebagai sarana siswa untuk terus menigkatkan wawasannya, salah satunya dengan membaca buku. Juga sebagai tempat bagi guru yang ingin mengisi jam pelajarannya di luar kelas.</p>
							<h3>Fasilitas Perpustakaan</h3>
							<p>Selain menyediakan bermacam buku , Perpustakaan SMKN 4 Malang juga memfalitiasi beberapa kebutuhan siswa. Seperti Wifi, Home Theater, sofa dan lainnya.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
		

		<div id="footer">
			<div class="container text-center">
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/muhammad.r.firmansyah.9028"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/ryan_syah19/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="https://id.pinterest.com/mryanfirmansyah88/"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCbuLABCTkMZChBTpvaqkHGA?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div>
					<p>&copy; 2018 Designed by <a href="https://www.instagram.com/ryan_syah19/">M Ryan Firmansyah</a> .RPL </p>
				</div>
			</div>
		</div>
		<script src="<?php echo base_url() ?>asset/bootstrap/jquery-1.11.0.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.1.11.1.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/SmoothScroll.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/nivo-lightbox.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.isotope.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jqBootstrapValidation.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/contact_me.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>=
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
		
				var images = ["buku.jpeg", "book4.jpg", "perpus.jpg", "book2.jpg"];
				$(function () {
						var i = 0;
						$("#image").css("background-image", "url(<?php echo base_url() ?>asset/img/thumbnails/" + images[i] + ")");
						setInterval(function () {
								i++;
								if (i == images.length) {
										i = 0;
								}
								$("#image").fadeOut("slow", function () {
										$(this).css("background-image", "url(<?php echo base_url() ?>asset/img/thumbnails/" + images[i] + ")");
										$(this).fadeIn("slow");
								});
						}, 5000);
						
				});
		</script>

</body>
</html>

