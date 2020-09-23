<!DOCTYPE html>
<?php
session_start();
// koneksi database
include_once("../fungsi/koneksi.php");

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
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">

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
                                <a href="../index.php"><img src="../img/core-img/logo1.png" alt=""></a>
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
                            <a href="../index.php"><img src="../img/core-img/logo.png" alt=""></a>
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
                                      <a href="../index.php"><img src="img/core-img/logo1.png" alt=""></a>
                                  </div>
                              </div>
                                <ul>
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="#">Pemerintahan</a>
                                        <ul class="dropdown">
                                            <li><a href="profilwilayah.php">Profil Wilayah</a></li>
                                            <li><a href="daftarpejabat.php">Daftar Pejabat</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="pariwisata.php">Pariwisata</a> </li>

                                    <li class="active"><a href="#">Berita & Media </a>
                                      <ul class="dropdown">
                                        <li><a href="berita.php">Berita</a></li>
                                        <li><a href="fotokegiatan.php">Foto</a></li>
                                        <li><a href="video.php">Video</a></li>
                                      </ul></li>
                                    <li><a href="hukum.php">Hukum</a></li>
                                    <li></li>
                                    <li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                  </li>

                                </ul>
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="../pencarianvideo.php" method="get">
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
<br><br><br><br>
    <!-- ##### Popular News Area Start ##### -->
    <section class="site-section">
      <div class="container">
          <div class="row ">
              <!-- Single Video Post -->
              <?php $ambil= $koneksi->query("SELECT * FROM video ORDER by id desc limit 6"); ?>
              <?php while($perproduk = $ambil->fetch_assoc()){ ?>
              <div class="col-12 col-sm-6 col-md-4">

                  <div class="single-video-post">


                      <img src="../assets/images/video/<?php echo $perproduk['img'];?>" alt="">
                      <!-- Video Button -->
                      <div class="videobtn">
                          <a href="<?php echo $perproduk['youtubeID'];?>" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                      </div>

                  </div>
              </div>

  <?php } ?>
          </div>
      </div>
    	</section>

    <!-- ##### Popular News Area End ##### -->


    <!-- ##### Footer Add Area Start ##### -->
    <section class="slider-bawah" id="slider-bawah" style="background-image: url(../assets/images/pariwisata/cobaaa.jpg); height:180px; background-position-y:-500px">
        <div id="carouselExampleControls" class="carousel slide" height="180px" data-ride="carousel">
            <div class="carousel-inner  container">
                <!-- fisrt slide -->
                <div class="carousel-item active slide-bawah">
                    <div class="row">
                        <div class="col-md-6 align-selfy-center mt-2">
                            <img class="d-block w-100" style="height:70px !important; width:100% !important;" src="../assets/images/partners/bi.png" alt="First slide">
                        </div>
                        <div class="col-md-6 mt-2">
                            <img class="d-block w-100" style="height:70px !important ; width:100% !important;" src="../assets/images/partners/jakbar.png" alt="First slide">
                        </div>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item slide-bawah">
                    <div class="row">
                        <div class="col-md-6 align-selfy-center mt-2">
                            <img class="d-block w-100" style="height:70px !important; width:100% !important;" src="../assets/images/partners/jakpus.png" alt="Second slide">
                        </div>
                        <div class="col-md-6 mt-2">
                            <img class="d-block w-100" style="height:70px !important ; width:100% !important;" src="../assets/images/partners/jaktim.png" alt="Second slide">
                        </div>
                    </div>
                </div>

                <!-- Third Slide -->
                <div class="carousel-item slide-bawah">
                    <div class="row">
                        <div class="col-md-6 align-selfy-center mt-2">
                            <img class="d-block w-100" style="height:70px !important; width:100% !important;" src="../assets/images/partners/jakut.png" alt="Third slide">
                        </div>
                        <div class="col-md-6 mt-2">
                            <img class="d-block w-100" style="height:70px !important ; width:100% !important;" src="../assets/images/partners/jaksel.png" alt="Third slide">
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
                                    <a href="../index.html"><img src="../img/core-img/logo1.png" alt=""></a>
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
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>

</html>
