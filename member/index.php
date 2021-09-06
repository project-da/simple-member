<!DOCTYPE HTML>
<?php
	require 'conn.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title></title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Membership System</a>
			</div>
		</div>
	</nav>
	<div class = "row">	
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 alert alert-info">
			<h4>Administrator Login</h4>
			<hr  style = "clear:both;"/>
			<form enctype = "multipart/form-data" method = "POST" >
				<div class = "form-group">
					<label>Username</label>
					<input type = "text" id = "username" class = "form-control" />
				</div>
				<div class = "form-group">
					<label>Password</label>
					<input type = "password" id = "password" class = "form-control" />
				</div>
				<div id = "loading">
				</div>
				<br />
				<div class  = "form-group">
					<button type = "button" class = "form-control" id = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
			</form>
		</div>
		<div class = "col-md-4">
		</div>
	</div>	
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">

	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
</html>