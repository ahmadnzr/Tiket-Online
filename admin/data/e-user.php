<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into user values('','$username','$password','$fullname','$level')");
		echo "
			<script>
				location.assign('index.php?page=user&ps=true1');
			</script>
		";
		# code...
	}elseif (isset($_POST['update'])) {
		mysqli_query($conn,"update user set username='$username',password='$password',fullname='$fullname',level='$level' where id_user='$id_user'");
		echo "
			<script>
				location.assign('index.php?page=list_user&ps=true2');
			</script>
		";
	}
	//pesan simpan
	if (isset($_GET['ps'])=='true1') {
		echo "
			<div class='alert alert-info' role='alert'><span class='glyphicon glyphicon-floppy-saved'></span> Data berhasil disimpan</div>
		";
		# code...
	}
	//get id
	if (isset($_GET['id_user'])) {

		$data = mysqli_fetch_row(mysqli_query($conn,"select * from user where id_user='".$_GET['id_user']."'"));
		# code...
	}
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="box">
 			<div class="box-header with-border">
 				<h4 class="box-title">Form Input User</h4>
 			</div>
 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_user" value="<?php echo isset($_GET['id_user'])?$_GET['id_user']:''; ?>">
 				<div class="box-body">
 					<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">Username</label>
 						<div class="col-sm-10">
 							<input type="text" name="username" id="satu" required class="form-control" value="<?php echo isset($data[1])?$data[1]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">Password</label>
 						<div class="col-sm-10">
 							<input type="text" name="password" id="dua" required class="form-control" value="<?php echo isset($data[2])?$data[2]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tiga" class="col-sm-2 control-label">fullname</label>
 						<div class="col-sm-10">
 							<input type="text" name="fullname" id="tiga" required class="form-control" value="<?php echo isset($data[3])?$data[3]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">Level</label>
 						<div class="col-sm-10">
 							<input type="text" name="level" id="empat" required class="form-control" value="<?php echo isset($data[4])?$data[4]:''; ?>">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="<?php echo isset($_GET['id_user'])?'update':'save'; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>
 		</div><!--box-->
 	</div><!--col-md-12-->
 </div><!--row-->