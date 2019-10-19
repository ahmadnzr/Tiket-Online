<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into rute values('','$depart_at','$rute_from','$rute_to','$price')");
		echo "
			<script>
				location.assign('index.php?page=rute&ps=true1');
			</script>
		";
		# code...
	}elseif (isset($_POST['update'])) {
		mysqli_query($conn,"update rute set depart_at='$depart_at',rute_from='$rute_from',rute_to='$rute_to',price='$price' where id_rute='$id_rute'");
		echo "
			<script>
				location.assign('index.php?page=list_rute&ps=true2');
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
	if (isset($_GET['id_rute'])) {

		$data = mysqli_fetch_row(mysqli_query($conn,"select * from rute where id_rute='".$_GET['id_rute']."'"));
		# code...
	}
	$data_transp = mysqli_query($conn,"select * from transportation order by id_transp desc");
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="box">
 			<div class="box-header with-border">
 				<h4 class="box-title">Form Input Rute</h4>
 				<p></p>
 				<p><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#data-transp"><span class="glyphicon glyphicon-list"></span> Data Transportation</button></p>
 			</div>
 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_rute" value="<?php echo isset($_GET['id_rute'])?$_GET['id_rute']:''; ?>">
 				<div class="box-body">
 					<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">depart_at</label>
 						<div class="col-sm-10">
 							<input type="text" name="depart_at" id="satu" required class="form-control" value="<?php echo isset($data[1])?$data[1]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">rute_from</label>
 						<div class="col-sm-10">
 							<input type="text" name="rute_from" id="dua" required class="form-control" value="<?php echo isset($data[2])?$data[2]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tiga" class="col-sm-2 control-label">rute_to</label>
 						<div class="col-sm-10">
 							<input type="text" name="rute_to" id="tiga" required class="form-control" value="<?php echo isset($data[3])?$data[3]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">price</label>
 						<div class="col-sm-10">
 							<input type="text" name="price" id="empat" required class="form-control" value="<?php echo isset($data[4])?$data[4]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">Transp. Id<sup class="text-danger">*id trans diatas</sup></label>
 						<div class="col-sm-10">
 							<input type="text" name="transportationid" id="empat" required class="form-control" value="<?php echo isset($data[5])?$data[5]:''; ?>">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="<?php echo isset($_GET['id_rute'])?'update':'save'; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>
 		</div><!--box-->
 	</div><!--col-md-12-->
 	<?php 
 	 include'modal/modal-transp.php';?>
 </div><!--row-->