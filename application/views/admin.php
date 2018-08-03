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
						<li><a href="#services" class="page-scroll">Book</a></li>
						<li><a href="#services" class="page-scroll">Booking</a></li>
						<li><a href="#services" class="page-scroll">Testimonial</a></li>
						<li><a href="<?php echo site_url('crud/index') ?>" class="page-scroll">Profile</a></li>
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
		<!-- Portfolio Section -->
		<div id="portfolio">
			<div class="container">
				<div class="section-title text-center center">
					<h2>Projects</h2>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
				</div>
				<div class="categories">
					<ul class="cat">
						<li>
							<ol class="type">
								<li><a href="#" data-filter="*" class="active">All Projects</a></li>
								<li><a href="#" data-filter=".residential">Residential</a></li>
								<li><a href="#" data-filter=".office">Office</a></li>
								<li><a href="#" data-filter=".commercial">Commercial</a></li>
							</ol>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="row">
					<div class="portfolio-items">
						<div class="col-sm-6 col-md-3 col-lg-3 residential">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/mapel5.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/mapel5.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 office">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/mapel3.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/mapel3.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 commercial">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="iimg/book/mapel4.png" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/mapel4.png" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 residential">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/mapel2.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/mapel2.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 office">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/novel1.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/novel1.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 commercial">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/novel2.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/novel2.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 residential">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/novel3.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/novel3.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 office">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/book/novel4.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/book/novel4.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 commercial">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title" width="401" height="565"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 residential">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 office">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 commercial">
							<div class="portfolio-item">
								<div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
									<div class="hover-text">
										<h4>Project Name</h4>
									</div>
									<img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Testimoni Section -->
		<div id="testimoni" class="text-center">
			<div class="overlay">
				<div class="container">
					<div class="col-md-8 col-md-offset-2 section-title">
						<h2>Testimonial Siswa</h2>
						<hr>
						<p>Apresiasi siswa SMKN 4 Malang terhadap websites ini.</p>
					</div>
					<div id="row">
						<div class="col-md-4 col-sm-8 team">
							<div class="thumbnail"> <img src="img/thumbnails/afe.jpg" alt="Siswa SMKN 4 Malang" width="684" height="720" class="team-img">
								<div class="caption">
									<h3>Afi Lintang C</h3>
									<p>Siswa Kelas XII RPL A</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-8 team">
							<div class="thumbnail"> <img src="img/thumbnails/kiki.jpg" alt="Siswa SMKN 4 Malang" width="684" height="720" class="img-circle team-img">
								<div class="caption">
									<h3>M Rizqi A</h3>
									<p>Siswa Kelas XII PD F</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-8 team">
							<div class="thumbnail"> <img src="img/thumbnails/azalai.jpg" alt="Siswa SMKN 4 Malang" width="837" height="853S" class="img-circle team-img">
								<div class="caption">
									<h3>Azalia PB</h3>
									<p>Siswa Kelas X MM A</p>
								</div>
							</div>
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
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
		
				var images = ["book.jpg", "book4.jpg", "perpus.jpg", "book2.jpg", "book3.jpg",];
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