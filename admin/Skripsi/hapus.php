<?php 
include 'koneksi.php';
$kode=$_GET['kode'];
if(isset($_GET['kode'])){
				$last = mysqli_query($konek,"ALTER TABLE berita AUTO_INCREMENT = 1");
	$del=mysqli_query($konek,"DELETE FROM  berita WHERE Id='$kode'");
		if($del){
			header('Location:index.php');
			
		}else{
			echo 'Gagal';
		}
}
?>