<style type="text/css">

</style>
<table border="1" align="center" class="table table-bordered table-striped">
<?php 
	$qu = mysqli_query($conn,"select * from rute where id_rute='".$_GET['id_rute']."'");
	while ($has=mysqli_fetch_row($qu)){
		echo "
			<tr>
			<th>Depart At</th>
			<td>$has[1]</td>
			</tr>
			<tr>
			<th>Rute From</th>
			<td>$has[2]</td>
			</tr>
			<tr>
			<th>Rute to</th>
			<td>$has[3]</td>
			</tr>
			<tr>
			<th>Price</th>
			<td>$has[4]</td>
			</tr>
		";
		# code...
	}
 ?>
</table><br>
<p align="center">Untuk melanjutkan silahkan isi data costumer berikut :<sup class="text-danger">*harus terisi</sup></p>
<?php 
	if (isset($_POST['save'])) {
		mysqli_query($conn,"insert into customer values('','$name','$email','$password','$phone','$gender')");
		echo "
			<script>
				location.assign('index.php?page=customer&ps=true1');
			</script>
		";
		# code...
	}
 ?>

 			<form class="form-horizontal" method="post">
 				<input type="hidden" name="id_cus">
 				<div class="box-body">
 					<div class="form-group">
 						<label for="satu" class="col-sm-2 control-label">name</label>
 						<div class="col-sm-10">
 							<input type="text" name="name" id="satu" required class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="dua" class="col-sm-2 control-label">email</label>
 						<div class="col-sm-10">
 							<input type="text" name="email" id="dua" required class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="tiga" class="col-sm-2 control-label">password</label>
 						<div class="col-sm-10">
 							<input type="text" name="password" id="tiga" required class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="empat" class="col-sm-2 control-label">phone</label>
 						<div class="col-sm-10">
 							<input type="text" name="phone" id="empat" required class="form-control">
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="lima" class="col-sm-2 control-label">gender</label>
 						<div class="col-sm-10">
 							<input type="text" name="gender" id="lima" required class="form-control">
 						</div>
 					</div>
 				</div><!--body-->
 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary pull-right" name="save"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
 				</div>
 			</form>