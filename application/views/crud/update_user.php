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
                        <li><a href="<?php echo site_url('welcome/beranda') ?>">Buku</a></li>
                        <li><a href="<?php echo site_url('welcome/daftar_pinjam') ?>">Peminjaman</a></li>
                        <li><a href="<?php echo site_url('welcome/contact_user') ?>">Pesan</a></li>
                        <li><a href="<?php echo site_url('crud/update_user') ?>">Profil</a></li>
                        <li><a href="<?php echo site_url('welcome/logout') ?>">Logout</a></li>
                        <?php
                        $nama=$this->session->userdata('ses_nama');
                        echo "<p class='name-title'>".$nama."</p>";
                        ?>
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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="profile-admin">
						<h1>Profil Anda</h1>
						<table border="1" class="tabel-admin" id="customers">
				 <?php 
                    $id_anggota=$this->session->userdata('ses_id');
                    $nama=$this->session->userdata('ses_nama');
                    $level=$this->session->userdata('ses_level');
                    echo "<p class='user-pinjam-3'>".$level."</p>";
                    echo "<tr class='title-field'>";
					echo "<td>NIS :</td>";
					echo "<td>Nama :</td>";
					echo "<td>Mapel/Kelas :</td>";
					echo "<td>Jurusan :</td>";
					echo "<td>Tingkatan :</td>";
					echo "<td>Email :</td>";
					echo "<td>No. Telp :</td>";
					echo "<td>Password :</td>";
					echo "</tr>";
					$key = $this->db->query("SELECT * FROM siswa WHERE nis='$id_anggota'");
                    foreach ($key->result() as $data) {
                    echo "<tr>";
                    echo "<td>$data->nis</td>";
                    echo "<td>$data->nama</td>";
                    echo "<td>$data->kelas</td>";
                    echo "<td>$data->jurusan</td>";
                    echo "<td>$data->tingkatan</td>";
                    echo "<td>$data->email</td>";
                    echo "<td>$data->notelp</td>";
                    echo "<td>$data->password</td>";
                    echo "</tr>";
                }
                    $key2 = $this->db->query("SELECT * FROM guru WHERE nip='$id_anggota'");
                    foreach ($key2->result() as $data2) {
                    echo "<tr>";
                    echo "<td>$data2->nip</td>";
                    echo "<td>$data2->nama</td>";
                    echo "<td>$data2->mapel</td>";
                    echo "<td>-</td>";
                    echo "<td>-</td>";
                    echo "<td>$data2->email</td>";
                    echo "<td>$data2->notelp</td>";
                    echo "<td>$data2->password</td>";
                    echo "</tr>";
                }

           ?>
			</table>
			<p style="color:#d02b54;font-weight: 900;">Jika profil anda salah, silahkan hubungi admin lewat fitur pesan</p>
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
		<script type="text/javascript">
			var images = ["buku.jpeg", "book4.jpg", "perpus.jpg", "book2.jpg",];
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
<?php } else{
    $this->load->view('login.php');
    echo "<script>alert('Maaf, anda tidak bisa kembali ke halaman sebelumnya, silahkan login terlebih dahulu');</script>";
}?>