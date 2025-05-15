<?php
require 'vendor/autoload.php';
function sendEmail($recipient, $subject, $message) {
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'mail.nxn9086.uta.cloud';
    $mail->SMTPAuth = true;
    $mail->Username = 'univcanvas@nxn9086.uta.cloud';
    $mail->Password = '0n-IE2-W#A5m';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('univcanvas@nxn9086.uta.cloud', 'Canvas App');
    $mail->addAddress($recipient);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    try {
        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }
    catch(Exception $e){
        echo json_encode(['success' => false, 'message' => 'Database connection error: ' . $e->getMessage()]);
    }
  
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LMS | Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<style type="text/css">
	#main_content{
		margin: auto;
		width: 100%;
		padding: 10px;
		/* padding: 50px; */
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}

</style>
<body id="indexBody">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#192128 !important;">
		<div class="container-fluid">
			<div class="navbar-header">
			    <img src="assets/librarylogo.jpg" alt="books" width="53px" height="53px"> 
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
			  <li class="nav-item">
		        <a class="nav-link" href="services.php">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../LMS/admin/index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
			    <i class="fa fa-sign-in" aria-hidden="true"></i>
		        <a class="nav-link" href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class= "font-weight-bold" style="text-shadow:0 0 3px #FFF, 0 0 5px #FFF;">Note: This is library mangement system. Library opens at 8:00 AM and closes at 8:00 PM</marquee></span><br><br>
	<div class="row" style="width: 69%;">
		<div class="col-md-8" id="main_content">
			<center><h3>Forgot Password</h3>
			<form action="" method="post" id = "form_login">
				<div class="form-group">
					<input placeholder = "Enter your email address" type="text" style = "width:75% !important" name="email" class="form-control" required>
				</div>
				
				<button type="submit" name="login" class="btn btn-primary">Submit</button></center>	
			</form>

			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost:3308","root","");
					$db = mysqli_select_db($connection,"lms");
					// $connection = mysqli_connect("nxn9086.uta.cloud","nxn9086_advse","Lms@advse");
					// $db = mysqli_select_db($connection,"nxn9086_LMS");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					// $row = mysqli_fetch_assoc($query_run);
					// $password=$row['password'];
                    if($row = mysqli_fetch_assoc($query_run))
                    {
                        $isSuccess=sendEmail($_POST['email'],'Your password is:',$row['password']);
                        if($isSuccess)
                        {
                            ?>
                            <script>
                                alert('Password has been sent to your mail');
                                window.location.href='index.php';
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <script>
                                alert('Password sending failed');
                            </script>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <script>
                                alert('User with the email not found');
                            </script>
                            <?php
                    }
				}
			?>
		</div>
	</div>
</body>
</html>