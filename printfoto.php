<!DOCTYPE html>
<?php
session_start();
// koneksi database
include_once("koneksi.php");
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
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
  <div class="hero-area">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-lg-8">


              <!-- Hero Add -->
              <div class="col-12 col-lg-4">
                  <div class="hero-add">
                    <center>  <a href="#"><img src="img/core-img/logo1.png" style="width"alt=""></a></center>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

    <!-- ##### Header Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <section class="site-section">
          <!-- <div class="container">
<div class="popular-news-area section-padding-80-50">
  <div class="col col-sm-12">


                <div class="row">
                  <div class="col col-sm-3">

                <div class="media d-block room mb-0">

</div>
                  </div>

                </div>

</div>
</div>
       </div> -->
       <div class="container">
         <div class="row">
           <div class="col col-sm-12">
             <?php $ambil= $koneksi->query("SELECT * FROM foto WHERE id='$id' "); ?>
             <?php while($perproduk = $ambil->fetch_assoc()){ ?>
               <a href="#" class="post-title">
                   <h6><?php echo $perproduk['judul'];?></h6>
                   <a href="#" class="fa fa-calendar"><span> <?php echo $perproduk['tanggal_post'];?></span></a>
                   <a href="#" onclick="window.open('printfoto.php?id=<?=$id?>', 'cetak', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=900, height=600')"> | <i class="fa fa-print "></i>  CETAK</a>
               </a>
             <?php } ?>
           </div>
         </div>
       </div>

       <div class="container mt-30">
         <div class="row">

           <?php $ambil= $koneksi->query("SELECT * FROM fotolist WHERE fotoID='$id'  "); ?>
           <?php while($perproduk = $ambil->fetch_assoc()){ ?>

           <div class="col col-sm-4">
             <div class="album">
                 <figure>
                   <img src="assets/images/photos/<?php echo $perproduk['img'];?>" alt="Generic placeholder image" class="img-fluid">
                 </figure>
                 <div class="media-body">
                   <h3 class="mt-0"><a href="#"><?php echo $perproduk['caption'];?></a></h3>
                 </div>
               </div>
             </div>

             <?php } ?>

           </div>
         </div>

    	</section>

    <!-- ##### Popular News Area End ##### -->




</body>

</html>
