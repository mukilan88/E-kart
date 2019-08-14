<?php
$con = mysqli_connect("localhost","root","","e-kart");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>