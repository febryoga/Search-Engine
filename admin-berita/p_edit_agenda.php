<?php
include_once("koneksi.php");
$id = $_POST['id'];
$pelaksana = $_POST['pelaksana'];
$acara = $_POST['acara'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$jam = $_POST['jam'];


			// simpan ke database
			mysqli_query($koneksi, "UPDATE agenda SET tanggal='$tanggal',jam='$jam',acara='$acara',tempat='$tempat', pelaksana='$pelaksana', ket='', aktif='Y', viewed='0' WHERE id='$id '");
      header("location:agenda.php");
?>
