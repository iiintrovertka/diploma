<?php

include '../config.php';

session_start();

error_reporting(0);

if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sql = "INSERT INTO comments (name, email, phone, message)
			VALUES ('$name', '$email', '$phone', '$message')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$_SESSION['msg'] = 'Message sent!';
		$message = "";
	}else{
		echo "<script>alert('Woops! Something Wrong Went.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="shortcut icon" type="favicon.ico" href="AviaTrip-icon-1024x1024.ico">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="" method="POST">
				<span class="contact100-form-title">
					Contact Us
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="name" name="name" placeholder="Enter Your Name" id="name" 
						value = <?php if($_SESSION['usep']){ echo $_SESSION['usep']['fname']." ".$_SESSION['usep']['lname'];}else if($_SESSION['user']){ echo $_SESSION['user']['fname']." ".$_SESSION['usep']['lname'];} ?>> 
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email " value = <?php 
						if ($_SESSION['user']) { 
							echo $_SESSION['user']['email'];
						}
						?>>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="tel" name="phone" placeholder="Enter Number Phone" value = <?php if($_SESSION['usep']){ echo $_SESSION['usep']['phone'];}else if($_SESSION['user']){ echo $_SESSION['user']['phone'];} ?>>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<p class="msg" style="color: green">
						<?php if ($_SESSION['msg']) { echo $_SESSION['msg'];} unset($_SESSION['msg']);?>
					</p>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="send">
						<span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
