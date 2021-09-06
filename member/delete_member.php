<?php 
	require_once 'conn.php';
	$conn->query("DELETE FROM `member` WHERE `mem_id` = '$_REQUEST[mem_id]'") or die(mysqli_error());
	header("location: member.php");