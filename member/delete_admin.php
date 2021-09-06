<?php
	require_once 'conn.php';
	$conn->query("DELETE FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	header('location: account.php');
