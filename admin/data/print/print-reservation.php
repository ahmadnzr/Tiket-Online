<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
	<style type="text/css">
	table{
		border-collapse: collapse;
	}
	th{
		background: #7194b2;
	}
	</style>
</head>
<body>
<table border="1" align="center" cellspacing="2" width="100%">
	<tr>
		<th>id</th>
		<th>res. code</th>
		<th>res. at</th>
		<th>res. date</th>
		<th>customer id</th>
		<th>seat code</th>
		<th>rute id</th>
		<th>depart at</th>
		<th>price</th>
		<th>user id</th>
	</tr>
	<?php 
		$conn = mysqli_connect('localhost','root','','tiket_ukk');
		$data = mysqli_query($conn,"select * from reservation order by id_res asc");
		while ($has = mysqli_fetch_row($data)) {
			echo "
				<tr>
				<td>$has[0]</td>
				<td>$has[1]</td>
				<td>$has[2]</td>
				<td>$has[3]</td>
				<td>$has[4]</td>
				<td>$has[5]</td>
				<td>$has[6]</td>
				<td>$has[7]</td>
				<td>$has[8]</td>
				<td>$has[9]</td>
				</tr>
			";
			# code...
		}
	 ?>
</table>
</body>
</html>
<?php 
	$html = ob_get_contents();
	ob_end_clean();

	require_once('html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','A4','en');
	$pdf-> WriteHTML($html);
	$pdf-> Output('Data-reservation.pdf','D');
 ?>
