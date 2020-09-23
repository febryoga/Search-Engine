<?php
include_once("koneksi.php");
$kd=$_GET['id'];
$qry=mysqli_query($koneksi, "DELETE FROM user WHERE id='$kd'");
header('location:admin.php');
?>
