<?php 
	$conn = mysqli_connect('localhost','root','','tiket_ukk');

	if(isset($_GET['del']));
	$id = $_GET['del'];

	if (isset($_GET['data'])) {
		switch ($_GET['data']) {
			 
			 case 'list_user':
			 mysqli_query($conn,"delete from user where id_user='$id'");
			 header("location:index.php?page=list_user");
			 	# code...
			 	break;
			 case 'list_customer':
			 mysqli_query($conn,"delete from costumer where id_cus='$id'");
			 header("location:index.php?page=list_customer");
			 	# code...
			 	break;
			 case 'list_transtype':
			 mysqli_query($conn,"delete from transportation_type where id_transtype='$id'");
			 header("location:index.php?page=list_transtype");
			 	# code...
			 	break;
			 case 'list_transp':
			 mysqli_query($conn,"delete from transportation where id_transp='$id'");
			 header("location:index.php?page=list_transp");
			 	# code...
			 	break;
			 case 'list_rute':
			 mysqli_query($conn,"delete from rute where id_rute='$id'");
			 header("location:index.php?page=list_rute");
			 	# code...
			 	break;
			 case 'list_reservation':
			 mysqli_query($conn,"delete from reservation where id_res='$id'");
			 header("location:index.php?page=list_reservation");
			 	# code...
			 	break;
		}
		# code...
	}
 ?>