<?php 
	if (isset($_GET['ps'])=='true2') {
		echo "
			<div class='alert alert-info' role='alert'><span class='glyphicon glyphicon-floppy-saved'></span> Data berhasil diedit</div>
		";
		# code...
	}
	$data_cus = mysqli_query($conn,"select * from customer order by id_cus desc");
	$data_rute = mysqli_query($conn,"select * from rute order by id_rute desc");
	$data_user = mysqli_query($conn,"select * from user order by id_user desc");
 ?>
 <div class="row">
 	<div class="col-xs-12">
 		<div class="box box-info">
 			<div class="box-header">
 				<h4 class="box-title">Data Reservation</h4>
 				<?php include'modal/modal-reser.php'; ?>
 			</div>
 			<div class="box-body">
 				<table id="example1" class="table table-bordered table-striped">
 					<thead>
 						<tr>
 							<th>Res.Code</th>
 							<th>Res.At</th>
 							<th>Res.Date</th>
 							<th>Cus. Id</th>
 							<th>Seat Code</th>
 							<th>rute ID</th>
 							<th>Depart AT</th>
 							<th>Price</th>
 							<th>User Id</th>
 							<th class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php 
 							$qu = mysqli_query($conn,"select * from reservation order by id_res desc");
 							while ($has = mysqli_fetch_row($qu)) {
 								echo "
 									<tr>
 									<td>$has[1]</td>
 									<td>$has[2]</td>
 									<td>$has[3]</td>
 									<td>$has[4]</td>
 									<td>$has[5]</td>
 									<td>$has[6]</td>
 									<td>$has[7]</td>
 									<td>$has[8]</td>
 									<td>$has[9]</td>
 									<td class='text-center'>
 										<a href='index.php?page=reservation&id_res=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Update'><button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#update' data-title='Update'><span class='glyphicon glyphicon-pencil'></span></button></span></a>
 										<span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_reservation&#39;)' type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#myModal' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button></span>
 										<a href='data/print/print-reservation-byid.php?id_res=$has[0]' target='_blank'><span data-placement='top' data-toggle='tooltip' title='Download tiket'><button type='button' class='btn btn-info btn-xs' data-toggle='modal' data-title='Download tiker'><span class='glyphicon glyphicon-download-alt'></span></button></span></a>
 									</td>
 									</tr>
 								";
 								# code...
 							}
 						 ?>
 					</tbody>
 				</table>
 			</div><!--body-->
 			<div class="box-footer">
 				<a href="data/print/print-reservation.php" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> Download semua data</a>
 			</div>
 		</div><!--box-->
 	</div><!--col-->
 	 <?php 
 	include'modal/modal-hapus.php'; 
 	include'modal/modal-cus.php';
 	include'modal/modal-user.php';
	include'modal/modal-rute.php';
 	 ?>
 </div><!--row-->
 