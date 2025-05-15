<?php
	session_start();
?>
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
	#main_content{
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
<body style="background-image: aqua;background-image: linear-gradient(#e3d7d7, #cce3b0, #e4e6d9);">
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
		        <a class="nav-link" href="signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
    <div>
    <div>
        <center>
        <h2> What we provide? </h2>
        </center>
    </div>
    <div class="card-group rounded-top pl-5">
        <div class="card text-center ml-2 mr-2" style="width: 18rem;">
        <center>
        <img class="card-img-top" src="assets/furniture.png" alt="Card image cap" style="width: inherit;width:40%;">
        </center>
        <div class="card-body">
                <h5 class="card-title">Full furniture</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and  padding-left: 148px;  make up the bulk of the card's content.</p> -->
            </div>
        </div>
        <div class="card text-center ml-2 mr-2" style="width: 18rem;">
             <center>
            <img class="card-img-top" src="assets/wifilogo.jpg" alt="Card image cap" style="width: inherit;width:40%;">
            </center>
            <div class="card-body">
                <h5 class="card-title">Free Wi-fi</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
        <div class="card text-center ml-2 mr-2" style="width: 18rem;">
        <center>
        <img class="card-img-top" src="assets/newspaper.png" alt="Card image cap" style="width: inherit;width:40%; ">
        </center>
        <div class="card-body">
                <h5 class="card-title">News Papers</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
</div>
<div class="card-group mt-4 rounded-top pl-5">
        <div class="card text-center ml-2 mr-2" style="width: 18rem;">
        <center>
            <img class="card-img-top" src="assets/discussionroom.jpg" alt="Card image cap" style="width: inherit;width:40%; ">
            </center>
            <div class="card-body">
                <h5 class="card-title">Discussion Room</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
        <div class="card text-center ml-2 mr-2" style="width: 18rem;">
        <center>
        <img class="card-img-top" src="assets/rowater.jpg" alt="Card image cap" style="width: inherit;width:40%; ">
        </center>
        <div class="card-body">
                <h5 class="card-title">RO Water</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
        <div class="card text-center ml-2 mr-2" style="width: 18rem;">
        <center>
        <img class="card-img-top" src="assets/pfven.jpg" alt="Card image cap" style="width: inherit;width:60%; ">
        </center>
        <div class="card-body">
                <h5 class="card-title">Peacefull Environment</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
        </div>
            
        </div>
    </div>
    <div>
        <center>
        <h2 style="margin-top: 19px;"> Library Timings </h2>
            <div>
                <div>Opening: 8:00 AM</div>
                <div>Closing: 8:00 PM</div>
                <div>(Sunday Off)</div>
            </div> 
        </center>

    </div>
</body>
</html>