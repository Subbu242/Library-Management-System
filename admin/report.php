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
	<title>MESSAGES</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
			alert("Message sent successfully...");
  			window.location.href = "user_dashboard.php";
  		}
  	</script>
</head>
<body style="background-color: #80ced6;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#192128 !important;">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="../assets/librarylogo.jpg" alt="books" width="53px" height="53px">
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
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
		<center><h4>MESSAGES</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
                    <div>
                    <p><?php
                            $connection = mysqli_connect("localhost:3308","root","");
                            $db = mysqli_select_db($connection,"lms");
							// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
							// $db = mysqli_select_db($connection,"nxn9086_LMS");
                            $name = "";
                            $email = "";
                            $mobile = "";
                            $query = "select * from feedbacks where senderEmail != '$_SESSION[email]' AND approval='false' order by time";
                            $query_run = mysqli_query($connection,$query);
                            echo "<table style='border: 1px solid black;'>"; 
                            echo "<tr><th style='border: 1px solid black;'>" . 'USER' . "</th><th style='border: 1px solid black;'>" . 'MESSAGE' . "</th><th style='border: 1px solid black;'><h4>" . 'STATUS' . "</h4></th></tr>";
                            while($row = mysqli_fetch_assoc($query_run)){
                                $senderEmail=$row['senderEmail'];
								$id=$row['id'];
                                $query1 = "select name from users where email = '$senderEmail'";
                                $query_run1 = mysqli_query($connection,$query1);
                                $row1 = mysqli_fetch_assoc($query_run1);
								?>
									<tr>
										<td><?php echo $row1['name'];?></td>
										<td><?php echo $row['message'];?></td>
										<td><button><a href="approve_message.php?bid=<?php echo $row['id'];?>">APPROVE</a></button></td>
									</tr>
								<?php

                                // echo "<tr><td style='border: 1px solid black;'>" . $row1['name'] . "</td><td style='border: 1px solid black;'>" . $row['message'] . "</td><td style='border: 1px solid black;'><button type='submit' name='send_message'>APPROVE</button></td></tr>";
                            } 
                            echo "</table>";
                         ?></p>
                    </div>
					<!-- <button type="submit" name="sendMsg">APPROVE</button> -->
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
