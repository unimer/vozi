<?php
$startlocation = $_POST['startlocation'];	
$destination = $_POST['destination'];
$event = $_POST['event'];
$seats =$_POST['seats'];

if(!empty($startlocation) || !empty($destination) || !empty($event) || !empty($seats)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "vozi"

	$conn = new mysqli($host,$dbUsername,$dbPassword, $dbname);

	if (mysql_connect_error()) {
	die ('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error()); }
	else {
		$SELECT = "SELECT destination From register Where destination = ? Limit 1";
	}	
	
}
	else {
		echo "All fields are requiered";
		die();
	}


?>