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
 				<h4 class="box-title">Data User</h4>
 			</div>
 			<div class="box-body">
 				<table id="example1" class="table table-bordered table-striped">
 					<thead>
 						<tr>
 							<th>Username</th>
 							<th>Password</th>
 							<th>fullname</th>
 							<th>Level</th>
 							<th class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php 
 							$qu = mysqli_query($conn,"select * from user order by id_user desc");
 							while ($has = mysqli_fetch_row($qu)) {
 								echo "
 									<tr>
 									<td>$has[1]</td>
 									<td>$has[2]</td>
 									<td>$has[3]</td>
 									<td>$has[4]</td>
 									<td class='text-center'>
 										<a href='index.php?page=user&id_user=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Update'><button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#update' data-title='Update'><span class='glyphicon glyphicon-pencil'></span></button></span></a>
 										<span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_user&#39;)' type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#myModal' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button></span>
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
 	<script>
 		function datadel(value,jenis){
 			document.getElementById('myLink').href="hapus.php?del="+value+"&data="+jenis;
 		}
 	</script>
 	<div class="modal fade" id="myModal" tab-index="-1" role="dialog" aria-labelledby="myModalLabel">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 					<h4 class="modal-title" id="myModalLabel">Data akan terhapus <span class="glyphicon glyphicon-warning-sign"></span></h4>
 				</div>
 				<div class="modal-footer">
 					<button class="btn btn-default" type="button" data-dismiss="modal">Batalkan</button>
 					<a id="myLink" href=""><button type="button" class="btn btn-warning">Hapus data</button></a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div><!--row-->
 