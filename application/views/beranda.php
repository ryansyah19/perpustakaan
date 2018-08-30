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
                        <li><a href="<?php echo site_url('welcome/about_user') ?>">About</a></li>
                        <li><a href="<?php echo site_url('welcome/beranda') ?>">Book</a></li>
                        <li><a href="<?php echo site_url('welcome/testimoni_user') ?>">Testimonial</a></li>
                        <li><a href="<?php echo site_url('welcome/contact_user') ?>">Contact Us</a></li>
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
                            <!-- Search Fitur -->
                            <?php $atribut = array('class'=>'search-top','id'=>'puser') ; ?>
							<?php echo form_open('page/cari',$atribut); ?>
								<div class="demo-1 search">
					                    <span class="icon"><i class="fa fa-search"></i></span>
					                    <input type="text" name="yangdicari" class="search-item" placeholder="Cari sesuatu yang anda inginkan" />
					            </div>
					            <select name="cariberdasarkan" class="search-item">
									<option value="">Cari Berdasarkan</option>
									<option value="deskripsi">Judul</option>
									<option value="kategori">Kategori</option>
								</select>
								<input type="submit" value="cari" class="w3-btn create-admin">

							<?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <div>
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

