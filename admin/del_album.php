<?php
include_once("koneksi.php");
$kd=$_GET['id'];
$qry=mysqli_query($koneksi, "DELETE FROM foto WHERE id='$kd'");
header('location:fotokegiatan.php');
?>
