<?php
	session_start();
	$connection = mysqli_connect("localhost:3308","root","");
	$db = mysqli_select_db($connection,"lms");
	// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
	// $db = mysqli_select_db($connection,"nxn9086_LMS");
	$password = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update admins set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Updated successfully...");
			window.location.href = "admin_dashboard.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Wrong Admin Password...");
			window.location.href = "change_password.php";
		</script>
		<?php
	}
?>
