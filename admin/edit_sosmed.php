<?php
include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * from sosmedpost where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>


<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Sosmed</h4>
        </div>

        <div class="modal-body">
        	<form action="p_edit_sosmed.php" name="modal_popup" enctype="multipart/form-data" method="POST">

            <div class="form-group">
                             <label for="Modal Name">Kategori</label>
                             <select class="form-control" name="node">
                                <option value="FB">Facebook</option>
                                <option value="IG">Instagram</option>
                                <option value="TW">Twitter</option>
                             </select>
                         </div>
            <div class="form-group" style="padding-bottom: 10px;">
            <label for="tanggal">Tanggal : </label>
              <input type="hidden" name="id"  class="form-control" value="<?php echo $d['id']; ?>"/>
            <input type="date" name="tanggal" value="<?php echo $d['tanggal'];?>">
               </div>
                 <div class="form-group">
                   <label for="nama">Judul</label>
                   <input type="text" name="judul"  value="<?php echo $d['judul'];?> "class="form-control"/>
                 </div>
                 <div class="form-group" style="padding-bottom: 10px;">
                 <label for="berat">Deskripsi</label>
                 <div>
               <textarea rows="5" cols="40" class="texteditor" name="detail"  value="<?php echo $d['detail'];?>" required></textarea>
             </div>
                     </div>
                   <div class="form-group" style="padding-bottom: 10px;">
                      <label for="Modal Name">img</label>
                     <input type="file" name="img"  value="../assets/images/sosmed/<?php echo $d['img'];?>"class="form-control" />
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
<?php } ?>
            </div>

        </div>
        <!-- panggil jquery -->

        <script type="text/javascript">
          $(document).ready(function(){
            $("#tgl").datepicker({dateFormat : 'yy/mm/dd'});
          });
        </script>
         <!-- panggil ckeditor.js -->
         <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
         <!-- panggil adapter jquery ckeditor -->
         <script type="text/javascript" src="../assets/ckeditor/adapters/jquery.js"></script>
         <!-- setup selector -->
         <script type="text/javascript">
             $('textarea.texteditor').ckeditor();
         </script>
    </div>
