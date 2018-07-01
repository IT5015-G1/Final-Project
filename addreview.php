<?php
include("sql_connect.php");
if(isset($_POST['addReview'])){
	$sql = "INSERT INTO `review` (`review_id`, `movie_id`, `review_title`, `review`, `user_id`, `date`) VALUES (NULL, '".$_GET['movieId']."', '".$_POST['reviewTitle']."', '".$_POST['review']."', '".$_GET['id']."', '".date("D m, Y")."');";

	$result = mysqli_query($mysqli, $sql);

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
		if(isset($_POST['addReview'])){
			if($result){
				echo "<div class='success-pop'>";
		      	echo "<div class='col-md-4 col-md-offset-4 text-center' style='color:#292929;
		                                                                border:1px solid #f1ba18;
		                                                                background-color:#ffffff;
		                                                                box-shadow:10px 5px 10px gray;
		                                                                padding:15px 10px 15px 10px;
		                                                                border-radius:10px;
		                                                                margin-bottom:20px;
		                                                                ''>";
		      	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:#f1ba18'></span> <b>".$_POST['reviewTitle']."</b> has been added to the reviews";
		      	echo "</div>";
		      	echo "</div>";
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
		      	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:#f1ba18'></span> <b>".$_POST['reviewTitle']."</b> has not been added to the reviews";
		      	echo "</div>";
		      	echo "</div>";
			}
		}
		?>
	</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 " style='border: solid #bab6b6 1px;
									  font-family: Glacial Indifference;
									  height: 450px;'>
			<h3><?php
					echo "<a href='viewmovie".$_GET['genreName'].".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."'><span class='glyphicon glyphicon-chevron-left' style='color:#f0ba18'></span></a>"; 
				?>
				Add Review for Movie 
				<?php
						$specificMovie = "SELECT * FROM `movie` JOIN director ON movie.director_id = director.director_id WHERE genre_id=".$_GET['genreId']." AND movie_id=".$_GET['movieId'];
						$result = mysqli_query($mysqli, $specificMovie);

						if(($result->num_rows) != 0){
							while($row = mysqli_fetch_array($result)){
								echo "<b>".$row[1]."</b>";
							}
						}
				?>
			</h3>
			<?php
				echo "<form method = 'POST' action='addreview.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."'>";
			?>
				Movie Review Title
				<input class="form-control" placeholder="Movie Review Title" required="required" name='reviewTitle'> <br>
				Movie Review
				<textarea class="form-control" placeholder="Type Review Here..." rows="6" required="required" name='review'></textarea> <br>
				
				<div class='row text-center' style='margin-bottom:10px; margin-top:30px'>
		  			<button class='btn btnLogin chckinMovieRev' type ='submit' name='addReview'>ADD REVIEW</button><br><br>
		  			<?php
		  				echo "<a href='viewmovie".$_GET['genreName'].".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."' class='btn btnAdd cancelAction'>CANCEL</a>"

		  			?>
	  			</div>
  			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
<script type="text/javascript">
setTimeout(function() {
  $(".success-pop").fadeOut()
}, 2000);

</script>