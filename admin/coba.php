<!DOCTYPE html>
<html>
<body>

	<center>

		<h2>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>
</center>

		<?php
		include 'koneksi.php';
		?>

		<br/><br/><br/>

    <form method="post" action="printlaporan.php">
      <div class="form-group">
           <label for="Modal Name">NAMA </label>
           <select class="form-control" name="name">

                   <option value="19">Petrus Andrianto</option>

           </select>
       </div>

    			<label>PILIH TANGGAL AWAL</label>
    			<input type="date" name="tanggal">


          <label>PILIH TANGGAL AKHIR</label>
          <input type="date" name="tanggalakhir">
          <input type="submit" value="SUBMIT" >
        </form>


		<br/> <br/>




	</center>
</body>
</html>
