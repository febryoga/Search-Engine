<!DOCTYPE html>
<?php
session_start();
// koneksi database
include_once("koneksi.php");
 $id = $_GET['id'];
 $ambil = $koneksi->query("SELECT * FROM video WHERE id='$id'");
 $detail = $ambil->fetch_assoc();
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
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">


                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                      <center>  <a href="#"><img src="../img/core-img/logo1.png" style="width"alt=""></a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
		<br>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">

                            <div class="post-thumb">
                                <a href="#"><img src="../assets/images/video/<?php echo $detail['img'];?>"  style="width:1000px;height:300px;" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6><?php echo $detail['judul'];?></h6>
                                    <a href="#" class="fa fa-calendar"><span> <?php echo $detail['tanggal_post'];?></span></a>
                              </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">Kominfotik Kab. Adm. Kepulauan Seribu</a></p>
                                    <p><?php echo $detail['deskripsi'];?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- ##### Footer Add Area End ##### -->


            <!-- ##### Footer Area Start ##### -->


\
    </body>

    </html>
