<?php
include("sql_connect.php");
if(isset($_POST['reviewTitle'])){
	$sql = "UPDATE `review` SET `review_title`='".$_POST['reviewTitle']."' ,`review`='".$_POST['review']."',`date`= date_format(CURDATE(),'%M %e, %Y') WHERE review_id=".$_GET['reviewId'];
	//echo $sql;
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
		if(isset($_POST['reviewTitle'])){
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
		      	echo "<span class='glyphicon glyphicon-ok' style='color:#f1ba18'></span> <b>".$_POST['reviewTitle']."</b> has been edited";
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
		      	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:#f1ba18'></span> <b>There's an error in updating ".$_POST['reviewTitle']."</b>";
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
									  height: 465px;'>
			<h3><?php
					echo "<a href='viewmovie".$_GET['genreName'].".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."'><span class='glyphicon glyphicon-chevron-left' style='color:#f0ba18'></span></a>"; 
				?>
				Edit Review for Movie 
				<?php
						// $specificMovie = "SELECT * FROM `movie` JOIN director ON movie.director_id = director.director_id WHERE genre_id=".$_GET['genreId']." AND movie_id=".$_GET['movieId'];
						// $result = mysqli_query($mysqli, $specificMovie);

						// if(($result->num_rows) != 0){
						// 	while($row = mysqli_fetch_array($result)){
						// 		echo "<b>".$row[1]."</b>";
						// 	}
						// }
				?>
			</h3>
			<?php
				echo "<form method = 'POST' action='editReview.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."&&reviewId=".$_GET['reviewId']."'>";
			?>
				<?php
					echo "Movie Review Title";
					$sql = "SELECT * FROM `review` JOIN user ON user.user_id = review.user_id WHERE review_id=".$_GET['reviewId'];
					$result = mysqli_query($mysqli, $sql);
					$row = mysqli_fetch_array($result);

					//print_r($row);
					// if(($result->num_rows) != 0){
					// 	while($row = mysqli_fetch_row($result)){
						if($row[2] == ""){
							echo "<input class='form-control' required='required' value ='' name='reviewTitle'> <br>";
						}else{
							echo "<input class='form-control' required='required' value ='".$row[2]."' name='reviewTitle'> <br>";
						}
					
					echo "Movie Review";
						if($row[3] == ""){
							echo "<textarea class='form-control' rows='6' required='required' name='review'></textarea> <br>";
						}else{
							echo "<textarea class='form-control' rows='6' required='required' name='review'>".$row[3]."</textarea> <br>";
						}	
					echo "<div class='row text-center' style='margin-bottom:10px; margin-top:30px'>";
				  	echo "<button class='btn btnLogin chckinMovieRev' type ='submit' name='addReview'>EDIT REVIEW</button><br><br>";
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