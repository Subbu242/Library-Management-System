<?php
	require("functions.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<!-- <body id = "admin_dash_background"> -->
<body style="background-color: #80ced6;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#192128 !important;">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="../assets/librarylogo.jpg" alt="books" width="53px" height="53px"> 
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
	  	<div class="card-group mt-4 rounded-top">
		    <div class="col-sm-4">
				<div class="col-md-3 " style="margin: 0px">
					<div class="card text-center bg-light" style="width: 390px;">
						<div class="card-header">Registered Users</div>
						<div class="card-body">
							<p class="card-text">No. total Users: <?php echo get_user_count();?></p>
							<a class="btn btn-success" href="Regusers.php">View Registered Users</a>
						</div>
					</div>
				</div>
		    </div>
			<div class="col-sm-4">
				<div class="col-md-3" style="margin: 0px">
					<div class="card text-center bg-light" style="width: 390px;">
						<div class="card-header">Availability</div>
						<div class="card-body">
							<p class="card-text">No of books available: <?php echo get_book_count();?></p>
							<a class="btn btn-success" href="Regbooks.php">View All Books</a>
						</div>
					</div>
				</div>
				</div>
			<div class="col-sm-4">
				<div class="col-md-3" style="margin: 0px">
					<div class="card text-center bg-light" style="width: 390px;">
						<div class="card-header">Categories</div>
						<div class="card-body">
							<p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
							<a class="btn btn-success" href="Regcat.php">View Categories</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	    <div class="card-group mt-4 rounded-top">
			<div class="col-sm-4">
				<div class="col-md-3" style="margin: 0px">
					<div class="card text-center bg-light" style="width: 390px;">
						<div class="card-header">Authors</div>
						<div class="card-body">
							<p class="card-text">No of Authors: <?php echo get_author_count();?></p>
							<a class="btn btn-success" href="Regauthor.php">View Authors</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-md-3" style="margin: 0px">
					<div class="card text-center bg-light" style="width: 390px;">
						<div class="card-header">Books Issued</div>
						<div class="card-body">
							<p class="card-text">No of book issued: <?php echo get_issue_book_count();?></p>
							<a class="btn btn-success" href="view_issued_book.php">View Issued Books</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-md-3" style="margin: 0px;">
					<div class="card text-center bg-light" style="width: 390px; height:170px;">
						<div class="card-header">Give Feedback</div>
						<center>
							<div class="card-body">
								<a class="btn btn-success" href="report.php">Feedback</a>
							</div>
						</center>
					</div>
				</div>
			</div>
	    </div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>