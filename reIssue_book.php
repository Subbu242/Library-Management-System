<?php
	$connection = mysqli_connect("localhost:3308","root","");
	$db = mysqli_select_db($connection,"lms");
	// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
	// $db = mysqli_select_db($connection,"nxn9086_LMS");
	$query = "update issued_books set status = 0 where s_no = $_GET[bno]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Returned successfully...");
	window.location.href = "user_dashboard.php";
</script>