
        <?php

      include_once("koneksi.php");
//        query
        $sql =  "SELECT * FROM user where level='admin' ORDER BY nama";
        $result = mysqli_query($koneksi, $sql);

        //pagination config start
        $rpp = 5; // jumlah record per halaman
        $reload = "admin.php?page=&pagination=true";
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
        Data Admin
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
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>
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
      <td><?php echo  $data['nama'] ?></td>
      <td><?php echo  $data['username'] ?></td>
      <td><?php echo  $data['password'] ?></td>
      <td>
      <center>
         <a href="#" class='open_modal btn btn-info' id='<?php echo  $data['id']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
         <a href="#" class="btn btn-danger" onclick="confirm_modal('del_admin.php?&id=<?php echo  $data['id']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
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

 <!-- Modal Popup untuk Add admin-->
 <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;color:#fff;">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
             <h4 class="modal-title" id="myModalLabel">Tambah Data Admin</h4>
         </div>

         <div class="modal-body">
           <form action="tambah_admin.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                 <div class="form-group">
                   <label for="nama">Nama Admin</label>
                   <input type="text" name="nama"  class="form-control"/>
                 </div>
                 <div class="form-group" style="padding-bottom: 10px;">
                 <label for="berat">Username</label>
                     <input type="text" name="username"  class="form-control" />
                     </div>
                 <div class="form-group" style="padding-bottom: 10px;">
                 <label for="keterangan">Password</label>
                     <input type="password" name="password"  class="form-control"/>
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
                   url: "edit_admin.php",
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
