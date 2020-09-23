
        <?php

      include_once("koneksi.php");
//        query
        $sql =  "SELECT * FROM berita";
        $result = mysqli_query($koneksi, $sql);

        //pagination config start
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
        <div class="hdkonten">
        Data User
        </div>
<div class="container">
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
      <td><center><img src="../assets/images/news/<?php echo $data['img'];?>"  style="width:70px;height:80px;" alt=""></center</td>
      <td>
      <center>
         <a href="#" class='open_modal btn btn-info' id='<?php echo  $data['id']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
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
</div>
 <div><?php include"pagination1.php"; echo paginate_one($reload, $page, $tpages); ?></div>

 <!-- Modal Popup untuk Add expert-->

<!-- Modal Popup untuk Add ruminansia-->



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
