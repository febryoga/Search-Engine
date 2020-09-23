<?php
include_once("koneksi.php");
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$youtubeID = $_POST['youtubeID'];
$tanggalpost = date("Y-m-d");
$jam = date("H:i:s");
$kategori = $_POST['kategori'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000; // Ukuran maksimal file yang akan diupload (dalam byte)


if($_FILES['img']['name']){
	// if no errors...
	if(!$_FILES['img']['error']){

		// now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['img']['tmp_name']); //rename file menjadi huruf kecil
		if($_FILES['img']['size'] > $max_size) //file tidak boleh lebih besar dari ukuran maksimal
		{
			$valid_file	= false;
			$message	= 'Maaf, file terlalu besar. Max: 1MB';
		}



		// Mengatur format file yang boleh diupload
		$image_path = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION); //ambil extensi file
		$extension = strtolower($image_path); //rename extensi file menjadi huruf kecil

		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" ) {
			$valid_file = false;
			$message	= "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG & GIF. #".$extension;
		}



		// jika file lolos filter
		if($valid_file == true)
		{
			// mengganti nama img
			$rename_nama_file	= date('YmdHis');
			$nama_file_baru		= $rename_nama_file.'.'.$extension;

			$result = mysqli_query($koneksi , "SELECT id FROM kategori WHERE kategori = '$kategori' ");
			$data = mysqli_fetch_array($result);
			$id_kategori= $data['id'];



			mysqli_query($koneksi, "INSERT INTO video SET catID='$id_kategori', adminID='1', judul='$judul',  tanggal='$tanggal', tanggal_post='$tanggalpost', youtubeID='$youtubeID',deskripsi='$deskripsi', publish='Y', viewed='100', img='$nama_file_baru'");
			//memindahkan img ke tempat yang kita inginkan
      move_uploaded_file($_FILES['img']['tmp_name'], '../assets/images/video/'.$nama_file_baru);
			header("location:video.php");
		}
		}
		//if there is an error...
		else
		{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['img']['error'];
		}
		}
?>
