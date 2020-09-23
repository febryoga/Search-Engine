<?php
include_once("koneksi.php");
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$tanggalpost = date("Y-m-d");






			// simpan ke database
			mysqli_query($koneksi, "INSERT INTO foto  SET catID='1', adminID='1', judul='$judul',tanggal='$tanggal', tanggal_post='$tanggalpost',  deskripsi='$deskripsi', publish='Y', viewed='0'");
			//memindahkan thumbnail ke tempat yang kita inginkan
		header("location:fotokegiatan.php");

?>
