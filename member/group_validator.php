<?php
	require_once 'conn.php';
	$mem_id = $_POST['mem_id'];
	$club_id = $_POST['club_id'];
	$query = $conn->query("SELECT * FROM `group` WHERE `mem_id` = '$mem_id' && `club_id` = '$club_id'") or die(mysqli_error());
	$validate = $query->num_rows;
	if($validate > 0){
		echo "Success";
	}else{
		echo "Error";
	}