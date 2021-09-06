<?php
	require_once 'conn.php';
	$club_id = $_REQUEST['club_id'];
	$conn->query("DELETE FROM `group` WHERE `group_id` = '$_REQUEST[group_id]'") or die(mysqli_error());
	header("location:group.php?club_id=".$club_id."");