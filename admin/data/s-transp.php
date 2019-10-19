<?php 
	if (isset($_GET['ps'])=='true2') {
		echo "
			<div class='alert alert-info' role='alert'><span class='glyphicon glyphicon-floppy-saved'></span> Data berhasil diedit</div>
		";
		# code...
	}
	$data_transptype = mysqli_query($conn,"select * from transportation_type order by id_transtype desc");
 ?>
 <div class="row">
 	<div class="col-xs-12">
 		<div class="box box-info">
 			<div class="box-header">
 				<h4 class="box-title">Data Transportaion</h4>
 				<p></p>
 				<p><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#data-jenis"><span class="glyphicon glyphicon-list"></span> Data Transportation type</button></p>
 			</div>
 			<div class="box-body">
 				<table id="example1" class="table table-bordered table-striped">
 					<thead>
 						<tr>
 							<th>Code</th>
 							<th>Description</th>
 							<th>Seat QTY</th>
 							<th>Trans.typeid</th>
 							<th class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php 
 							$qu = mysqli_query($conn,"select * from transportation order by id_transp desc");
 							while ($has = mysqli_fetch_row($qu)) {
 								echo "
 									<tr>
 									<td>$has[1]</td>
 									<td>$has[2]</td>
 									<td>$has[3]</td>
 									<td>$has[4]</td>
 									<td class='text-center'>
 										<a href='index.php?page=transp&id_transp=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Update'><button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#update' data-title='Update'><span class='glyphicon glyphicon-pencil'></span></button></span></a>
 										<span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_transp&#39;)' type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#myModal' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button></span>
 									</td>
 									</tr>
 								";
 								# code...
 							}
 						 ?>
 					</tbody>
 				</table>
 			</div><!--body-->
 		</div><!--box-->
 	</div><!--col-->
 	<?php include'modal/modal-hapus.php';
 	include 'modal/modal-transptype.php'; ?>
 </div><!--row-->
 