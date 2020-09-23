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
<?php
include "koneksi.php";
include_once "fungsi.php";
include "import.php";


$query = mysqli_real_escape_string($konek,$_GET["query"]);
?>
<center><h1>Mesin Pencarian TF-IDF </h1></center></a>
	<br><br>
<div class="main">
  <div class="container">
  <div class="row">
  
  <a href="?rute=hitung" class="btn btn-primary" id="">Hitung Bobot</a>
   <a href="?rute=index" class="btn btn-primary" id="">Lihat Index</a>
   <a href="?rute=lihathasilvektor" class="btn btn-primary" id="">Total Vektor</a>
   <a href="../index.php" class="btn btn-primary" id="">Beranda</a>
   
   
   
        <form action="pencarian.php" method="GET">
       <input type="search" name="query" class="search" placeholder="Search">
       <input class="button" type="button" value="Cari" name="query">	
	   </form>
	   

                        <?php hitungsim($query);?>
						<?php ambilcache($query);?>
             
			 </div>
  </div>
</div>
