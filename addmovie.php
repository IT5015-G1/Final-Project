<?php
  // Create database connection
  include("sql_connect.php");

  // If upload button is clicked ...
  if (isset($_POST['addmovie'])) {

  	// image file directory
  	//$target = "img/Genre/".basename($image);
  	$genre = "Horror";
  	$target = "img/".$genre."/".basename($_FILES['image']['name']);

  	$sql = "INSERT INTO `movies` (`movie_id`, `movie_name`, `year_released`, `genre_id`, `director_id`, `movie_img`) VALUES (NULL, '".$_POST['movieTitle']."', '".$_POST['movieDate']."', '1', '1', '".$target."')";
  	echo $sql;
  	// execute query
  	$movieCreate = mysqli_query($mysqli, $sql);
  	if($movieCreate){
  		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	  		echo "Image uploaded successfully";
	  	}else{
	  		echo "Failed to upload image";
	  	}
  	}
  	
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
	</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 addmovies">
			<h3>Add New Movie (<b>Genre</b>)</h3>
			<form method = 'POST' action="addmovie.php" enctype="multipart/form-data">
				Movie Title
				<input class="form-control" placeholder="Title" required="required" name='movieTitle'> <br>
				Date Released
				<input class="form-control" type="date" required="required" name='movieDate'><br>
				Movie Poster
				<input class="form-control" type="file" required="required" name='image'>
				<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
		  			<button type='submit' class='btn btnLogin chckinMovieRev' name='addmovie'>ADD MOVIE</button><br><br>
		  			<button type='submit'class='btn btnAdd cancelAction'>CANCEL</button>
	  			</div>
  			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>