<?php
	require_once 'conn.php';
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$conn->query("UPDATE `member` SET `firstname` = '$firstname', `lastname` = '$lastname' WHERE `mem_id` = '$_REQUEST[mem_id]'") or die(mysqli_error());