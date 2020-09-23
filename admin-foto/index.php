<?php
session_start();
 include_once("koneksi.php");
$username = $_SESSION['username'];
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Pemerintah Kabupaten Administrasi Kepulauan Seribu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
	<link rel="icon" href="../img/core-img/favicon.ico">
</head>
<body>
<div id="head">
	<div class="hdkiri">
	<a href="index.php">Kominfotik <b> Kepulauan </b> Seribu</a>
	</div>
	<div class="hdkanan">
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
		include("page.php");
		?>
		</div>
	</div>
	<div id="contentkanan">
		<div class="navkanan">
			<?php include("nav.php") ?>
		</div>
	</div>
</div>
<div id="footeradmin">
	<?php include("footer.php") ?>
</div>


</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>