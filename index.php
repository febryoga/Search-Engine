<!DOCTYPE html>
<?php
session_start();
// koneksi database
include_once("fungsi/koneksi.php");
$no = 1;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Pemerintah Kabupaten Administrasi Kepulauan Seribu</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Animate -->
    <link rel="stylesheet" href="animate.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>


                            <!-- Nav Start -->
                            <div class="classynav">
                              <div class="top-header-content d-flex align-items-center justify-content-between">
                                  <!-- Logo -->
                                  <div class="logo">
                                      <a href="index"><img src="img/core-img/logo1.png" alt=""></a>
                                  </div>
                              </div>
                                <ul>
                                    <li class="active"><a href="index">Home</a></li>
                                    <li><a href="#">Pemerintahan</a>
                                        <ul class="dropdown">
                                            <li><a href="page/profilwilayah">Profil Wilayah</a></li>
                                            <li><a href="page/daftarpejabat">Daftar Pejabat</a></li>
                                            <li><a href="page/agenda">Agenda</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page/pariwisata">Pariwisata</a> </li>

                                    <li><a href="#">Berita & Media </a>
                                      <ul class="dropdown">
                                          <li><a href="page/berita">Berita</a></li>
                                          <li><a href="page/fotokegiatan">Foto</a></li>
                                          <li><a href="page/video">Video</a></li>
                                      </ul></li>
                                    <li><a href="page/hukum">Hukum</a></li>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                 <div class="hero-add" >
                  <div id="carouselExampleControls" class="carousel slider custom-carousel" data-ride="carousel" >
                     <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                         <img class="d-block w-100" src="assets/images/pariwisata/keloorr.jpg" alt="First slide">
                         <div class="carousel-caption d-none d-md-block">
                            <h2 class="animated fadeInUp" style="animation-delay: 1s; color: #fff">Pulau Kelor</h2>
                            <h3 class="animated fadeInDown" style="animation-delay: 2s; color: #fff">Kepulauan Seribu</h3>
                        </div>
                       </div>

                       <div class="carousel-item">
                         <img class="d-block w-100" src="assets/images/pariwisata/bidadarii.jpg" alt="Second slide">
                         <div class="carousel-caption d-none d-md-block">
                            <h2 class="animated fadeInLeft" style="animation-delay: 1s; color: #fff">Pulau Bidadari</h2>
                            <h3 class="animated fadeInRight" style="animation-delay: 2s; color: #fff">Kepulauan Seribu</h3>
                        </div>
                       </div>

                       <div class="carousel-item">
                         <img class="d-block w-100" src="assets/images/pariwisata/sepa.jpg" alt="Third slide">
                         <div class="carousel-caption d-none d-md-block">
                            <h2 class="animated zoomInDown" style="animation-delay: 1s; color: #fff">Pulau Sepa</h2>
                            <h3 class="animated zoomInLeft" style="animation-delay: 2s; color: #fff">Kepulauan Seribu</h3>
                        </div>
                       </div>


                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
                   </div>
                  </div>
					<br>
					<!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">

					   <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Selamat Datang Di Situs Resmi</a></li>
                                <li><a href="#">Pemerintah Kabupaten Administrasi</a></li>
                                <li><a href="#">Kepulauan Seribu</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>Berita Pulau</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                <li><a href="#">Pulau Tidung.</a></li>
                                <li><a href="#">Pulau Harapan.</a></li>
                                <li><a href="#">Pulau Pramuka</a></li>
								<li><a href="#">Pulau Kelapa</a></li>
								<li><a href="#">Pulau Pari</a></li>
								<li><a href="#">Pulau Untung Jawa</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="assets/images/pejabat/bupati.jpeg" alt=""></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="col-sm-12 col-md-12">
                <!-- Start Main Area 1 -->
                <div class="row">

                    <!-- Start Headline News -->
                    <div class="headline col-sm-4 col-md-4" style="margin-left: -10px !important;">
                        <div class="section-heading" style="margin-bottom: 15px">
                            <h6>Headline News</h6>
                        </div>
                        <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE publish='Y' ORDER by id desc limit 2 "); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <div class="single-blog-post featured-post">
                            <div class="post-thumb">
                                <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" style="width:350px;height:250px;" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>&&judul=<?= $perproduk['judul'] ?>" class="post-title">
                                    <h5><?php echo $perproduk['judul'];?> </h5>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author" style="margin-bottom: -40px !important;"><a href="#">Kominfotik Kab. Adm. Kepulauan Seribu</a></p>
                                    <p class="post-excerp"><?php echo substr($perproduk['isi'],0, 450);?>..<a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" style="color:red">More</a></p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal'];?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>                   
                    </div>
                    <!-- End Headline News -->

                    <!-- Start Berita Terbaru -->
                    <div class="berita-terbaru col-sm-4 col-md-4" style="margin-bottom: 15px !important;">
                        <div class="section-heading" style="margin-bottom: 10px">
                            <h6>Berita Terkini</h6>
                        </div>
                        <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE publish='Y' ORDER BY id desc LIMIT 11 "); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb" >
                                <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" style="width:150px;height:80px;" alt=""></a>
                            </div>
                            <div class="post-meta">
                                <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-title">
                                    <h6><?php echo $perproduk ['judul'];?></h6>  
                                </a>
                                <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal'];?></span></a>
                            </div>
                        </div>
                        <?php } ?>                   
                    </div>
                    <!-- End Berita Terbaru -->

                    <!-- Start Berita Populer -->
                    <div class="berita-populer col-sm-4 col-md-4">
                        <div class="section-heading" style="margin-bottom: 15px">
                            <h6>Berita Terpopuler</h6>
                        </div>
                        <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE id='922'"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <div class="post-thumb">
                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" alt=""></a>
                        </div>
                        
                        <div class="post-data">                        
                        <br>
                        <div class="post-meta">
                            <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-title">
                                <h6><?php echo $perproduk ['judul'];?></h6>
                            </a>
                            <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal_post'];?></span></a>
                        </div>
                        <br>
                        </div>
                        <?php } ?>
                        <!--  -->
                        <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE id='921'"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <div class="post-thumb">
                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" alt=""></a>
                        </div>

                        <div class="post-data">
                            <br>
                            <div class="post-meta">
                                <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-title">
                                    <h6><?php echo $perproduk ['judul'];?></h6>
                                </a>
                                <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal_post'];?></span></a>
                            </div>
                            <br>
                        </div>
                        <?php } ?>
                        <!--  -->
                        <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE id='920'"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <div class="post-thumb">
                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" alt=""></a>
                        </div>
                        <div class="post-data">
                            <br>
                            <div class="post-meta">
                                <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-title">
                                    <h6><?php echo $perproduk ['judul'];?></h6>
                                </a>
                                <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal_post'];?></span></a>
                            </div>
                            <br>
                        </div>
                        <?php } ?>
                        <!--  -->
                        <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE id='919'"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <div class="post-thumb">
                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" alt=""></a>
                        </div>
                        <div class="post-data">
                        <br>
                            <div class="post-meta">
                                <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-title">
                                    <h6><?php echo $perproduk ['judul'];?></h6>
                                </a>
                                <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal_post'];?></span></a>
                            </div>
                            <br>
                        </div>
                        <?php } ?>
                        <!--  -->
                    </div>
                    <!-- End Berita Populer -->

                </div>
                <!-- End Main Area 1  -->
            </div>

            <div class="col-sm-12 col-md-12">
                <!-- Start Main Area 2 -->
                <div class="row">
                    <!-- Start Berita Lainnya -->
                    <div class="berita-kategori col-sm-8 col-md-8" style="margin-left: -10px !important;">
                        <div class="section-heading">
                            <h6>Berita Lainnya</h6>
                        </div>
                        <div class="row" style="margin-top: -60px !important;">
                            <div class="pemerintahan col-sm-6 col-md-6">                                
                                <?php $ambil= $koneksi->query("SELECT * FROM kategori WHERE kategori='Pemerintahan' order by id limit 1 "); ?>
                                    <?php while($perproduk = $ambil->fetch_assoc()){ 
                                        $id = $perproduk['id']?>
                                    <a href="page/kategoriberita.php?id=<?php echo $perproduk['id'];?>"><h6><?php echo $perproduk['kategori'];?></h6></a>
                                    <?php } ?>
                                    <hr>
                                    <div class="single-blog-post style-3">
                                    <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE catID =$id and publish='Y' order by id desc limit 1"); ?>
                                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" style="width:500px;height:250px;" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-catagory"><?php echo $perproduk['judul'];?></a>
                                            <a href="#" class="post-title">

                                            <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal'];?></span></a>
                                        </div>
                                        </div>
                                    </div>
                                <?php } ?>                                
                            </div>
                            <!--  -->
                            <div class="ekonomi col-sm-6 col-md-6">                                
                                <?php $ambil= $koneksi->query("SELECT * FROM kategori WHERE kategori='Perekonomian' order by id limit 1 "); ?>
                                    <?php while($perproduk = $ambil->fetch_assoc()){ 
                                        $id = $perproduk['id']?>
                                    <a href="page/kategoriberita.php?id=<?php echo $perproduk['id'];?>"><h6><?php echo $perproduk['kategori'];?></h6></a>
                                    <?php } ?>
                                    <hr>
                                    <div class="single-blog-post style-3">
                                    <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE catID =$id and publish='Y' order by id desc limit 1"); ?>
                                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" style="width:500px;height:250px;" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-catagory"><?php echo $perproduk['judul'];?></a>
                                            <a href="#" class="post-title">

                                            <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal'];?></span></a>
                                        </div>
                                        </div>
                                    </div>
                                <?php } ?>                                
                            </div>
                            <!--  -->
                            <div class="ekonomi col-sm-6 col-md-6">                                
                                <?php $ambil= $koneksi->query("SELECT * FROM kategori WHERE kategori='Pariwisata' order by id limit 1 "); ?>
                                    <?php while($perproduk = $ambil->fetch_assoc()){ 
                                        $id = $perproduk['id']?>
                                    <a href="page/kategoriberita.php?id=<?php echo $perproduk['id'];?>"><h6><?php echo $perproduk['kategori'];?></h6></a>
                                    <?php } ?>
                                    <hr>
                                    <div class="single-blog-post style-3">
                                    <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE catID =$id and publish='Y' order by id desc limit 1"); ?>
                                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" style="width:500px;height:250px;" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-catagory"><?php echo $perproduk['judul'];?></a>
                                            <a href="#" class="post-title">

                                            <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal'];?></span></a>
                                        </div>
                                        </div>
                                    </div>
                                <?php } ?>                                
                            </div>
                            <!--  -->
                            <div class="ekonomi col-sm-6 col-md-6">                                
                                <?php $ambil= $koneksi->query("SELECT * FROM kategori WHERE kategori='Lintas Pulau' order by id limit 1 "); ?>
                                    <?php while($perproduk = $ambil->fetch_assoc()){ 
                                        $id = $perproduk['id']?>
                                    <a href="page/kategoriberita.php?id=<?php echo $perproduk['id'];?>"><h6><?php echo $perproduk['kategori'];?></h6></a>
                                    <?php } ?>
                                    <hr>
                                    <div class="single-blog-post style-3">
                                    <?php $ambil= $koneksi->query("SELECT * FROM berita WHERE catID =$id and publish='Y' order by id desc limit 1"); ?>
                                        <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/images/news/<?php echo $perproduk['img'];?>" style="width:500px;height:250px;" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="page/single-post.php?id=<?php echo $perproduk['id'];?>" class="post-catagory"><?php echo $perproduk['judul'];?></a>
                                            <a href="#" class="post-title">

                                            <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal'];?></span></a>
                                        </div>
                                        </div>
                                    </div>
                                <?php } ?>                                
                            </div>

                        </div>
                        <!-- End Berita Lainnya -->
                    </div>

                     <!-- Start Notulen -->
                     <div class="notulen col-sm-4 col-md-4">
                        <div class="section-heading">
                            <h6>Info</h6>
                        </div>
                        <div class="popular-news-widget mb-30" style="margin-top: -60px !important;">
                            <h3>Agenda Terkini</h3>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                            <?php $ambil= $koneksi->query("SELECT * FROM agenda ORDER by id desc limit 5 "); ?>
                                <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                                <a href="#">
                                    <h6><span><?php echo $no++ ?></span> <?php echo $perproduk['acara'];?></h6>
                                </a>
                                <p>Nama Pejabat : <?php echo $perproduk['pelaksana'];?></p>
                                <p>Tanggal      : <?php echo $perproduk['tanggal'];?></p>

                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <!-- End Notulen -->

                    <!-- End Main Area 2 -->
                </div>
                
            </div>
        </div>        
    </div>
    <br>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay mb-10" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Video Post -->
                <?php $ambil= $koneksi->query("SELECT * FROM video order by id desc limit 3 "); ?>
                <?php while($perproduk = $ambil->fetch_assoc()){ ?>                     
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="assets/images/video/<?php echo $perproduk['img'];?>" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="<?php echo $perproduk['youtubeID'];?>" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
  </div>

    <!-- ##### Video Post Area End ##### -->


    <!-- ##### Footer Add Area Start ##### -->
    <section class="slider-bawah" id="slider-bawah" style="background-image: url(assets/images/pariwisata/cobaaa.jpg); height:180px; background-position-y:-500px">
        <div id="carouselExampleControls" class="carousel slide" height="180px" data-ride="carousel">
            <div class="carousel-inner  container">
                <!-- fisrt slide -->
                <div class="carousel-item active slide-bawah">
                    <div class="row">
                        <div class="col-md-6 align-selfy-center mt-2">
                            <img class="d-block w-100" style="height:70px !important; width:100% !important;" src="assets/images/partners/bi.png" alt="First slide">
                        </div>
                        <div class="col-md-6 mt-2">
                            <img class="d-block w-100" style="height:70px !important ; width:100% !important;" src="assets/images/partners/jakbar.png" alt="First slide">
                        </div>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item slide-bawah">
                    <div class="row">
                        <div class="col-md-6 align-selfy-center mt-2">
                            <img class="d-block w-100" style="height:70px !important; width:100% !important;" src="assets/images/partners/jakpus.png" alt="Second slide">
                        </div>
                        <div class="col-md-6 mt-2">
                            <img class="d-block w-100" style="height:70px !important ; width:100% !important;" src="assets/images/partners/jaktim.png" alt="Second slide">
                        </div>
                    </div>
                </div>

                <!-- Third Slide -->
                <div class="carousel-item slide-bawah">
                    <div class="row">
                        <div class="col-md-6 align-selfy-center mt-2">
                            <img class="d-block w-100" style="height:70px !important; width:100% !important;" src="assets/images/partners/jakut.png" alt="Third slide">
                        </div>
                        <div class="col-md-6 mt-2">
                            <img class="d-block w-100" style="height:70px !important ; width:100% !important;" src="assets/images/partners/jaksel.png" alt="Third slide">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ##### Footer Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area-bawah" style="background-color: black">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo mb-3">
                                <a href="index.html"><img src="img/core-img/logo1.png" alt=""></a>
                            </div>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="mailto:redaksiberitapulau1000@gmail.com">redaksiberitapulau1000@gmail.com</a></li>
                                <li><a href="tel:+021-6408452">+021-6408452</a></li>
                                <li><a href="http://pulauseribu.jakarta.go.id">www.pulauseribu.jakarta.go.id</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    </div>
                </div>
            </div>


        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://www.instagram.com/febryogasaputra/" target="_blank">Diskominfomas Kep. Seribu</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
<!-- Thanks To colorib for this design >
