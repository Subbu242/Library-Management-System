<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost:3308","root","");
	$db = mysqli_select_db($connection,"lms");
	// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
	// $db = mysqli_select_db($connection,"nxn9086_LMS");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Book</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert('Book added successfully...');
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
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
	</nav><br>
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
	</nav><br>
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
		<center><h4>Manage Books</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<table class="table table-bordered table-hover" style="background: azure;">
					<thead>
						<tr>
							<th>Name</th>
							<th>Author</th>
							<th>Category</th>
							<th>ISBN No.</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost:3308","root","");
						$db = mysqli_select_db($connection,"lms");
						// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
						// $db = mysqli_select_db($connection,"nxn9086_LMS");
						$query = "select * from books";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['book_name'];?></td>
								<td><?php echo $row['author_id'];?></td>
								<td><?php echo $row['cat_id'];?></td>
								<td><?php echo $row['book_no'];?></td>
								<td><?php echo $row['book_price'];?></td>
								<td><button class="btn" name=""><a href="edit_book.php?bn=<?php echo $row['book_no'];?>">Edit</a></button>
								<button class="btn"><a href="delete_book.php?bn=<?php echo $row['book_no'];?>">Delete</a></button></td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
