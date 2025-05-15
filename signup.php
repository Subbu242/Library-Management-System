<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#register_background
	{
		background-image: url('assets/librarybackground.jpg');
        background-repeat: no-repeat;
		background-size: 100% 100%;

	}
	#main_content{
		width: 75% !important;
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
</style>
<body id = "register_background">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#192128 !important;">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="assets/librarylogo.jpg" alt="books" width="53px" height="53px">
				<a class="navbar-brand" href="#">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
		        <a class="nav-link" href="services.php">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee style="text-shadow:0 0 3px #FFF, 0 0 5px #F2F0F0;">Note: This is library mangement system. Library opens at 8:00 AM and closes at 8:00 PM</marquee></span><br><br>
	<div class="row align-items-center"  style="margin-bottom: 35px;">
	
		<div class="col-md-6 pb-4 pt-4 " id="main_content" >
		<center><h3>User Registration Form</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control"  style = "width:75% !important" required>
				</div>
				<div class="form-group"> 
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control"  style = "width:75% !important" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control"  style = "width:75% !important" required>
				</div>
				<div class="form-group">
					<label for="mobile">Mobile:</label>
					<input type="text" name="mobile" class="form-control"  style = "width:75% !important" required>
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<textarea name="address" class="form-control"  style = "width:75% !important" required></textarea> 
				</div>
				<center><button type="submit" class="btn btn-primary">Register</button>	</center>
			</form>
		</div>
	</div>
</body>
</html>