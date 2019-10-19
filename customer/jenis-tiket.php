
	<div class="box-title">
		<h4>Pilih jenis tiket yang anda ingin pesan</h4>
	</div>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Jenis Tiket</th>
			<th class="text-center"><span class="glyphicon glyphicon-ok"></span></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$qu = mysqli_query($conn,"select * from transportation_type order by id_transtype asc");
			while ($has=mysqli_fetch_row($qu)) {
				echo "
					<tr>
					<td>$has[0]</td>
					<td>$has[1]</td>
					<td class='text-center'>
						<a href='index.php?page=step1&id_transtype=$has[0]'><span class='glyphicon glyphicon-ok'></span> pilih</a>
					</td>
					</tr>
				";
				# code...
			}
		 ?>
	</tbody>
</table>
