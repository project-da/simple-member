<!DOCTYPE HTML>
<?php
	require_once 'session.php';
	require_once 'account_name.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/chosen.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title></title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Membership System</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class = "glyphicon glyphicon-user"></span> <?php echo $acc_name?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
		</div>
	</nav>
	<div class = "container-fluid">
		<ul class="nav nav-pills">
			<li><a href="home.php">Home</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="member.php">Member</a></li>

		</ul>
		<br />
		<div class = "col-md-12 well">
			<button type = "button" class = "btn btn-success"  data-toggle="modal" data-target="#myModal"><span class = "glyphicon glyphicon-plus"></span> Add member</button>
			<!--<a class = "btn btn-success"  href = "club.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>-->
			<br/>
			<br/>
			<div class = "alert alert-info">
			<?php
				$c_query = $conn->query("SELECT * FROM `club` WHERE `club_id` = '$_REQUEST[club_id]'") or die(mysqli_error());
				$c_fetch = $c_query->fetch_array();
				$club = $c_fetch['club_id'];
			?>
				<div class = "alert alert-success"><?php echo $c_fetch['club_name']?> / Member List</div>
			<table id = "table" class = "table-bordered">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `group` NATURAL JOIN `member` NATURAL JOIN `club` WHERE `club_id` = '$c_fetch[club_id]'") or die(mysqli_error());
							while($f_query = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_query['firstname']?></td>
							<td><?php echo $f_query['lastname']?></td>
							<td><center><a  href = "delete_group.php?group_id=<?php echo $f_query['group_id']?>&club_id=<?php echo $f_query['club_id']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Remove</a></center></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Club Registration</h4>
			</div>
			<div class="modal-body">
				<form method = "POST" enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Member</label>
						<select id = "member" class = "chosen-select">
							<option value = "">Select a member</option>
							<?php
								$g_query = $conn->query('SELECT * FROM `member`') or die(mysqli_error());
								while($g_fetch = $g_query->fetch_array()){
									echo '<option value = "'.$g_fetch['mem_id'].'">'.$g_fetch['firstname'].' '.$g_fetch['lastname'].'</option>';
								}
							?>
						</select>
						<input type = "hidden" id = "club" value = "<?php echo $c_fetch['club_id']?>" />
					</div>
					<div id = "loading">
						
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" id= "save_group" class="btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Save</button>
			</div>
				</form>
		</div>
	</div>
	</div>
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">

	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/chosen.jquery.js"></script>
<script src = "js/script.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "100%"});
</script>
</html>