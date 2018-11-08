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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<header id="header">
			<div class="intro-admin" id="image">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="intro-text">
								<h1 class="label-admin">Halaman Admin</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	<div>
		<!-- Portfolio Section -->
		<div id="tutorial">
			<div class="container">
				<div class="section-title text-center center">
					<h2>Statistik Denda</h2>
					<hr>
					<?php
						foreach($data as $data){
						$merk[] = $data->tgl_pinjam;
						$stok[] = (float) $data->denda;
						}
					?>
						<h4 class="statistik-denda">Denda</h4>
						<canvas id="canvas" width="1000" height="280"></canvas>
						<h4 class="statistik-pinjam">Tanggal Pinjam</h4>
						<hr style="width:100%;background-color:#21f9b3;">

					<h2 style="margin-top: 50px;">Statistik Buku</h2>
						<hr>
						<?php
						foreach($data2 as $data2){
						$judul[] = $data2->judul;
						$jumlah[] =$data2->jumlah;
						}
						?>
						<h4 class="statistik-jumlah">Jumlah <br>Peminjaman</h4>
						<canvas id="canvas2" width="1000" height="280"></canvas>
						<h4 class="statistik-pinjam">Judul Buku</h4>
				</div>

				<div class="row">
					<div class="portfolio-items">
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
					<p>&copy; 2018 GrafikaPerpus oleh <a href="https://www.instagram.com/ryan_syah19/">M Ryan Firmansyah</a> .RPL </p>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.1.11.1.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/SmoothScroll.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/nivo-lightbox.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.isotope.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jqBootstrapValidation.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/contact_me.js"></script> 
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>asset/chartjs/Chart.min.js?>"></script>

<script>
function myNavbar() {
document.getElementById("myDropdown").classList.toggle("show");
}

    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
        }
    }
    </script>

<script>


        var lineChartData = {
            labels : <?php echo json_encode($merk);?>,
            datasets : [

                {
                    fillColor: "#e60e45",
                    strokeColor: "#94e610",
                    pointColor: "#94e610",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "yellow",
                    data : <?php echo json_encode($stok);?>
                }

            ],
            options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
        }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

</script>
<script>

        var lineChartData = {
            labels : <?php echo json_encode($judul);?>,
            datasets : [

                {
                    fillColor: "#87d4bb",
                    strokeColor: "#e60e45",
                    pointColor: "#e60e45",
                    pointStrokeColor: "#e60e45",
                    pointHighlightFill: "#e60e45",
                    pointHighlightStroke: "#e60e45",
                    data : <?php echo json_encode($jumlah);?>
                }

            ],
            options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
        }

    var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Line(lineChartData);

</script>

</body>
</html>
<?php } else{
    $this->load->view('login.php');
    echo "<script>alert('Maaf, anda tidak bisa kembali ke halaman sebelumnya, silahkan login terlebih dahulu');</script>";
}?>