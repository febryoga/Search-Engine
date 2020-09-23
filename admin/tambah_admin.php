<?php
include_once("koneksi.php");
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];


			// simpan ke database
			mysqli_query($koneksi, "INSERT into user set nama='$nama',username='$username',password='$password',level='admin'");
			//memindahkan gambar ke tempat yang kita inginkan
header("location:admin.php");

?>
