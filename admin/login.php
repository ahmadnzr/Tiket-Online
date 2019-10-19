<?php 
include("conn.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

$q = mysql_query("select * from user where username='$username' and password='$password'");
$row = mysql_fetch_array($q);

if (mysql_num_rows($q)) {

	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];

	header('location:index.php');
	# code...
}else{
	header('location:index.html?gagal-login');
}

 ?>