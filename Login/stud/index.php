<?php
include_once('style.php');
include_once('../../connect/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['namee'];
	$pass=$_POST['pass'];

	$query= "SELECT * FROM logins WHERE email='$name' and password='$pass'";
	$result=mysqli_query($connection,$query);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		header('location: ../../Student/index.php');
		session_start();
		$_SESSION['is_LoginS']= true;
		$queryOn="INSERT INTO onlinet(id_on) VALUE ('".$row['id']."')";
		$resultOn=mysqli_query($connection,$queryOn);
	}else{
		echo ' <div class="row"> <div class="col-12"> <div class="alert alert-danger"> Not Found it </div></div> </div>';
	}


}

?>


<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Student Login
				</span>

			
				
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                      
						<input class="input100" type="text" name="namee" placeholder="User name">
			
					
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">

						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" >
							Login
						</button>
					</div>
					<div class="container-login100-form-btn m-t-32">
					<a href="signUp.php">sign up</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>