<?php
include("sql_connect.php");
if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])){
  // $accountname = $_POST['accountname'];
  	$password = md5($_POST['password']);

  	$registerAcc = mysqli_query($mysqli, "INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`) 
  									VALUES (NULL, '".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['email']."', '".$password."')");

}
?>
<html>
<head>
	<link rel='icon' href="img/logo.png">
	<link rel='stylesheet' href='css/loader.css'>
	<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='bootstrap/css/design.css'>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title>Movie Review</title>
</head>

<body>
	<!-- <br><br> -->
	<div class='row'>
		<center><img src="img/logoo.png" class="logoPic"></center>
		<?php
			if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])){
				if($registerAcc){
			      	//sleep(10);
	    			header("Location: index.php?email=".$_POST['email']."&&firstName=".$_POST['firstName'], true, 303);
				}
			}
		?>
	</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 register">
			<h3>Create Your Account</h3>
			<form method = 'POST' action='register.php'>
				<input class="form-control" placeholder="Firstname" required="required" name="firstName"> <br>
				<input class="form-control" placeholder="Lastname" required="required" name="lastName"> <br>
				<input class="form-control" placeholder="Email" required="required" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="e.g. emailname@gmail.com"> <br>
				<input type='password' class="form-control" placeholder="Password" required="required" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters">
				<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
		  			<button type='submit' class='btn btnLogin chckinMovieRev'>CREATE AN ACCOUNT</button>
	  			</div>
  			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
