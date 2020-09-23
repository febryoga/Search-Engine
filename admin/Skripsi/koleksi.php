<head>
<style type="text/css">
		form {
				margin:15px auto;
		}
		.search {
			padding:8px 15px;
			background:rgba(50, 50, 50, 0.2);
			border:0px solid #dbdbdb;
		}
		.button {
			position:relative;
			padding:6px 15px;
			left:-8px;
			border:2px solid #2cb7e6;
			background-color:#2cb7e6;
			color:#fafafa;
		}
		.button:hover  {
			background-color:#fafafa;
			color:#207cca;
		}
				  
		::-webkit-input-placeholder { /* For WebKit browsers */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-moz-placeholder { /* For Mozilla Firefox 4 to 18 */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		::-moz-placeholder { /* For Mozilla Firefox 19+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-ms-input-placeholder { /* For Internet Explorer 10+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}	  
  </style>
  </head>
<div class="main">
  <div class="container">
  <div class="row">
  
   <a href="?rute=hitung" class="btn btn-primary" id="">Hitung Bobot</a>
   <a href="hasilvektor.php" class="btn btn-primary" id="">Lihat Index</a>
   <a href="vektor.php" class="btn btn-primary" id="">Total Vektor</a>
   <a href="../index.php" class="btn btn-primary" id="">Beranda</a>
   
   
        <form action="pencarian.php" method="GET">
       <input type="search" name="query" class="search" placeholder="Search">
       <input class="button" type="button" value="Cari" name="query">	
       </form>
    
<table class="table table-striped table-hover ">
<thead>
    <tr>
      <th>Id</th>
      <th>Judul</th>
      <th>Dokumen</th>
    </tr>
  </thead>
<?php
$sql =  "SELECT * FROM berita ORDER BY id ";
$result = mysqli_query($konek, $sql);
$rpp = 5; // jumlah record per halaman
$reload = "index.php?page=&pagination=true";
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
		echo '<tbody>
    	<tr class="active">';
    	echo '<td>'.$row['id'].'</td>';
	    echo '<td>'.$row['judul'].'</td>';
	    echo substr('<td>'.$row['isi'],0,100).'...</td>';
	    // echo '<td><a class="btn btn-primary" href="hapus.php?kode='.$row['Id'].'">Edit</a>';
	    
		// echo $row['Id'] . ". <font color =blue>" . $row['Judul'] . "</font><br />" . $row['Berita'];
		// echo "<hr />";
    echo '</tr>';
    $i++;
							$count++;
	}
	
?>
</table>
<div><?php include"pagination1.php"; echo paginate_one($reload, $page, $tpages); ?></div>

            </div>
  </div>
</div>
