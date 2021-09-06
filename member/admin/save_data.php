<?php
	require_once '../conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn->query("INSERT INTO `admin` VALUES('', '$username', '$password')") or die(mysqli_error());
