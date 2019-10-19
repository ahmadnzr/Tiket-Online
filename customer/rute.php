<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Depart At</th>
			<th>Rute From</th>
			<th>Rute To</th>
			<th>Price</th>
			<th class="text-center"><span class="glyphicon glyphicon-ok"></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if ($_GET['id_transp']==1) {
				$qu = mysqli_query($conn,"select * from rute where transportationid='1'");
				while ($has = mysqli_fetch_row($qu)) {
					echo "
						<tr>
							<td>$has[1]</td>
							<td>$has[2]</td>
							<td>$has[3]</td>
							<td>$has[4]</td>
							<td><a href='index.php?page=step3&id_rute=$has[0]'>lanjutkan</a></td>
							
						</tr>
					";
					# code...
				}
				# code...
			}elseif ($_GET['id_transp']==2) {
				$qu = mysqli_query($conn,"select * from rute where transportationid='2'");
				while ($has = mysqli_fetch_row($qu)) {
					echo "
						<tr>
							<td>$has[1]</td>
							<td>$has[2]</td>
							<td>$has[3]</td>
							<td>$has[4]</td>
							<td><a href='index.php?page=step3&id_rute=$has[0]'>lanjutkan</a></td>
							
						</tr>
					";
					# code...
				}
				# code...
			}elseif ($_GET['id_transp']==5) {
				$qu = mysqli_query($conn,"select * from rute where transportationid='5'");
				while ($has = mysqli_fetch_row($qu)) {
					echo "
						<tr>
							<td>$has[1]</td>
							<td>$has[2]</td>
							<td>$has[3]</td>
							<td>$has[4]</td>
							<td><a href='index.php?page=step3&id_rute=$has[0]'>lanjutkan</a></td>
							
						</tr>
					";
					# code...
				}
				# code...
			}elseif ($_GET['id_transp']==3) {
				$qu = mysqli_query($conn,"select * from rute where transportationid='3'");
				while ($has = mysqli_fetch_row($qu)) {
					echo "
						<tr>
							<td>$has[1]</td>
							<td>$has[2]</td>
							<td>$has[3]</td>
							<td>$has[4]</td>
							<td><a href='index.php?page=step3&id_rute=$has[0]'>lanjutkan</a></td>
						</tr>
					";
					# code...
				}
				# code...
			}elseif ($_GET['id_transp']==4) {
				$qu = mysqli_query($conn,"select * from rute where transportationid='4'");
				while ($has = mysqli_fetch_row($qu)) {
					echo "
						<tr>
							<td>$has[1]</td>
							<td>$has[2]</td>
							<td>$has[3]</td>
							<td>$has[4]</td>
							<td><a href='index.php?page=step3&id_rute=$has[0]'>lanjutkan</a></td>
						</tr>
					";
					# code...
				}
				# code...
			}
		 ?>
	</tbody>
</table>