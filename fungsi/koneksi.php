<?php
global $mysqli;

$koneksi = mysqli_connect("localhost","root","","v3jakgoid");

// Check connection

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>
