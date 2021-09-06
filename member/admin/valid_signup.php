<?php
	require_once '../conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
	$v_query = $query->num_rows;
	if($v_query > 0 ){
		echo "Submit"
	}else{
		echo "Error";
	}