<?php include "import.php"; ?>
<head>
<style type="text/css">
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
  </head>
  <center><h1>Mesin Pencarian TF-IDF </h1></center></a>
	<br><br>
  <div class="main">
  <div class="container">
  <div class="row">
  
  <a href="?rute=hitung" class="btn btn-primary" id="">Hitung Bobot</a>
   <a href="hasilvektor.php" class="btn btn-primary" id="">Lihat Index</a>
   <a href="vektor.php" class="btn btn-primary" id="">Total Vektor</a>
   <a href="../index.php" class="btn btn-primary" id="">Beranda</a>
   <a href="index.php" class="btn btn-primary" id="">Home</a>
   
   <br>
   <br>
<table>
<thead>
    <tr>
      <th>Id</th>
      <th>Term</th>
      <th>Doc-Id</th>
      <th>Count</th>
      <th>Bobot</th>
    </tr>
  </thead>

  <?php
  include ('koneksi.php');
  
	
	'</table>';
$sql =  "SELECT * FROM tbindex ORDER BY id ";
$result = mysqli_query($konek, $sql);
$rpp = 10; // jumlah record per halaman
$reload = "hasilvektor.php?page=&pagination=true";
@$page = intval($_GET["page"]);
if($page<=0) $page = 1;
$tcount = mysqli_num_rows($result);
$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
$count = 0;
$i = ($page-1)*$rpp;
$no_urut = ($page-1)*$rpp;
$no =1;
  while(($count<$rpp) && ($i<$tcount)) {
  mysqli_data_seek($result,$i);
  $row = mysqli_fetch_array($result);

		print("<tr>");
		print("<td>" . $row['id'] . "</td><td>" . $row['Term'] . "</td><td>" . $row['DocId'] .
			    "</td><td>" . $row['Count'] . "</td><td>" . $row['Bobot'] . "</td>");
		print("</tr>");
		$i++;
		$count++;
	}
	print("</table><hr />");
?>
<div><?php include"pagination1.php"; echo paginate_one($reload, $page, $tpages); ?></div>
</div>
  </div>
</div>