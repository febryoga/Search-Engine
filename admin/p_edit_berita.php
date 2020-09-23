<?php
include_once("koneksi.php");
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$publish=$_POST['publish'];
$tanggal = $_POST['tanggal'];
$tanggalpost = date("Y-m-d");
$jam = date("H:i:s");
$result = mysqli_query($koneksi , "SELECT id FROM kategori WHERE kategori = '$kategori' ");
$data = mysqli_fetch_array($result);
$id_kategori= $result['id'];


if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['img']['name'];
  $tmp = $_FILES['img']['tmp_name'];

  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;

  // Set path folder tempat menyimpan fotonya
  $path = "../assets/images/news/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM berita WHERE id='$id'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../assets/images/news/".$data['img'])) // Jika foto ada
      unlink("../assets/images/news/".$data['img']); // Hapus file foto sebelumnya yang ada di folder images

      $query = "UPDATE berita SET catID='$id_kategori',judul='$judul', publisher='1', isi='$isi', tanggal='$tanggal', tanggal_post='$tanggalpost', jam='$jam', img='$fotobaru', publish='$publish', viewed='100' WHERE id='$id'";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
           // Jika Sukses, Lakukan :
           header("location: berita.php"); // Redirect ke halaman index.php
         }else{
           // Jika Gagal, Lakukan :
           echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
           echo "<br><a href='berita.php'>Kembali Ke Form</a>";
         }
       }else{
         // Jika gambar gagal diupload, Lakukan :
         echo "Maaf, Gambar gagal untuk diupload.";



       }
       }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
         // Proses ubah data ke Database
         $query = "UPDATE berita SET catID='1',judul='$judul',penulis='1',drafter='1',publisher='1', isi='$isi', tanggal='$tanggal', tanggal_post='$tanggalpost', jam='$jam', publish='$publish', viewed='100' WHERE id='$id'";
         $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
         if($sql){ // Cek jika proses simpan ke database sukses atau tidak
           // Jika Sukses, Lakukan :
           header("location: berita.php"); // Redirect ke halaman index.php
         }else{
           // Jika Gagal, Lakukan :
           echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

         }
       }
       ?>
