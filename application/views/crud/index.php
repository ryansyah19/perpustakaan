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
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
								<h1 class="label-admin">Halaman Admin | CRUD Profile</h1>
								<a href="<?php echo base_url(); ?>index.php/crud/admin" class="w3-btn edit-admin">Edit Profil Admin</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="profile-admin">
			<h1>Data Profil Siswa</h1><hr>
			<a href="<?php echo base_url(); ?>index.php/crud/add" class="w3-btn create-admin">Siswa Baru</a>
			<a href="<?php echo base_url(); ?>index.php/jurusan/add" class="w3-btn create-admin">Jurusan Baru</a>
			<table border="1" class="tabel-admin display" id="customers">
				<thead>
					<tr class="title-field">
						<td>ID :</td>
						<td>NIS :</td>
						<td>Nama :</td>
						<td>Kelas :</td>
						<td>Jurusan :</td>
						<td>Tingkatan :</td>
						<td>Email :</td>
						<td>No. Telp :</td>
						<td>Password :</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($content->result() as $key): ?>
					<tr>
						<td><?php echo $key->id ?></td>
						<td><?php echo $key->nis ?></td>
						<td><?php echo $key->nama ?></td>
						<td><?php echo $key->kelas ?></td>
						<td><?php echo $key->jurusan ?></td>
						<td><?php echo $key->tingkatan ?></td>
						<td><?php echo $key->email ?></td>
						<td><?php echo $key->notelp ?></td>
						<td><?php echo $key->password ?></td>
						<td>
							<a href="<?php echo base_url() ?>index.php/crud/update/<?php echo $key->id ?>" class=" w3-btn link-action-update action-button">Edit</a>
							<a href="<?php echo base_url() ?>index.php/crud/delete/<?php echo $key->id ?>" class=" w3-btn link-action-delete action-button">Hapus</a>
						</td>
					</tr>	
				<?php endforeach ?>	
				</tbody>
			</table>
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
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
        	$(document).ready(function() {
                $('table.display').DataTable();
            } );
        </script>

</body>
</html>
<?php } else{
    $this->load->view('login.php');
    echo "<script>alert('Maaf, anda tidak bisa kembali ke halaman sebelumnya, silahkan login terlebih dahulu');</script>";
}?>