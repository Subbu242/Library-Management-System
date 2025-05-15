<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost:3308","root","");
	$db = mysqli_select_db($connection,"lms");
	// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
	// $db = mysqli_select_db($connection,"nxn9086_LMS");
	$book_name = "";
	$author = "";
	$book_no = "";
	$student_name = "";
	$query = "select issued_books.s_no,issued_books.book_name,issued_books.book_author,users.name from issued_books,users where issued_books.status = 1 and users.id = $_GET[uid] and issued_books.student_id = users.id ";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Borrowed Books</title>
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
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
		<center><h4>Borrowed Book's Details</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="" method='post'>
				<table class="table-bordered" width="900px" style="text-align: center;  background: azure;">
						<tr>
							<th>Name</th>
							<th>Author</th>
							<!-- <th>Number</th> -->
							<th>Student Name</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['book_name'];?></td>
							<td><?php echo $row['book_author'];?></td>
							<!-- <td><?php echo $row['book_no'];?></td> -->
							<td><?php echo $row['name'];?></td>
							<td><button><a href="reIssue_book.php?bno=<?php echo $row['s_no'];?>">RETURN</a></button></td>
						</tr>

					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
<?php
	if(isset($_POST['reIssue'])){
		$connection = mysqli_connect("localhost:3308","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "update authors set author_name = '$_POST[author_name]' where author_id = $_GET[aid]";
		$query_run = mysqli_query($connection,$query);
		?>
		<script>									
			window.location.href = "manage_author.php";
		</script>
		<?php
		// header("location:manage_author.php");
	}
?>
