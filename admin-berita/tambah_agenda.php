<?php
include_once("koneksi.php");
$pelaksana = $_POST['pelaksana'];
$acara = $_POST['acara'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$jam = $_POST['jam'];




			mysqli_query($koneksi, "INSERT INTO agenda SET tanggal='$tanggal',jam='$jam',acara='$acara',tempat='$tempat', pelaksana='$pelaksana', ket='', aktif='Y', viewed='0'");

			header("location:agenda.php");
?>
