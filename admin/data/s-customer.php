<?php 
	if (isset($_GET['ps'])=='true2') {
		echo "
			<div class='alert alert-info' role='alert'><span class='glyphicon glyphicon-floppy-saved'></span> Data berhasil diedit</div>
		";
		# code...
	}
 ?>
 <div class="row">
 	<div class="col-xs-12">
 		<div class="box box-info">
 			<div class="box-header">
 				<h4 class="box-title">Data Customer</h4>
 			</div>
 			<div class="box-body">
 				<table id="example1" class="table table-bordered table-striped">
 					<thead>
 						<tr>
 							<th>Name</th>
 							<th>Email</th>
 							<th>Password</th>
 							<th>Phone</th>
 							<th>Gender</th>
 							<th class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php 
 							$qu = mysqli_query($conn,"select * from customer order by id_cus desc");
 							while ($has = mysqli_fetch_row($qu)) {
 								echo "
 									<tr>
 									<td>$has[1]</td>
 									<td>$has[2]</td>
 									<td>$has[3]</td>
 									<td>$has[4]</td>
 									<td>$has[5]</td>
 									<td class='text-center'>
 										<a href='index.php?page=customer&id_cus=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Update'><button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#update' data-title='Update'><span class='glyphicon glyphicon-pencil'></span></button></span></a>
 										<span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_customer&#39;)' type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#myModal' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button></span>
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
 	<?php include'modal-hapus.php'; ?>
 </div><!--row-->
 