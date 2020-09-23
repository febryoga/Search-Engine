<?php 
if(!isset($_GET['rute'])){
	include 'koleksi.php';
}else{
	switch ($_GET['rute']) {
		
		case 'koleksi':
			include 'koleksi.php';
			break;
		case 'hitung':
			include 'hitung.php';
			break;
		case 'index';
			include 'hasilvektor.php';
		break;
		case 'lihathasilvektor';
		include 'vektor.php';
	break;
	
		
	
		
	}
}
?>