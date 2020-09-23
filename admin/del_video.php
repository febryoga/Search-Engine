<?php
include_once("koneksi.php");
$kd=$_GET['id'];
$qry=mysqli_query($koneksi, "DELETE FROM video WHERE id='$kd'");
header('location:video.php');
?>
