<?php
include_once("koneksi.php");
$kd=$_GET['id'];
$qry=mysqli_query($koneksi, "DELETE FROM agenda WHERE id='$kd'");
header('location:agenda.php');
?>
