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
						<li><a href="#about" class="page-scroll">About</a></li>
						<li><a href="#portfolio" class="page-scroll">Book</a></li>
						<li><a href="#testimoni" class="page-scroll">Testimonial</a></li>
						<li><a href="#contact" class="page-scroll">Contact Us</a></li>
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
		
		<!-- Portfolio Section -->
		<div id="portfolio">
			<div class="container">
				<div class="section-title text-center center">
					<h2>Book</h2>
					<hr>
					<p>Buku di Perpustakaan SMKN 4 Malang kini tersedia secara online !</p>
				</div>
				<div class="categories">
					<ul class="cat">
						<li>
							<ol class="type">
								<li><a href="#" data-filter="*" class="active">All Projects</a></li>
							</ol>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<!-- Search Fitur -->
				<?php echo form_open("page/cari"); ?>
					
					<select name="cariberdasarkan" class="search-item">
						<option value="">Cari Berdasarkan</option>
						<option value="deskripsi">Judul</option>
						<option value="kategori">Kategori</option>
					</select>
					<div class="demo-1 search">
		                    <span class="icon"><i class="fa fa-search"></i></span>
		                    <input type="text" name="yangdicari" class="search-item" placeholder="Cari sesuatu yang anda inginkan" />
		            </div>
					<input type="submit" value="cari" class="w3-btn create-admin">

				<?php echo form_close(); ?>
				<div class="row">
					<div class="portfolio-items">
					<?php
						if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
					    foreach($gambar->result() as $data){
					?>
						<div class="col-sm-6 col-md-3 col-lg-3 residential">
							<div class="portfolio-item">
								<div class="hover-bg"> 
									<div class="hover-text">
										<h4><?php echo "<td>".$data->deskripsi."</td>";?></h4>	
										<a href="<?php echo base_url() ?>index.php/gambar/preview_user/<?php echo $data->id ?>" class="w3-btn read-more">Read More >></a> 	
									</div> 
									<?php
						              echo "<img src='".base_url("images/".$data->nama_file)."' width='401' height='565' class='img-responsive img-book' alt='Buku Pelajaran'>";
						          	?>
								</div>
							</div>
						</div>
						<?php
					            }
					          }
					          else{ // Jika data tidak ada
					            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
					          } 
						?>
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
							<div class="thumbnail"> <img src="<?php echo base_url() ?>asset/img/thumbnails/afe.jpg" alt="Siswa SMKN 4 Malang" width="684" height="720" class="team-img">
								<div class="caption">
									<h3>Afi Lintang C</h3>
									<p>Siswa Kelas XII RPL A</p>
									<p>"Webnya sangat bagus & bermanfaat"</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-8 team">
							<div class="thumbnail"> <img src="<?php echo base_url() ?>asset/img/thumbnails/kiki.jpg" alt="Siswa SMKN 4 Malang" width="684" height="720" class="img-circle team-img">
								<div class="caption">
									<h3>M Rizqi A</h3>
									<p>Siswa Kelas XII PD F</p>
									<p>"Sangat memudahkan Siswa & maupun Guru"</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-8 team">
							<div class="thumbnail"> <img src="<?php echo base_url() ?>asset/img/thumbnails/azalai.jpg" alt="Siswa SMKN 4 Malang" width="837" height="853S" class="img-circle team-img">
								<div class="caption">
									<h3>Azalia PB</h3>
									<p>Siswa Kelas X MM A</p>
									<p>"Semenjak ada website perpustakaan ini, sangat membantu saya dalam peminjaman buku di perpustakaan SMKN 4 Malang"</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Contact Section -->
		<div id="contact">
			<div class="container">
				<div class="section-title text-center">
					<h2>Contact Us</h2>
					<hr>
					<p>Silahkan Hubungi Admin jika ada sesuatu hal yang perlu ditanyakan</p>
				</div>
				<div class="col-md-4">
					<h3>Contact Info</h3>
					<div class="contact-item"> <span>Address</span>
						<p>22 Tanimbar St,<br>
							kasin, klojen, Malang city 65117</p>
					</div>
					<div class="contact-item"> <span>Email</span>
						<p>mryanfirmansyah88@gmail.com</p>
					</div>
					<div class="contact-item"> <span>Phone</span>
						<p> +62 8123 456 1234</p>
					</div>
				</div>
				<div class="col-md-8">
					<h3>Leave us a message</h3>
					<form name="sentMessage" id="contactForm" action="<?php echo base_url(); ?>index.php/welcome/action_add" method="post" role="form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="username" class="form-control" required="required" name="username" value="<?php echo $this->session->userdata('username');?>" disabled>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" id="email" class="form-control" placeholder="Email" required="required" name="email">
									<p class="help-block text-danger"></p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="pesan" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
							<p class="help-block text-danger"></p>
						</div>
						<div id="success"></div>
						<button type="submit" class="btn btn-custom btn-lg">Send Message</button>
					</form>
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

