<link rel="stylesheet" href="css/bootstrap.min.css">



<div class="container">


<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Isi</th>

    <th>Tanggal</th>
  </tr>


  <?php
  $no = 1;
    include_once('koneksi.php');
    $tanggal = $_POST['tanggal'];
    $name = $_POST['name'];
    $tanggalakhir = $_POST['tanggalakhir'];

    $sql = mysqli_query($koneksi,"SELECT * FROM berita WHERE penulis=$name AND tanggal BETWEEN '$tanggal' AND '$tanggalakhir'  ORDER BY id ASC");

  while($data = mysqli_fetch_array($sql)){
  ?>

  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php echo substr ($data['isi'],0, 25); ?></td>

    <td><?php echo $data['tanggal']; ?></td>
  </tr>
  <?php
}
  ?>


</table>
</div>


   <script>
  window.print();
  </script>
