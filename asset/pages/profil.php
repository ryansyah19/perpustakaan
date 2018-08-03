<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Edit Profil - Perpustakaan Grafika</title>
		<meta name="description" content="Website Perpustakaan SMKN 4 Malang">
		<meta name="keywords" content="Perpustakaan , Buku ,Sekolah">
		<meta name="author" content="Ryansyah Team">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicons -->
		<link rel="shortcut icon" href="../img/icons/grf.png" type="image/x-icon">
		<link rel="apple-touch-icon" href="../img/icons/grf.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../img/icons/grf.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../img/icons/grf.png">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

		<!-- Stylesheet -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/default.css">
		<link rel="stylesheet" type="text/css"  href="../css/style.css">
		

	
	</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
		<nav id="menu" class="navbar navbar-default navbar-fixed-top">
			<div class="container"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<img src="../img/icons/grf.png" class="img-header">
					<a class="navbar-brand page-scroll" href="#page-top">GRAFIKA</a> 
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#about" class="page-scroll">About</a></li>
						<li><a href="#services" class="page-scroll">Services</a></li>
						<li><a href="pages/profil.php?id=<?php echo $data['id'];?>" class="page-scroll">Profile</a></li>
						<li><a href="#testimoni" class="page-scroll">Testimoni</a></li>
						<li><a href="#contact" class="page-scroll">Contact</a></li>
						<li><a href="pages/logout.php">Logout</a></li>
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
		
		<!-- Edit Profile -->
		<section class="edit-profil">
			<div class="card img-edit">
				<?php
							include "koneksi.php";
							$dir='../img/profile/';
							$acak=rand(1,100);
							@$id=$_GET['id'];
							@$nama_foto=$acak.$_FILES['foto']['name'];
							@$nama_tmp=$_FILES['foto']['tmp_name'];
							$upload_foto=$dir.$nama_foto;
							$upload=move_uploaded_file($nama_tmp,$upload_foto);
							$query2="SELECT * FROM data WHERE id='$id'";
							$cekdata = mysqli_query($koneksi,$query2);
							$cdata = mysqli_fetch_array($cekdata);
							//print_r($cdata);
							if(empty($cdata['urlfoto'])){
								echo "<img src='../img/icons/avatar.jpg' width='40' height='40' class='img-profile'>";
							}
							else{
							 echo "<a href='".$cdata['urlfoto']."'><img src='".$cdata['urlfoto']."'width='100' height='100' class='img-profile2'> </a>";
							}
				?>
				<div class="label-edit"><?php echo $_SESSION['username'];?></div>
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<tbody>
						<?php
						$username_aktif = $_SESSION['username'];
						$query="SELECT user.username, user.id, data.id, data.nama, data.nisn, data.kelas, data.jurusan, 
								data.alamat, data.nohp 
								FROM data 
								INNER JOIN user 
								ON data.id = user.id
								WHERE user.username = '$username_aktif'";
						$hasil=mysqli_query($koneksi,$query);
						$no=1;
						$data=mysqli_fetch_array($hasil);
						?>	
						<tr><td>Nama : <?php echo $data['nama'];?></td></tr>
						<tr><td>NISN : <?php echo $data['nisn'];?></td></tr>
						<tr><td>Kelas : <?php echo $data['kelas'];?></td></tr>
						<tr><td>Jurusan : <?php echo $data['jurusan'];?></td></tr>
						<tr><td>Alamat : <?php echo $data['alamat'];?></td></tr>
						<tr><td>No.HP : <?php echo $data['nohp'];?></td></tr>
					</tbody>
				</table>
				<div class="body">
					<div class="table-responsive">
						<br><a style="padding:10px 20px 10px; font-size:18px;" class="btn btn-primary btn-xs" href="form_update.php?id=<?php echo $data['id'];?>">EDIT</a>
					</div>
				</div>
			</div>
		</section>
		
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
					<p>&copy; 2016 NEST. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="../js/jquery.1.11.1.js"></script> 
		<script type="text/javascript" src="../js/bootstrap.js"></script> 
		<script type="text/javascript" src="../js/SmoothScroll.js"></script> 
		<script type="text/javascript" src="../js/nivo-lightbox.js"></script> 
		<script type="text/javascript" src="../js/jquery.isotope.js"></script> 
		<script type="text/javascript" src="../js/jqBootstrapValidation.js"></script> 
		<script type="text/javascript" src="../js/contact_me.js"></script> 
		<script type="text/javascript" src="../js/main.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
		
				var images = ["book.jpg", "book4.jpg", "perpus.jpg", "book2.jpg", "book3.jpg",];
				$(function () {
						var i = 0;
						$("#image").css("background-image", "url(../img/thumbnails/" + images[i] + ")");
						setInterval(function () {
								i++;
								if (i == images.length) {
										i = 0;
								}
								$("#image").fadeOut("slow", function () {
										$(this).css("background-image", "url(../img/thumbnails/" + images[i] + ")");
										$(this).fadeIn("slow");
								});
						}, 5000);
						
				});
		</script>
		
	</body>
</html>