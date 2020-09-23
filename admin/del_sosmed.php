<?php
include_once("koneksi.php");
$kd=$_GET['id'];
$qry=mysqli_query($koneksi, "DELETE FROM sosmedpost WHERE id='$kd'");
header('location:sosmed.php');
?>
