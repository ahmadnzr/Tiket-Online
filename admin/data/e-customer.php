<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into customer values('','$name','$email','$password','$phone','$gender')");
		echo "
			<script>
				location.assign('index.php?page=customer&ps=true1');
			</script>
		";
		# code...
	}elseif (isset($_POST['update'])) {
		mysqli_query($conn,"update customer set name='$name',email='$email',password='$password',phone='$phone',gender='$gender' where id_cus='$id_cus'");
		echo "
			<script>
				location.assign('index.php?page=list_customer&ps=true2');
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
	if (isset($_GET['id_cus'])) {

		$data = mysqli_fetch_row(mysqli_query($conn,"select * from customer where id_cus='".$_GET['id_cus']."'"));
		# code...
	}
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="box">
 			<div class="box-header with-border">
 				<h4 class="box-title">Form Input Costumer</h4>
 			</div>
 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_cus" value="<?php echo isset($_GET['id_cus'])?$_GET['id_cus']:''; ?>">
 				<div class="box-body">
 					<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">name</label>
 						<div class="col-sm-10">
 							<input type="text" name="name" id="satu" required class="form-control" value="<?php echo isset($data[1])?$data[1]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">email</label>
 						<div class="col-sm-10">
 							<input type="text" name="email" id="dua" required class="form-control" value="<?php echo isset($data[2])?$data[2]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tiga" class="col-sm-2 control-label">password</label>
 						<div class="col-sm-10">
 							<input type="text" name="password" id="tiga" required class="form-control" value="<?php echo isset($data[3])?$data[3]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">phone</label>
 						<div class="col-sm-10">
 							<input type="text" name="phone" id="empat" required class="form-control" value="<?php echo isset($data[4])?$data[4]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="lima" class="col-sm-2 control-label">gender</label>
 						<div class="col-sm-10">
 							<input type="text" name="gender" id="lima" required class="form-control" value="<?php echo isset($data[5])?$data[5]:''; ?>">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="<?php echo isset($_GET['id_cus'])?'update':'save'; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>
 		</div><!--box-->
 	</div><!--col-md-12-->
 </div><!--row-->