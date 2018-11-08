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
                                <div class="date fadeInUp" style=" width: 300px;color:#fff; background-repeat: no-repeat;margin-left: auto;margin-right: auto;font-size: 20px;"><?php
                                    $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
                                    $hr = $array_hr[date('N')];
                                    $tgl= date('j');
                                    $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
                                    $bln = $array_bln[date('n')];
                                    $thn = date('Y');
                                    echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
                                ?>
                                </div>
                                <h1 class="fadeInUp"><strong>GRAFIKA</strong> <span>/</span> Perpustakaan</h1>
                                <p class="zoomIn">"Ayo! ke perpustakaan SMKN 4 Malang"</p>
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
                    <h2>Tutorial Peminjaman Buku</h2>
                    <hr>
                    <p>Buku yang tersedia di SMKN 4 Malang bisa dipinjam secara Online maupun Offline</p>
                    <div class="col-md-12">
                        <h4 class="tutor-text">1.ONLINE</h4>
                        <img src="<?php echo base_url() ?>asset/img/thumbnails/on.png" alt="online" style="width:5%;">
                        <hr>
                        <p class="definition-tutor">Peminjaman secara online bisa dilakukan oleh seluruh siswa & guru SMKN 4 Malang selaku user. Tentunya lewat website GRAFIKAPERPUS ini. Setelah user login menggunakan NIS/NIP dan password yang sudah diberi Admin, maka hal selanjutnya adalah pemilihan buku yang diinginkan. Setelah buku yang diinginkan ada dan stok memenuhi, maka user bisa langsung mengambil buku yang sudah dipinjam lewat website di perpustakaan SMKN 4 Malang</p>
                        <img src="<?php echo base_url() ?>asset/img/icons/online.jpg" class="img-tutorial">
                        <div class="tutorial-text">
                            <p>1. Silahkan akses website grafikaperpus melalui pc atau smartphone anda</p>
                            <p>2. Buku sudah tersedia lengkap di website, jadi pilihlah buku sesuai dengan anda inginkan</p>
                            <p>3. Isi form peminjaman dengan benar sesuai data diri anda</p>
                            <p>4. Pergi ke perpustakaan SMKN 4 Malang untuk mengambil buku yang sudah dipinjam</p>
                            <p>5. Menulis data diri di buku pengunjung perpustakaan</p>
                            <p>6. Temui admin untuk validasi peminjaman</p>
                            <p>7. Selanjutnya, validasi Kartu Tanda Pelajar, Kartu Tanda Guru</p>
                            <p>8. Tunggu Librarian untuk mencetak nota peminjaman</p>
                            <p>9. Peminjaman sudah berhasil, silahkan mengambil buku sesuai yang anda pinjam tadi dan jangan lupa
                                  mengembalikan sesuai jatuh tempo yang ada di nota peminjaman</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="tutor-text">2.OFFLINE</h4>
                        <img src="<?php echo base_url() ?>asset/img/thumbnails/off.png" alt="online" style="width:6%;">
                        <hr>
                        <p class="definition-tutor">Peminjaman secara offline juga bisa dilakukan oleh seluruh siswa & guru SMKN 4 Malang. Siswa & guru SMKN 4 Malang langsung menuju ke perpustakaan SMKN 4 Malang, lalu memilih sendiri buku yang dinginkan. Setelah buku ada dan ingin dipinjam, silahkan langsung menuju ke lobby perpustakaan untuk proses peminjaman suatu buku yang akan diproses oleh librarian SMKN 4 Malang.</p>
                        <img src="<?php echo base_url() ?>asset/img/icons/offline.jpg" class="img-tutorial">
                        <div class="tutorial-text">
                            <p>1. Silahkan langsung menuju ke Perpustakaan SMKN 4 Malang</p>
                            <p>2. Temui Librarian dan tulis data diri anda di buku pengunjung perpustakaan</p>
                            <p>3. Cari buku sesuai yang anda inginkan di rak buku yang sudah tersedia</p>
                            <p>4. Jika sudah mendapatkan buku yang dicari, langsung menuju ke Librarian untuk memproses peminjaman buku anda</p>
                            <p>5. Pastikan anda membawa Kartu Tanda Pelajar, Kartu Tanda Guru sebagai syarat validasi anggota</p>
                            <p>6. Tunggu Librarian untuk mencetak nota peminjaman</p>
                            <p>7. Peminjaman sudah berhasil, silahkan mengambil buku sesuai yang anda pinjam tadi dan jangan lupa
                                  mengembalikan sesuai jatuh tempo yang ada di nota peminjaman</p>
                        </div>
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
