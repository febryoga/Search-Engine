<?php
include_once("koneksi.php");
$kd=$_GET['id'];
$qry=mysqli_query($koneksi, "DELETE FROM berita WHERE id='$kd'");
header('location:berita.php');
?>
