<?php
include_once("koneksi.php");
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$tanggalpost = date("Y-m-d");


			// simpan ke database
			mysqli_query($koneksi, "UPDATE foto SET catID='1', adminID='1', judul='$judul',tanggal='$tanggal', tanggal_post='$tanggalpost',  deskripsi='$deskripsi', publish='Y', viewed='0' WHERE id='$id'");
      header("location:fotokegiatan.php");
?>
