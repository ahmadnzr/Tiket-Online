<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
	<style type="text/css">
	table{
		border-collapse: collapse;
	}
	th,td{
		padding: 5px;
	}
	th{
		background: #7194b2;
	}
	td{
		padding-left: 5px;
	}
	.box{
		border: 1px solid black;
		width: 30%;
		margin: 0 auto;
		
	}
	</style>
</head>
<body>
<div class="box">
<h3 align="center">Bukti Pemesanan Tiket</h3>
<table border="1" align="center" cellspacing="2">
	<?php 
		$conn = mysqli_connect('localhost','root','','tiket_ukk');
		$data = mysqli_query($conn,"select * from reservation where id_res='".$_GET['id_res']."'");
		while ($has = mysqli_fetch_row($data)) {
			echo "

				<tr>
				<th>id</th>
				<td>$has[0]</td>
				</tr>
				<tr>
				<th>res. code</th>
				<td>$has[1]</td>
				</tr>
				<tr>
				<th>res. at</th>
				<td>$has[2]</td>
				</tr>
				<tr>
				<th>res. date</th>
				<td>$has[3]</td>
				</tr>
				<tr>
				<th>customer id</th>
				<td>$has[4]</td>
				</tr>
				<tr>
				<th>seat code</th>
				<td>$has[5]</td>
				</tr>
				<tr>
				<th>rute id</th>
				<td>$has[6]</td>
				</tr>
				<tr>
				<th>depart at</th>
				<td>$has[7]</td>
				</tr>
				<tr>
				<th>price</th>
				<td>$has[8]</td>
				</tr>
				<tr>
				<th>user id</th>
				<td>$has[9]</td>
				</tr>
			";
			# code...
		}
	 ?>
</table><br>
<i> Hari/Tanggal: <?php $date = date('l,Y-m-d h:m:s a'); echo $date; ?></i>

</div>
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
