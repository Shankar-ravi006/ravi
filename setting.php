<!DOCTYPE html>
<html>
<head>
	<title>setting</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/new style.css">
</head>
<style>
	.panel-header{
		position: absolute;
		margin-left: 40%;
		top: 20%;

	}
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="Lifestyle Store.html" class="navbar-brand"><b>Lifestyle Store<b></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>	
			<li><a href="Setting.html"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
			<li><a href="Logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		</nav>
	
			<div class="panel-header">
			<div class="panel panel-default">
<div class="panel-heading"><h2><b>Change Password</b></h2></div>
			<form>
				<div class="form-group">
					<input type="old password" name="old password" placeholder="old password" class="form-control" id="old password">
				</div>
				<div class="form-group">
					<input type="new password" name="new password" placeholder="new password" class="form-control" id="new password">
				</div>
				
				<div class="form-group">
					<input type="Re-type New Password" name="Re-type New Password" placeholder="Re-type New Password" class="form-control" id="Re-type New Password">
				</div>
				<button type="Submit" class="btn-primary">Submit</button>
			</form>
		</div>
		</div>
		
</body>
</html>