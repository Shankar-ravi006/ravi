<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
	top: 20%;
	margin-left: 40%;


}
.panel-header h2{
	text-align: left;
	background-color: default;
}
.footer{
		background-color:#000; 
padding: 10px 60px 10px 60px; 
border: 1px solid transparent;
margin-top: 600px;
}
	.footer p{
		color: white;
		text-align: center;
	}
	

.panel-footer{
	margin-left: -14px;
}
.text-warning p{
	text-align: left;
	color: red;
	font-style: italic;
	font-size: 17px;
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
			<li><a href="Sign Up.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	
			
		</div>
		</div>
		</nav>
		<div class="panel-header">
						
				<div class="panel panel-primary">
<div class="panel-heading"><h2>Login</h2></div>
			</div>
			<div class="panel-body">
				<p class="text-warning">Login to make a purchase</p>
			<form>
				<div class="form-group">
					<input type="email Id" name="email Id" placeholder="enter email Id" class="form-control" id="email Id">
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="enter password" class="form-control" id="password">
				</div>
			
			<button input type="submit"  class="btn-primary">Login</button>
			
			</form>
			<div class="panel-footer">
			Don't have an account? <a href="Signup.html">Register</a>
		</div>
		
		</div>
		</div>

		<div class="footer">
		<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
	</div>
</body>
</html>