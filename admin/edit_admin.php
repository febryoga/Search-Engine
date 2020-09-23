<?php
include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>


<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Admin</h4>
        </div>

        <div class="modal-body">
        	<form action="p_edit_admin.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 10px;">
                	<label for="Modal Name">Nama</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $d['id']; ?>"/>
     				<input type="text" name="nama"  class="form-control" value="<?php echo $d['nama']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Username</label>
                    <input type="text" name="username"  class="form-control" value="<?php echo $d['username']; ?>"/>
                    </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Password</label>
                    <input type="password" name="password"  class="form-control" value="<?php echo $d['password']; ?>"/>
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
    </div>
