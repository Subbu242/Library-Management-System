<?php
	session_unset();
	session_destroy();	
	// header("Location: index.php");
?>
<script type="text/javascript">
	window.location.href = "index.php";
</script>