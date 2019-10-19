<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into transportation_type values('','$description')");
		echo "
			<script>
				location.assign('index.php?page=transtype&ps=true1');
			</script>
		";
		# code...
	}elseif (isset($_POST['update'])) {
		mysqli_query($conn,"update transportation_type set description='$description' where id_transtype='$id_transtype'");
		echo "
			<script>
				location.assign('index.php?page=list_transtype&ps=true2');
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
	if (isset($_GET['id_transtype'])) {

		$data = mysqli_fetch_row(mysqli_query($conn,"select * from transportation_type where id_transtype='".$_GET['id_transtype']."'"));
		# code...
	}
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="box">
 			<div class="box-header with-border">
 				<h4 class="box-title">Form Input Transportation Type</h4>
 			</div>
 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_transtype" value="<?php echo isset($_GET['id_transtype'])?$_GET['id_transtype']:''; ?>">
 				<div class="box-body">
 				<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">Id Transptype</label>
 						<div class="col-sm-2">
 							<input type="text" name="id_transtype" id="satu" required class="form-control" value="<?php echo isset($data[0])?$data[0]:''; ?>" disabled>
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">Description</label>
 						<div class="col-sm-10">
 							<input type="text" name="description" id="dua" required class="form-control" value="<?php echo isset($data[1])?$data[1]:''; ?>">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="<?php echo isset($_GET['id_transtype'])?'update':'save'; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>
 		</div><!--box-->
 	</div><!--col-md-12-->
 </div><!--row-->