
        <?php

      include_once("../fungsi/koneksi.php");
       $id = $_GET['id'];
//        query
        $sql =  "SELECT * FROM fotolist WHERE fotoID='$id'";
        $result = mysqli_query($koneksi, $sql);

        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "detail.php?page=&pagination=true";
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
<table id="mytable" class="table table-bordered" style="width:78%;">
<style type="text/css">
  th{
    text-align: center;
  }
</style>
    <thead>
      <th>No</th>
      <th>Image</th>
      <th>Caption</th>
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
      <td><img src="../assets/images/photos/<?php echo $data['img'];?>"  style="width:70px;height:80px;" alt="No Image"></td>
      <td><?php echo substr( $data['caption'], 0, 50); ?></td>
      <td>
      <center>

         <a href="#" class='open_modal btn btn-info' id='<?php echo  $data['id']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
         <a href="#" class="btn btn-danger" onclick="confirm_modal('del_potodetail.php?&id=<?php echo  $data['id']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
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

 <!-- Modal Popup untuk Add expert-->

<!-- Modal Popup untuk Add ruminansia-->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Album</h4>
        </div>

        <div class="modal-body">
          <form action="tambah_foto.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 10px;">
                <label for="berat">Caption</label>
                <div>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $id['id']; ?>"/>
              <textarea rows="5" cols="40" class="texteditor" name="caption" required=" "></textarea>
            </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px;">
                     <label for="Modal Name">Gambar</label>
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
                   url: "edit_foto.php",
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
