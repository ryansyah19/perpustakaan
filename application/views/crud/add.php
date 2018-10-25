<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('ses_nama') and $this->session->userdata('ses_id')){
?>
<!DOCTYPE html>
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
	
	<style>
		.dropdown {
    float: left;
    overflow: hidden;
    text-transform: uppercase;
    color: #fff;
    font-weight: 400;
    font-size: 15px;
    padding: 5px 0;
    border: 2px solid transparent;
    letter-spacing: 0.5px;
    height: 150px;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 6px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
		</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
		<nav id="menu" class="navbar navbar-default navbar-fixed-top nav-profile">
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
						<li><a href="<?php echo site_url('welcome/admin') ?>" class="page-scroll">Beranda</a></li>
						<li><a href="<?php echo site_url('gambar/') ?>" class="page-scroll">Buku</a></li>
						<li><a href="<?php echo site_url('peminjaman/') ?>" class="page-scroll">Peminjaman</a></li>
						<li><a href="<?php echo site_url('welcome/contact_admin') ?>" class="page-scroll">Pesan</a></li>
							<div class="dropdown">
						    <button class="dropbtn page-scroll">PROFIL 
						      <i class="fa fa-caret-down"></i>
						    </button>
							    <li class="dropdown-content">
							      <a href="<?php echo site_url('crud/index') ?>" class="page-scroll">Siswa</a>
							      <a href="<?php echo site_url('crud/index_guru') ?>" class="page-scroll">Guru</a>
							    </li>
							<li><a href="<?php echo site_url('welcome/logout') ?>">.</a></li>
						 </div>
						 <li><a href="<?php echo site_url('welcome/logout') ?>" class="page-scroll">Logout</a></li>
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
								<h1 class="label-admin">Halaman Admin | Input Data Profile</h1>
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
						<h1>Input Data</h1>
						<form action="<?php echo base_url(); ?>index.php/crud/action_add" method="post" class="card">
							<p class="label-edit-profile">NIS :</p>
							<input type="text" name="nis" placeholder="Masukkan NIS" class="form-group-add" required><br>
							<p class="label-edit-profile">Nama :</p>
							<input type="text" name="nama" placeholder="Masukkan Nama" class="form-group-add" required><br>
							<p class="label-edit-profile">Kelas :</p>
							<input type="text" name="kelas" placeholder="Masukkan kelas" class="form-group-add" required><br>
							<p class="label-edit-profile">Jurusan :</p>
							<select name="jurusan" placeholder="Masukkan Jurusan" class="form-group-add" required>
							    <?php foreach($content2->result() as $data) : ?>
			                		<option value="<?php echo $data->jurusan;?>"><?php echo $data->jurusan;?></option>
			            		<?php endforeach ?>
							</select><br>
							<p class="label-edit-profile">Tingkatan :</p>
							<select name="tingkatan" placeholder="Masukkan Tingkatan" class="form-group-add" required>
								<option value="X">X</option>
								<option value="XI">XI</option>
								<option value="XII">XII</option>
							</select><br>
							<p class="label-edit-profile">Email :</p>
								<input type="text" name="email" placeholder="Masukkan Email" class="form-group-add" required><br>
								<p class="label-edit-profile">No Telp :</p>
								<input type="text" name="notelp" placeholder="Masukkan No Telp" class="form-group-add" required><br>
							<p class="label-edit-profile">Password :</p>
							<input type="text" name="password" placeholder="Masukkan password" class="form-group-add" required><br>
							<input type="submit" value="Save" class=" w3-btn link-action-delete">
							<input type="button" value="Cancel" class=" w3-btn link-action-delete" onclick="javascript:window.location='<?php echo site_url('crud/index') ?>';">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
			<div class="container text-center">
				<div>
					<p>&copy; 2018 GrafikaPerpus oleh <a href="https://www.instagram.com/ryan_syah19/">M Ryan Firmansyah</a> .RPL </p>
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
<?php } else{
    $this->load->view('login.php');
    echo "<script>alert('Maaf, anda tidak bisa kembali ke halaman sebelumnya, silahkan login terlebih dahulu');</script>";
}?>