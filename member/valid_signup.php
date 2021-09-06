<?php
	require_once 'conn.php';
	$username = $_POST['username'];
	$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
	$validate = $query->num_rows;
	if($validate > 0){
		echo "Success";
	}else{
		echo "Error";
	}