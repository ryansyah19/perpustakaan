<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Error - Perpustakaan Grafika</title>
    
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>asset/img/icons/grf.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>asset/img/icons/grf.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>asset/img/icons/grf.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>asset/img/icons/grf.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/fonts/font-awesome/css/font-awesome.css">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">
</head>
<body>
	<div class="error-page-2">
    	<h1 class="title-error">Maaf ! Silahkan Login terlebih dahulu</h1>
        <?php
                  if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                    foreach($gambar as $data){//Lakukan looping pada variabel gambar dari controller
                      echo "<div class='hover-bg'> <a class='must-login w3-btn' name='validation-booking' href='".site_url('gambar/login_pinjam/'.$data->id_buku)."'>LOGIN Sekarang</a></div>";
                    }
                  }
                  else{ // Jika data tidak ada
                    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                  } 
                  ?>
		<img src="<?php echo base_url() ?>asset/img/thumbnails/oops.jpg" alt="Error" class="img-responsive">
                
	</div>
</body>
</html>
