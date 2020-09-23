<?php
include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$youtubeID = $_POST['youtubeID'];
$tanggalpost = date("Y-m-d");
$jam = date("H:i:s");



			mysqli_query($koneksi, "UPDATE video set catID='1', adminID='1', judul='$judul',  tanggal='$tanggal', tanggal_post='$tanggalpost', youtubeID='$youtubeID',deskripsi='$deskripsi', publish='Y', viewed='100' where id='$id '");
			//memindahkan gambar ke tempat yang kita inginkan

			header("location:video.php");

?>
