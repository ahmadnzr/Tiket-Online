<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into transportation values('','$code','$description','$seat_qty','$transportation_typeid')");
		echo "
			<script>
				location.assign('index.php?page=transp&ps=true1');
			</script>
		";
		# code...
	}elseif (isset($_POST['update'])) {
		mysqli_query($conn,"update transportation set code='$code',description='$description',seat_qty='$seat_qty',transportation_typeid='$transportation_typeid' where id_transp='$id_transp'");
		echo "
			<script>
				location.assign('index.php?page=list_transp&ps=true2');
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
	if (isset($_GET['id_transp'])) {

		$data = mysqli_fetch_row(mysqli_query($conn,"select * from transportation where id_transp='".$_GET['id_transp']."'"));
		# code...
	}

	$data_transptype = mysqli_query($conn,"select * from transportation_type order by id_transtype desc");
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="box">
 			<div class="box-header with-border">
 				<h4 class="box-title">Form Input Transportation</h4>
 				<p></p>
 				<p><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#data-jenis"><span class="glyphicon glyphicon-list"></span> Data Transportation type</button></p>
 			</div>
 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_transp" value="<?php echo isset($_GET['id_transp'])?$_GET['id_transp']:''; ?>">
 				<div class="box-body">
 					<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">Code</label>
 						<div class="col-sm-10">
 							<input type="text" name="code" id="satu" required class="form-control" value="<?php echo isset($data[1])?$data[1]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">description</label>
 						<div class="col-sm-10">
 							<input type="text" name="description" id="dua" required class="form-control" value="<?php echo isset($data[2])?$data[2]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tiga" class="col-sm-2 control-label">Seat QTY</label>
 						<div class="col-sm-10">
 							<input type="text" name="seat_qty" id="tiga" required class="form-control" value="<?php echo isset($data[3])?$data[3]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">Transp. Id</label>
 						<div class="col-sm-10">
 							<input type="text" name="transportation_typeid" id="empat" required class="form-control" value="<?php echo isset($data[4])?$data[4]:''; ?>">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="<?php echo isset($_GET['id_transp'])?'update':'save'; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>
 		</div><!--box-->
 	</div><!--col-md-12-->
 	<?php 
 		include 'modal/modal-transptype.php';
 	 ?>
 </div><!--row-->