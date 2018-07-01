<?php
include("sql_connect.php");
if(isset($_POST['email']) && isset($_POST['password'])){
  // $accountname = $_POST['accountname'];
	//echo $_POST['password'];
  	$password = md5($_POST['password']);


  	$loginAcc = mysqli_query($mysqli, "SELECT * FROM `user` WHERE email = '".$_POST['email']."' AND password = '".$password."'");
  	//echo "SELECT * FROM `user` WHERE email = '".$_POST['email']."' AND password = '".$password."'";
 }
?>
<html>
<head>
	<link rel='icon' href="img/logo.png">
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
			if(isset($_POST['email']) && isset($_POST['password'])){
	      		if($loginAcc){
			      	$x = mysqli_num_rows($loginAcc);
			      	if($x==1){
			      		$data = mysqli_fetch_row($loginAcc);	
			        	session_start(); //to acces session/super global variables
			        	$_SESSION['user'] = urldecode($_GET['firstName']);
			        	header("location:horror.php?id=".$data[0]."&&firstName=".$data[1]."&&genreId=1&&genreName=Horror");
			      	}else{
			        	echo "<div class='success-pop'>";
				      	echo "<div class='col-md-4 col-md-offset-4 text-center' style='color:#292929;
				                                                                border:1px solid #f1ba18;
				                                                                background-color:#ffffff;
				                                                                box-shadow:10px 5px 10px gray;
				                                                                padding:15px 10px 15px 10px;
				                                                                border-radius:10px;
				                                                                margin-bottom:20px;
				                                                                ''>";
				      	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:#f1ba18'></span> Wrong Email/Password!";
				      	echo "</div>";
				      	echo "</div>";
			      	}
			  	}
			}else if (isset($_GET['email'])){
				echo "<div class='success-pop'>";
		      	echo "<div class='col-md-4 col-md-offset-4 text-center' style='color:#292929;
		                                                                border:1px solid #f1ba18;
		                                                                background-color:#ffffff;
		                                                                box-shadow:10px 5px 10px gray;
		                                                                padding:15px 10px 15px 10px;
		                                                                border-radius:10px;
		                                                                margin-bottom:20px;
		                                                                ''>";
		      	echo "<span class='glyphicon glyphicon-user' style='color:#f1ba18'></span> <b>".urldecode($_GET['firstName'])."</b> has been successfully registered!";
		      	echo "</div>";
		      	echo "</div>";
	      	}
		?>
	</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 login">
			<h3>Reviewer Login</h3>
			<form method = 'POST'>
			<?php
				if(isset($_GET['email'])){
					echo "<input class='form-control' value='".$_GET['email']."' required='required' name='email'> <br>";
				}else{
					echo "<input class='form-control' placeholder='Email' required='required' name='email'> <br>";
				}
				
			?>
			<input type = 'password' class="form-control" placeholder="Password" required="required" name='password'>
			<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
	  			<button type='submit' class='btn btnLogin chckinMovieRev'>LOGIN</button>
  			</div>
  			<center><a href="register.php" class='btn designCreateAccoun'>CREATE ACCOUNT</a></center>
  			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script type="text/javascript">
setTimeout(function() {
  $(".success-pop").fadeOut()
}, 2000);

</script>