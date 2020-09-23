<!DOCTYPE html>
<?php
session_start();
// koneksi database
include_once("fungsi/koneksi.php");
$keyword = mysqli_real_escape_string($koneksi,$_GET["search"]);
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
                            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
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
                                      <a href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                                  </div>
                              </div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Pemerintahan</a>
                                        <ul class="dropdown">
                                            <li><a href="page/profilwilayah.php">Profil Wilayah</a></li>
                                            <li><a href="page/daftarpejabat.php">Daftar Pejabat</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="page/pariwisata.php">Pariwisata</a> </li>

                                    <li class="active"><a href="#">Berita & Media </a>
                                      <ul class="dropdown">
                                        <li><a href="page/berita.php">Berita</a></li>
                                        <li><a href="page/fotokegiatan.php">Foto</a></li>
                                        <li><a href="page/video.php">Video</a></li>
                                      </ul></li>
                                    <li><a href="page/hukum.php">Hukum</a></li>
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
                                    <form action="pencarianberita.php" method="get">
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
          <div class="row">
              <!-- Single Video Post -->
              <div class="col-md-12">
                  <?php
                     $semuadata=array();
                     $ambil = $koneksi->query("SELECT * FROM video WHERE judul
                             LIKE '%$keyword%' ");
                         while ($tampung = $ambil->fetch_assoc())
                             {
                                 $semuadata[]=$tampung;
                             }
                 ?>
                 <?php if(empty($semuadata)): ?>
                     <br>
                 <div class="alert alert-danger col-md-9 col-md-offset-2">Pulau <strong><?php $keyword ?></strong>Tidak Ditemukan</div>
                 <?php endif ?>
                    <div class="single-video-post">
                      <div class="row">
                        <?php foreach ($semuadata as $key => $value): ?>
                         <div class="col-md-4 mb-4">
                           <img src="assets/images/video/<?php echo $value['img']?>" alt="" class="img-fluid" style="height:300px; width:400px !important">
                           <!-- Video Button -->
                           <div class="videobtn">
                               <a href="<?php echo $value['youtubeID'];?>" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                           </div>

                         </div>
                           <?php endforeach ?>
                      </div>



                </div>


             </div>


       </div>
     </div>
    	</section>

    <!-- ##### Popular News Area End ##### -->




    <!-- ##### Footer Add Area Start ##### -->

    <section class="slider-bawah" id="slider-bawah" style="background-image: url(assets/images/pariwisata/cobaaa.jpg); height:170px; background-position-y:-500px">
      <div class="slider container" id="slider" style="padding:10px">
        <div class="carousel slider" id="carouselExampleControls" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="row">
              <div class="item active col mt-5">
                  <a href="http://www.beritajakarta.id/"><img class="mb-2" style="height:70px;" src="assets/images/partners/bi.png" alt=""></a>
              </div>
              <div class="item active col mt-5">
                  <a href="http://barat.jakarta.go.id/"><img class="mb-2" style="height:70px;" src="assets/images/partners/jakbar.png" alt=""></a>
              </div>
              <div class="item active col mt-5">
                  <a href="http://pusat.jakarta.go.id/"><img class="mb-2"  style="height:70px;" src="assets/images/partners/jakpus.png" alt=""></a>
              </div>
              <div class="item active col mt-5">
                  <a href="http://timur.jakarta.go.id/"><img class="mb-2"  style="height:70px;" src="assets/images/partners/jaktim.png" alt=""></a>
              </div>
              <div class="item active col mt-5">
                  <a href="http://utara.jakarta.go.id/"><img class="mb-2"  style="height:70px;" src="assets/images/partners/jakut.png" alt=""></a>
              </div>
              <div class="item active col mt-5">
                <a href="http://selatan.jakarta.go.id/"><img class="mb-2"  style="height:70px;" src="assets/images/partners/jaksel.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
>
    <!-- ##### Footer Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area-bawah" style="background-color: black; margin-top: -21px">

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
