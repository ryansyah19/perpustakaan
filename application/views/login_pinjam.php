<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login - Perpustakaan Grafika</title>
    
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>asset/img/icons/grf.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>asset/img/icons/grf.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>asset/img/icons/grf.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>asset/img/icons/grf.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

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
<body class="login-page">
    <div class="login-box">
        <div class="logo zoomIn">
            <a href="javascript:void(0);"><b>Login</b></a>
			<img src="<?php echo base_url() ?>asset/img/icons/grf.png" class="img-login">
        </div>
        <div class="card-login zoomIn">
            <div class="body" id="body">
            <?php echo form_open('welcome/auth_pinjam'); ?>
                    <div class="msg">Sign In</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 btn-right">
                            <input class="btn btn-block bg-pink waves-effect" type="submit" name="login"/>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

  	<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
	<script type="text/javascript" src="js/bootstrap.js"></script> 
	<script type="text/javascript" src="js/SmoothScroll.js"></script> 
	<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.js"></script> 
	<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
	<script type="text/javascript" src="js/contact_me.js"></script> 
	<script type="text/javascript" src="js/main.js"></script>=
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
		
	var images = ["book.jpg", "book4.jpg", "perpus.jpg", "book2.jpg", "book3.jpg",];
	$(function () {
			var i = 0;
			$("#image").css("background-image", "url(img/thumbnails/" + images[i] + ")");
			setInterval(function () {
					i++;
					if (i == images.length) {
							i = 0;
					}
					$("#image").fadeOut("slow", function () {
							$(this).css("background-image", "url(img/thumbnails/" + images[i] + ")");
							$(this).fadeIn("slow");
					});
			}, 5000);
			
	});
	</script>
</body>
</html>

