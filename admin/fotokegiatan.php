<?php
session_start();
include_once("koneksi.php");
$qrypakan = mysqli_query($koneksi, "SELECT * from foto");
@$act = $_GET['act'];
if($act=="tambah"){
	include("tambah_album.php");
}
else if ($act=='tambah') {
	include("tambah_foto.php");
}
else if($act=="edit")
{
	include("edit_album.php");
}
else if($act=="hapus")
{
	$kd = $_GET['id'];
	mysqli_query($koneksi, "DELETE from foto where id='$kd'");
	header("location:fotokegiatan.php?page=pakan");
}


$username = $_SESSION['username'];
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Pemerintahan Kabupaten Administrasi Kepulauan Seribu</title>
	<link rel="icon" href="../img/core-img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
</head>
<body>
<div id="head">
	<div class="hdkiri">
	<a href="index.php">Kominfotik <b> Kepulauan </b> Seribu</a>
	</div>
</div>
<div id="menu">
	<div class="menukiri">
		<b style="padding:20px;line-height:70px;font-size:20px;color:#fff;">Pemerintah Kabupaten Administrasi Kepulauan Seribu</b>
	</div>
	<div class="menukanan">
	<ul>
		<li><i style="color:#fff;">Selamat Datang </i>, <a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["username"] ?> Admin </a></li>
	</ul>
	</div>
</div>
<div id="content">
	<div id="contentkiri">
		<div class="welcome">
		<?php
		include("set_album.php");
		?>
		</div>
	</div>
	<div id="contentkanan">
		<div class="navkanan">
			<div class="hdnavadmin">
Navigasi
</div>
<ul class="navadmin">
	<li><a href="index.php?page=home"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
	<li><a href="berita.php"><span class="glyphicon glyphicon-list"></span> Berita</a></li>
	<li><a href="video.php"><span class="glyphicon glyphicon-film"></span> Video</a></li>
	<li><a href="agenda.php"><span class="glyphicon glyphicon-list-alt"></span> Agenda</a></li>
	<li><a href="fotokegiatan.php"><span class="glyphicon glyphicon-camera"></span> Foto Kegiatan</a></li>
	<li><a href="keluar.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
</ul>

		</div>
	</div>
</div>
<div id="footeradmin">
	<?php include("footer.php") ?>
</div>
</body>
</html>
