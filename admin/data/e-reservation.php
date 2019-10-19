<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into reservation values('','$reservation_code','".date('h:m:s a')."','".date('Y-m-d')."','$customerid','$seat_code','$ruteid','$depart_at','$price','$userid')");
		echo "
			<script>
				location.assign('index.php?page=reservation&ps=true1');
			</script>
		";
		# code...
	}elseif (isset($_POST['update'])) {
		mysqli_query($conn,"update reservation set reservation_code='$reservation_code',customerid='$customerid',seat_code='$seat_code',ruteid='$ruteid',depart_at='$depart_at',price='$price',userid='$userid' where id_res='$id_res'");
		echo "
			<script>
				location.assign('index.php?page=list_reservation&ps=true2');
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
	if (isset($_GET['id_res'])) {

		$data = mysqli_fetch_row(mysqli_query($conn,"select * from reservation where id_res='".$_GET['id_res']."'"));
		# code...
	}
	$data_cus = mysqli_query($conn,"select * from customer order by id_cus desc");
	$data_rute = mysqli_query($conn,"select * from rute order by id_rute desc");
	$data_user = mysqli_query($conn,"select * from user order by id_user desc");
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="box">
 			<div class="box-header with-border">
 				<h4 class="box-title">Form Input Reservation</h4>
 				<?php include'modal/modal-reser.php'; ?>
 			</div>

 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_res" value="<?php echo isset($_GET['id_res'])?$_GET['id_res']:''; ?>">
 				<div class="box-body">
 					<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">Reservation Code</label>
 						<div class="col-sm-10">
 							<input type="text" name="reservation_code" id="satu" required class="form-control" value="<?php echo isset($data[1])?$data[1]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">Reservation At</label>
 						<div class="col-sm-10">
 							<input type="text" name="reservation_at" id="dua" required class="form-control" value="<?php echo isset($data[2])?$data[2]:date('h:m:s a'); ?>" disabled>
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tiga" class="col-sm-2 control-label">Reservation date</label>
 						<div class="col-sm-10">
 							<input type="text" name="reservation_date" id="tiga" required class="form-control" value="<?php echo isset($data[3])?$data[3]:date('Y-m-d'); ?>" disabled>
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">Cust. Id<sup class="text-danger">*id cus diatas</sup></label>
 						<div class="col-sm-10">

 							<input type="text" name="customerid" id="empat" required class="form-control" value="<?php echo isset($data[4])?$data[4]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="lima" class="col-sm-2 control-label">Seat Code</label>
 						<div class="col-sm-10">
 							<input type="text" name="seat_code" id="lima" required class="form-control" value="<?php echo isset($data[5])?$data[5]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="enam" class="col-sm-2 control-label">Rute Id<sup class="text-danger">*id rute diatas</sup></label>
 						<div class="col-sm-10">
 							<input type="text" name="ruteid" id="enam" required class="form-control" value="<?php echo isset($data[6])?$data[6]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tujuh" class="col-sm-2 control-label">Depart At</label>
 						<div class="col-sm-10">
 							<input type="text" name="depart_at" id="tujuh" required class="form-control" value="<?php echo isset($data[7])?$data[7]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="delapan" class="col-sm-2 control-label">Price</label>
 						<div class="col-sm-10">
 							<input type="text" name="price" id="delapan" required class="form-control" value="<?php echo isset($data[8])?$data[8]:''; ?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="sembilan" class="col-sm-2 control-label">User id<sup class="text-danger">*id user diatas</sup></label>
 						<div class="col-sm-10">
 							<input type="text" name="userid" id="sembilan" required class="form-control" value="<?php echo isset($data[9])?$data[9]:''; ?>">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="<?php echo isset($_GET['id_res'])?'update':'save'; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>
 		</div><!--box-->
 	</div><!--col-md-12-->
 	<?php 
 	include'modal/modal-cus.php';
 	include'modal/modal-user.php';
	include'modal/modal-rute.php';
 	 ?>
 </div><!--row-->