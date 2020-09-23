<?php
include_once("koneksi.php");
$kd=mysqli_real_escape_string($koneksi, $_GET['id']);
$qry=mysqli_query($koneksi, "DELETE FROM fotolist WHERE id='$kd'");
header('location:fotokegiatan.php');
?>
