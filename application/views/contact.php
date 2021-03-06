<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
                        <li><a href="<?php echo site_url('welcome/about') ?>">Tentang</a></li>
                        <li><a href="<?php echo site_url('welcome/index') ?>">Buku</a></li>
                        <li><a href="<?php echo site_url('welcome/testimoni') ?>">Testimoni</a></li>
                        <li><a href="<?php echo site_url('welcome/contact') ?>">Pesan</a></li>
                        <li><a href="<?php echo site_url('welcome/login') ?>">Login</a></li>
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
        
        <!-- Contact Section -->
        <div id="contact">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Pesan</h2>
                    <hr>
                    <p>Silahkan Hubungi Admin melalui fitur ini jika ada sesuatu hal yang perlu ditanyakan</p>
                </div>
                <div class="col-md-4">
                    <h3>Info Kontak </h3>
                    <div class="contact-item"> <span>Alamat</span>
                        <p>Jln.Tanimbar No.22 ,<br>
                            kasin, klojen, Kota Malang 65117</p>
                    </div>
                    <div class="contact-item"> <span>Email</span>
                        <p>mryanfirmansyah88@gmail.com</p>
                    </div>
                    <div class="contact-item"> <span>No. Telepon</span>
                        <p> +62 8123 456 1234</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3>Silahkan login terlebih dahulu untuk menulis pesan</h3>
                    <form name="sentMessage" id="contactForm" action="<?php echo base_url(); ?>index.php/welcome/action_add" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="username" class="form-control" required="required" name="username" disabled="disabled" placeholder="Anda harus Login terlebih dahulu">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" disabled="disabled" placeholder="Anda harus Login terlebih dahulu" name="email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" id="message" class="form-control" rows="4" disabled="disabled" placeholder="Anda harus Login terlebih dahulu"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-custom btn-lg" disabled="disabled" >Kirim Pesan</button>
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
