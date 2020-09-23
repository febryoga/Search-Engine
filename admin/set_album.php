
        <?php

      include_once("koneksi.php");
//        query
        $sql =  "SELECT * FROM foto ORDER BY id DESC";
        $result = mysqli_query($koneksi, $sql);

        //pagination config start
        $rpp = 5; // jumlah record per halaman
        $reload = "fotokegiatan.php?page=&pagination=true";
        @$page = intval($_GET["page"]);
        if($page<=0) $page = 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
        <div class="hdkonten">
        Data Foto
        </div>
<div class="container">
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Album</a>
  <a href="#" class="btn btn-success" data-target="#ModalAdd1" data-toggle="modal">Add Foto</a>


<table id="mytable" class="table table-bordered" style="width:78%;">
<style type="text/css">
  th{
    text-align: center;
  }
</style>
    <thead>
      <th>No</th>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Tanggal</th>

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
      <td><?php echo substr( $data['isi'], 0, 50); ?></td>
      <td><?php echo  $data['tanggal'] ?></td>
      <td>
      <center>
         <input type="button" value="Detail" onclick="window.location.href='detail.php?id=<?php echo $data['id'];?>'" />
         <a href="#" class='open_modal btn btn-info' id='<?php echo  $data['id']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
         <a href="#" class="btn btn-danger" onclick="confirm_modal('del_album.php?&id=<?php echo  $data['id']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
         <button type="button" value="PRINT"  target="_blank" onclick="window.location.href='printfoto.php?id=<?php echo $data['id'];?>'">
           <i class="glyphicon glyphicon-print"></i>
        </button>
      </center>
      </td>
  </tr>
<?php
$i++;
$count++;
  }
?>
</table>
</div>
 <div><?php include"pagination1.php"; echo paginate_one($reload, $page, $tpages); ?></div>

 <!-- Modal Popup untuk Add -->

<!-- Modal Popup untuk Add album-->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Album</h4>
        </div>

        <div class="modal-body">
          <form action="tambah_album.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group">
                  <label for="nama">Judul</label>
                  <input type="text" name="judul"  class="form-control"/>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="tanggal">Tanggal : </label>
                <input type="date" name="tanggal">
                   </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="berat">Deskripsi</label>
                <div>
              <textarea rows="5" cols="40" class="texteditor" name="deskripsi" required=" "></textarea>
            </div>
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


<!-- Modal Popup untuk Add foto-->
<div id="ModalAdd1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Foto</h4>
        </div>

        <div class="modal-body">
          <form action="tambah_foto.php" name="modal_popup" enctype="multipart/form-data" method="POST">

            <div class="form-group">
                               <label for="Modal Name">Judul</label>
                               <select class="form-control" name="judul">
                                 <?php $ambil= $koneksi->query("SELECT * FROM foto "); ?>
                                   <?php while($perproduk = $ambil->fetch_assoc()){ ?>

                                       <option><?php echo $perproduk['judul']; ?></option>
                                       <?php } ?>
                               </select>
                           </div>

                <div class="form-group" style="padding-bottom: 10px;">
                <label for="berat">Caption</label>
                <div>
              <textarea rows="5" cols="40" class="texteditor" name="caption" required=" "></textarea>
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


<!-- Modal Popup untuk Edit-->
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



<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "edit_album.php",
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

<!-- Javascript untuk popup modal Edit-->

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#tgl").datepicker({dateFormat : 'yy/mm/dd'});
    });
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
