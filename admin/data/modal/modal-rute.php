<div class="modal fade" id="data-rute">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button class="close" data-dismiss="modal" aria-label="Close">x</button>
 					<h5 class="modal-title">Data Customer</h5>
 				</div>
 				<div class="modal-body">
 					<table id="example1" class="table table-bordered">
 						<thead>
 						<tr>
 							<th>id</th>
 							<th>depart at</th>
 							<th>rute from</th>
 							<th>rute to</th>
 							<th>price</th>
 							<th>transp.id</th>
 						</tr>
 						</thead>
 						<tbody>
 							<?php 
 								while ($has = mysqli_fetch_row($data_rute)) {
 									echo "
 										<tr>
 											<td>$has[0]</td>
 											<td>$has[1]</td>
 											<td>$has[2]</td>
 											<td>$has[3]</td>
 											<td>$has[4]</td>
 											<td>$has[5]</td>
 										</tr>
 									";
 									# code...
 								}
 							 ?>
 						</tbody>
 					</table>
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
 				</div>
 			</div>
 		</div>
 	</div>