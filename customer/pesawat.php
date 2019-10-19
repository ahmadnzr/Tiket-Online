<h4 class="box-title">Pilihan Tiket Pesawat</h4>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Code</th>
			<th>Description</th>
			<th>Seat QTY</th>
			<th class="text-center"><span class="glyphicon glyphicon-ok"></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$qu = mysqli_query($conn,"select * from transportation where transportation_typeid='".$_GET['id_transtype']."'");
			while ($has = mysqli_fetch_row($qu)) {
				echo "
					<tr>
						<td>$has[1]</td>
						<td>$has[2]</td>
						<td>$has[3]</td>
						<td><a href='index.php?page=step2&id_transp=$has[0]'><span class='glyphicon glyphicon-ok'></span> pilih</a></td>
					</tr>
				";
				# code...
			}
		 ?>
	</tbody>
</table>
