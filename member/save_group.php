<?php
	require_once 'conn.php';
	$club_id = $_POST['club_id'];
	$mem_id = $_POST['mem_id'];
	$conn->query("INSERT INTO `group` VALUES('', '$club_id', '$mem_id')") or die(mysqli_error());
