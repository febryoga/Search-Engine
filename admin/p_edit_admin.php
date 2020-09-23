<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password= $_POST['password'];



			mysqli_query($koneksi, "UPDATE user set nama='$nama', username='$username' , password='$password' where id='$id '");
			//memindahkan gambar ke tempat yang kita inginkan

			header("location:admin.php");

?>
