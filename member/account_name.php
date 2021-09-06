<?php
	require_once 'conn.php';
	$acc_query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
	$acc_fetch = $acc_query->fetch_array();
	$acc_name = $acc_fetch['username'];