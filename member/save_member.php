<?php
	require_once 'conn.php';
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$conn->query("INSERT INTO `member` VALUES('', '$firstname', '$lastname')") or die(mysqli_error());
