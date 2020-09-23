<?php
session_start();
include_once("koneksi.php");

@$act = $_GET['act'];
if($act=="tambah"){
	include("tambah_berita.php");
}
else if($act=="edit")
{
	include("edit_berita.php");
}
else if($act=="hapus")
{
	$kd = $_GET['id'];
	mysqli_query($koneksi, "DELETE from berita where id='$kd'");
	header("location:index.php?page=pakan");
}


$username = $_SESSION['username'];
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	$sql =  "SELECT * FROM berita ORDER BY id DESC";
	$result = mysqli_query($koneksi, $sql);
$rpp = 5; // jumlah record per halaman
$reload = "berita.php?page=&pagination=true";
@$page = intval($_GET["page"]);
if($page<=0) $page = 1;
$tcount = mysqli_num_rows($result);
$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
$count = 0;
$i = ($page-1)*$rpp;
$no_urut = ($page-1)*$rpp;
//pagination config end
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

<section class="content">
	<div class="row">

		<div class="col col-sm-12">
			<div class="row">
				<div class="col col-sm-9">
					<div class="contentkiri">
						<div class="welcome">
							<p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a>

							<table id="mytable" class="table table-bordered" style="width:78%;">
							<style type="text/css">
							  th{
							    text-align: center;
							  }
</style>
<thead>
	<th>No</th>
	<th>Judul</th>
	<th>Isi</th>
	<th>img</th>
	<th>Aksi</th>
</thead>
<?php
$no =1;
  while(($count<$rpp) && ($i<$tcount)) {
  mysqli_data_seek($result,$i);
  $data = mysqli_fetch_array($result);
  ?>


								<tr>
							      <td><center><?php echo $no++ ?></center></td>
							      <td><?php echo  $data['judul'] ?></td>
							      <td><?php echo substr( $data['isi'], 0, 200); ?></td>
							      <td><center><img src="../assets/images/news/<?php echo $data['img'];?>"  style="width:70px;height:80px;" alt=""></center></td>
							      <td>
							      <center>
							         <a href="#" class='open_modal btn btn-info' id='<?php echo  $data['id']; ?>'><span class="glyphicon glyphicon-pencil" ></span></a>
							         <a href="#" class="btn btn-danger" onclick="confirm_modal('del_berita.php?&id=<?php echo  $data['id']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
							      </center>
							      </td>
							  </tr>
							<?php
							$i++;
							$count++;
							  }
							?>
							</table>
							</style>
						</div>
						<div><?php include"pagination1.php"; echo paginate_one($reload, $page, $tpages); ?></div>

						</div>
					</div>

					<div class="col col-sm-3">
						<div class="navo">
								<div class="contentkanan">
									<div class="navkanan">
										<?php include("nav.php") ?>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>




<div id="footeradmin">
	<?php include("footer.php") ?>
</div>
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Berita</h4>
        </div>

        <div class="modal-body">
          <form action="tambah_berita.php" name="modal_popup" enctype="multipart/form-data" method="POST">

            <div class="form-group">
                               <label for="Modal Name">Kategori</label>
                               <select class="form-control" name="kategori">
                                 <?php $ambil= $koneksi->query("SELECT * FROM kategori "); ?>
                                   <?php while($data = $ambil->fetch_assoc()){ ?>

                                       <option><?php echo $data['kategori']; ?></option>
                                       <?php } ?>
                               </select>
                           </div>
                <div class="form-group">
                  <label for="nama">Judul</label>
                  <input type="text" name="judul"  class="form-control"/>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="tanggal">Tanggal : </label>
                <input type="date" name="tanggal">
                   </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="berat">Isi Berita</label>
                <div>
              <textarea rows="5" cols="40" class="texteditor" name="isi" required></textarea>
            </div>
                    </div>


                    <div class="form-group" style="padding-bottom: 10px;">
                     <label for="Modal Name">img</label>
                    <input type="file" name="img"  class="form-control" />
                    </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>



            </div>


        </div>
    </div>
</div>
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header"  style="text-align:center;background:#4682b5;color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Hapus data? </h4>
      </div>

      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Confirm</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "edit_berita.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#ModalEdit").html(ajaxData);
                   $("#ModalEdit").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});
	});
</script>
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

<!-- panggil jquery -->

 <script type="text/javascript" src="../assets/jquery/jquery-3.1.1.min.js"></script>
 <!-- panggil ckeditor.js -->
 <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
 <!-- panggil adapter jquery ckeditor -->
 <script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
 <!-- setup selector -->
 <script type="text/javascript">
		 $('textarea.texteditor').ckeditor();
 </script>
