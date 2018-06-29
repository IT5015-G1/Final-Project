<?php
	//genre of the movie
	if(isset($_GET['genreName']) && isset($_GET['genreId'])){
		$genre = $_GET['genreName'];
	}
	//echo $genre;
  // Create database connection
  include("sql_connect.php");


  // BEFORE INSERTING CHECK FIRST IF THE MOVIE EXISTS IN THE DATABASE OR NOT :D


  // If upload button is clicked ...
  if (isset($_POST['addmovie'])) {
  	// image file directory
  	//$target = "img/Genre/".basename($image);
  	$target = "img/".lcfirst($genre)."/".basename($_FILES['image']['name']);
  	echo $target;

  	$sql = "INSERT INTO `movie` (`movie_id`, `movie_title`, `genre_id`, `director_id`, `year`, `image`, `rating`) VALUES (NULL, '".$_POST['movieTitle']."', '1', '1', '1998', '".$target."', '".$_POST['rating']."');";
  	
  	// execute query
  	$movieCreate = mysqli_query($mysqli, $sql);
  	if($movieCreate){
  		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	  		echo "Image uploaded successfully";
	  	}else{
	  		echo "Failed to upload image";
	  	}
  	}
  	
  }else if(isset($_POST['cancelAddMovie'])){
  	header("location:".$genre.".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']);
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
		<div class="col-md-4 addmovies" style='height: 510px;'>
			<h3>Add New Movie (<b><?php echo $genre; ?></b>)</h3>
			<?php
				echo "<form method = 'POST' action='addmovie.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."' enctype='multipart/form-data'>";
			?>
			<form method = 'POST' action="addmovie.php" enctype="multipart/form-data">
				Movie Title
				<input class="form-control" placeholder="Title" name='movieTitle'> <br>
				Date Released
				<input class="form-control" type="date" name='movieDate'><br>
				Movie Poster
				<input class="form-control" type="file" name='image'><br>
				Rating
				<select class='form-control' name='rating' style='width:60px;'>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<div class='row text-center' style='margin-bottom:10px; margin-top:40px'>
		  			<button type='submit' class='btn btnLogin chckinMovieRev' name='addmovie'>ADD MOVIE</button><br><br>
		  			<button type='submit'class='btn btnAdd cancelAction' name='cancelAddMovie'>CANCEL</button>
	  			</div>
  			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>