<?php
	//genre of the movie
	if(isset($_GET['genreName']) && isset($_GET['genreId'])){
		$genre = $_GET['genreName'];
	}
	//echo $genre;
  	// Create database connection
  	include("sql_connect.php");  	
  		// execute query
  		//$movieCreate = mysqli_query($mysqli, $sql);
   	$genre = lcfirst($genre);

   // Check if image file is a actual image or fake image
   // Check if image file is a actual image or fake image
  	if(isset($_POST["addmovie"])) {
  		$target_dir = "img/".$genre."/";
	   	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	   	$uploadOk = 1;
	   	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));	

  		if(isset($_POST['directorlist']) != "---"){
			$generateDirector = "SELECT * FROM director WHERE directorName = '".$_POST['directorlist']."'";
	  		//echo $sql;

	  		$result = mysqli_query($mysqli, $generateDirector);

			if(($result->num_rows) != 0){
				while($row = mysqli_fetch_array($result)){
					$directorId = $row[0];
					echo $row[0];
				}
			}
	  		// execute query
	  		//$movieCreate = mysqli_query($mysqli, $sql);
		}

		if(isset($_POST['directorNew'])){
			$generateNewDirector = "SELECT * FROM director WHERE directorName = '".$_POST['directorNew']."'";
			$result = mysqli_query($mysqli,$generateNewDirector);
			if(($result->num_rows) != 0){
				while($row = mysqli_fetch_array($result)){
					$directorId = $row[0];
				}
			}else{
				$addD = "INSERT INTO `director` (`director_id`, `directorName`) VALUES (NULL, '".$_POST['directorNew']."');";
		  		$result = mysqli_query($mysqli, $addD);

				if($result){
					$directorId = mysqli_insert_id($mysqli);
				}
		  		// if ($mysqli->query($addD) === TRUE) {
	    	// 		$directorId = $mysqli->director_id;
	    	// 		echo $directorId;
	    	// 	}
			}
			
	  	}

       	// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       	// if($check !== false) {
        //    	$uploadOk = 1;
       	// } else {
        //    	$uploadOk = 0;
       	// }
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
			if(isset($_POST["addmovie"])) {
				//if($movieCreate){
				   	// Check if file already exists
			   	if (file_exists($target_file)) {
			       	$stringErrorExist = "Sorry, file already exists. ";
			       	$uploadOk = 0;
			   	}else{
			   		$stringErrorExist="";
			   	}
			   	// Check file size
			   	if ($_FILES["fileToUpload"]["size"] > 500000) {
			       	$stringErrorLarge = "Sorry, your file is too large. ";
			       	$uploadOk = 0;
			   	}else{
			   		$stringErrorLarge="";
			   	}
			   	// Allow certain file formats
			   	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			   	&& $imageFileType != "gif" ) {
			       	$stringErrorRestrict = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
			       	$uploadOk = 0;
			   	}else{
			   		$stringErrorRestrict="";
			   	}
			   	// Check if $uploadOk is set to 0 by an error
			   	if ($uploadOk == 0) {
			       	$stringUpload = "Sorry, your file was not uploaded.";
			   	// if everything is ok, try to upload file
			   	} else {
			       	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			           $stringUpload = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. ";
			           $sql = "INSERT INTO `movie` (`movie_id`, `movie_title`, `genre_id`, `director_id`, `year`, `image`, `rating`, `aboutMovie`) VALUES (NULL, '".$_POST['movieTitle']."', '".$_GET['genreId']."', '".$directorId."', '".$_POST['movieDate']."', '".$target_file."', '".$_POST['rating']."', '".$_POST['aboutMovie']."');";
				  		//echo $sql;
				  	
				  		// execute query
				  	   $movieCreate = mysqli_query($mysqli, $sql);
			       	} else {
			           $stringUpload = "Sorry, there was an error uploading your file. ";
			       	}
			   	}

			   	echo "<div class='success-pop'>";
		      	echo "<div class='col-md-4 col-md-offset-4 text-center' style='color:#292929;
		                                                                border:1px solid #f1ba18;
		                                                                background-color:#ffffff;
		                                                                box-shadow:10px 5px 10px gray;
		                                                                padding:15px 10px 15px 10px;
		                                                                border-radius:10px;
		                                                                margin-bottom:20px;
		                                                                ''>";
		      	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:#f1ba18'></span> ".
		      																							$stringErrorExist.
		      																							$stringErrorLarge.
		      																							$stringErrorRestrict.
		      																							$stringUpload;
		      	echo "</div>";
		      	echo "</div>";
			    $uploadOk = 0;
				//}
			}

		?>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 addmovies">
			<h3>
				<?php
					echo "<a href='".$genre.".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."'><span class='glyphicon glyphicon-chevron-left' style='color:#f0ba18'></span></a>"; 
				?>
				Add New Movie (<b><?php echo ucfirst($genre); ?></b>)</h3>
			<?php
				echo "<form method = 'POST' action='addmovie.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."' enctype='multipart/form-data'>";
			?>
			<form method = 'POST' action="addmovie.php" enctype="multipart/form-data">
				Movie Title
				<input class="form-control" placeholder="Title" name='movieTitle'> <br>
				Date Released
				<input class='form-control' type="number" placeholder="YYYY" min="1600" max="2018" name='movieDate' style='width:120px;'><br>
				Director
				<div class="radio">
					  <label style='margin-right:20px'><input type="radio" name="direcRadio" value='newDirec'>New Director</label>
					  <label><input type="radio" name="direcRadio" value='direcList'>Director from List</label>
				</div>
				<div class='newD'>
					<input class="form-control" placeholder="Director" name='directorNew'> <br>
				</div>
				<div class='oldD'>
					<select class='form-control' name="directorlist" style='width:250px;'>
						<option>---</option>
						<?php
							$generateDirectors = "SELECT * FROM `director`";
							$result = mysqli_query($mysqli, $generateDirectors);

							if(($result->num_rows) != 0){
								while($row = mysqli_fetch_array($result)){
									echo "<option>".$row[1]."</option>";
								}
							}
						?>
					</select>
					<br>
				</div>
				About Movie
				<textarea class="form-control" placeholder="About Movie" name='aboutMovie'></textarea> <br>
				Movie Poster
				<input class="form-control" type="file" name="fileToUpload" id="fileToUpload"><br>
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
		  			<?php
		  				echo "<a href='".$genre.".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."' type='submit'class='btn btnAdd cancelAction' name='cancelAddMovie'>CANCEL</a>";
		  			?>
		  			
	  			</div>
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

$( document ).ready(function() {
    $(".newD").hide();
    $(".oldD").hide();
});
$(".direcRadio2").click(function(){
    $("newD").hide();
    $("oldD").show();
});

$('input[type="radio"]').click(function(){
	if($(this).attr("value") == "newDirec") { //check value if it is domicilio
        $(".newD").show();
    	$(".oldD").hide();
    } else {
        $(".newD").hide();
    	$(".oldD").show();
    }
});

</script>