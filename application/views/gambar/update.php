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
						<li><a href="<?php echo site_url('welcome/admin') ?>" class="page-scroll">Home</a></li>
						<li><a href="<?php echo site_url('gambar/') ?>" class="page-scroll">Book</a></li>
						<li><a href="#services" class="page-scroll">Peminjaman</a></li>
						<li><a href="<?php echo site_url('crud/index') ?>" class="page-scroll active">Profile</a></li>
						<li><a href="<?php echo site_url('welcome/logout') ?>">Logout</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse --> 
			</div>
		</nav>
		
		<!-- Header -->
		<header id="header-admin">
			<div class="intro-admin" id="image">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="intro-text">
								<h1 class="label-admin">Halaman Admin | Edit Data Buku</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="profile-admin">
						<h1>Edit Data</h1>
						<?php foreach ($gambar->result() as $data): ?>
							<form action="<?php echo base_url(); ?>index.php/gambar/action_update/<?php echo $data->id ?>" method="post" class="card">
								<p class="label-edit-profile">Judul:</p>
			                    <input type="text" name="input_judul" value="<?php echo $data->judul ?>"class="form-group-add" required><br>
			                    <p class="label-edit-profile">Deskripsi:</p>
			                    <input type="text" name="input_deskripsi" value="<?php echo $data->deskripsi ?>" class="form-group-add" required><br>
			                    <p class="label-edit-profile">Kategori:</p>
			                    <input type="text" name="input_kategori" value="<?php echo $data->kategori ?>" class="form-group-add" required><br>
			                    <p class="label-edit-profile">Gambar :</p>
			                    <input type="file" name="nama_file" value="<?php echo $data->nama_file ?>" class="form-group-add"><br>
			                     <p class="label-edit-profile-thumbnail">Cover :</p>
			                    <?php
                                	echo "<img src='".base_url("images/".$data->nama_file)."' width='100' height='auto' class='img-responsive edit-book' alt='Buku Pelajaran' name='nama_file' value='$data->nama_file'>";
                                 ?><br>
			                    <p class="label-edit-profile">Pengarang:</p>
			                    <input type="text" name="input_pengarang" value="<?php echo $data->pengarang ?>" class="form-group-add" required><br>
			                    <p class="label-edit-profile">Penerbit:</p>
			                    <input type="text" name="input_penerbit" value="<?php echo $data->penerbit ?>" class="form-group-add" required><br>
			                    <p class="label-edit-profile">Tahun Terbit:</p>
			                    <input type="text" name="input_tahunterbit" value="<?php echo $data->tahunterbit ?>" class="form-group-add" required><br>
			                    <p class="label-edit-profile">Stok:</p>
			                    <input type="text" name="input_stok" value="<?php echo $data->stok ?>" class="form-group-add" required><br>
			                    <p class="label-edit-profile">Jumlah Halaman:</p>
			                    <input type="text" name="input_jml_hal" value="<?php echo $data->jml_hal ?>" class="form-group-add" required><br>
								<input type="submit" value="Save" class=" w3-btn link-action-delete">
								<input type="button" value="Cancel" class=" w3-btn link-action-delete" onclick="javascript:window.location='<?php echo site_url('gambar/delete') ?>';">
							</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
			<div class="container text-center">
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

</body>
</html>