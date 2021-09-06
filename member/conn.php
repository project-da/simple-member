<?php
	$conn = new mysqli('localhost', 'root', '', 'sms');
	if(!$conn){
		die('Could not Connect to Database' . $conn->mysqli_error );
	}