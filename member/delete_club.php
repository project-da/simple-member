<?php
	require_once 'conn.php';
	$conn->query("DELETE FROM `club` WHERE `club_id` = $_REQUEST[club_id]") or die(mysqli_error());
	header("location: club.php");