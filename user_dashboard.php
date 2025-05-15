<?php
	session_start();
	require("admin/functions.php");
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost:3308","root","");
		$db = mysqli_select_db($connection,"lms");
		// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
		// $db = mysqli_select_db($connection,"nxn9086_LMS");
		$user_issue_book_count = 0;

		$query1 = "select id from users where email = '$_SESSION[email]'";
		$query1_run = mysqli_query($connection,$query1);
		$row1 = mysqli_fetch_assoc($query1_run);
		$id=$row1['id'];

		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $id and status = 1";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
		}
		return($user_issue_book_count);
	}
	function get_books_count(){
		$connection = mysqli_connect("localhost:3308","root","");
		$db = mysqli_select_db($connection,"lms");
		// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
		// $db = mysqli_select_db($connection,"nxn9086_LMS");
		$user_issue_book_count = 0;

		$query1 = "select count(*) as book_count from books";
		$query1_run = mysqli_query($connection,$query1);
		$row1 = mysqli_fetch_assoc($query1_run);
		$user_book_count = $row1['book_count'];
		return($user_book_count);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>	  
</head>
<body style="background-color: #80ced6;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#192128 !important;">
		<div class="container-fluid">
			<div class="navbar-header">
			    <img src="assets/librarylogo.jpg" alt="books" width="53px" height="53px">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
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
		        <a class="nav-link logout" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and closes at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3" style="margin: 0px;">
			<div class="card bg-light" style="width: 300px;">
				<div class="card-header">Books Borrowed</div>
				<div class="card-body">
					<p class="card-text">No of books Borrowed: <?php echo get_user_issue_book_count();?></p>
					<?php
						$connection = mysqli_connect("localhost:3308","root","");
						$db = mysqli_select_db($connection,"lms");
						// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
						// $db = mysqli_select_db($connection,"nxn9086_LMS");
						$query = "select id from users where email='$_SESSION[email]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
					?>
					<a class="btn btn-success green1" href="view_issued_book.php?uid=<?php echo $row['id'];?>">View Borrowed Books</a>
					<?php
				}
				?>
				</div>
			</div>
		</div>
		
		<div class="col-md-3" style="margin: 0px;">
			<div class="card bg-light" style="width: 300px;">
				<div class="card-header">Borrow Book</div>
				<div class="card-body">
					<p class="card-text">No of books: <?php echo get_books_count();?></p>
					<a class="btn btn-success green2" href="borrow_book.php">Borrow Book</a>
				</div>
			</div>
		</div>

		
		<div class="col-md-3" style="margin: 0px;">
			<div class="card bg-light" style="width: 300px;">
				<div class="card-header">Return Book</div>
				<div class="card-body">
					<p class="card-text">No of books Borrowed: <?php echo get_user_issue_book_count();?></p>
					<?php
						$connection = mysqli_connect("localhost:3308","root","");
						$db = mysqli_select_db($connection,"lms");
						
						// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
						// $db = mysqli_select_db($connection,"nxn9086_LMS");
						$query = "select id from users where email='$_SESSION[email]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
					?>
					<a class="btn btn-success green3" href="view_borrowed_book.php?uid=<?php echo $row['id'];?>">View Borrowed Books</a>
					<?php
				}
				?>
				</div>
			</div>
		</div>

		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Categories</div>
				<div class="card-body">
					<p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
					<a class="btn btn-warning yellow" href="admin/Regcat.php">View Categories</a>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-3" style="margin: 0px;">
			<div class="card bg-light" style="width: 300px; height:170px;">
				<div class="card-header">Report to Admin</div>
				<center>
					<div class="card-body">
						<a class="btn btn-success green4" href="report.php">Report</a>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>
</html>