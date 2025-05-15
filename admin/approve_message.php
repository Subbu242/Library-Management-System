<?php
	$connection = mysqli_connect("localhost:3308","root","");
	$db = mysqli_select_db($connection,"lms");
	// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
	// $db = mysqli_select_db($connection,"nxn9086_LMS");
	$query = "update feedbacks set approval = 'true' where id = $_GET[bid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Enquiry approved successfully...");
	window.location.href = "admin_dashboard.php";
</script>