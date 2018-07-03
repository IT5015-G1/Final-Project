<?php
include("sql_connect.php");
?>
<html>
<head>
	<link rel='icon' href="img/logo.png">
	<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='bootstrap/css/design.css'>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title>Movie Review</title>
	<style type="text/css">
		.star{
			height: 30px;
		}
	</style>
</head>

<body>
	<!-- <br><br> -->
	<div class='row'>
		<div class="col-md-2">
			<img src="img/logoo.png" class="logoPicHomepage">
		</div>
		<div class="col-md-8"></div>
		<div class="col-md-2 header">
			<br>Hi 
			<?php 
				if(isset($_GET['id']) && isset($_GET['firstName'])){
					echo "<b>".urldecode($_GET['firstName'])."</b>";
				}else{
					echo "Guest";
				}
				
			?>!
			<!-- Single button -->
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='height:30px'>
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" style='min-width: 100px;'>
			    <li><a href="index.php"><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
			  </ul>
			</div>
		</div>
	</div>

	<div class="container">
		<ul class="nav nav-tabs navs">
			<?php
				if(isset($_GET['id']) && isset($_GET['firstName'])){
					$generateGenres = "SELECT * FROM `genre`";
					$result = mysqli_query($mysqli, $generateGenres);

					if(($result->num_rows) != 0){
						while($row = mysqli_fetch_array($result)){
							switch($row[1]){
								case "Horror": 
									echo "<li><a href='horror.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$row[0]."&&genreName=".$row[1]."'>".$row[1]."</a></li>";
									break;
								case "Comedy":
									echo "<li class='active'><a href='comedy.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$row[0]."&&genreName=".$row[1]."'>".$row[1]."</a></li>";
									break;
								case "Action":
									echo "<li><a href='action.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$row[0]."&&genreName=".$row[1]."'>".$row[1]."</a></li>";
									break;
								case "Fantasy":
									echo "<li><a href='fantasy.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$row[0]."&&genreName=".$row[1]."'>".$row[1]."</a></li>";
									break;
								case "Romance":
									echo "<li><a href='romance.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$row[0]."&&genreName=".$row[1]."'>".$row[1]."</a></li>";
									break;

							}							
						}

					}
				}else{
					echo "<li class='active'><a href='horror.php'>Horror</a></li>";
					echo "<li><a href='comedy.php'>Comedy</a></li>";
					echo "<li><a href='romance.php'>Romance</a></li>";
					echo "<li><a href='fantasy.php'>Fantasy</a></li>";
					echo "<li><a href='action.php'>Action</a></li>";
				}
			?>
		</ul>
		<br>
		<!-- <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p> -->

		<div class="jumbotron">
			<div class="row">
				<div class="col-md-6">
					<?php
						$specificMovie = "SELECT * FROM `movie` JOIN director ON movie.director_id = director.director_id WHERE genre_id=".$_GET['genreId']." AND movie_id=".$_GET['movieId'];
						$result = mysqli_query($mysqli, $specificMovie);

						if(($result->num_rows) != 0){
							while($row = mysqli_fetch_array($result)){
								echo "<h2>".$row[1]."</h2>";
								echo "<center><img src='".$row[5]."' height='401.99px' width='278.99px'></center><br>";
								echo "Rating ";
								for($i=0; $i<5; $i++){
									if($i<$row[6]){
										echo "<span class='glyphicon glyphicon-star' style='color:orange; font-size:1.5em'></span>";
									}else{
										echo "<span class='glyphicon glyphicon-star' style= 'font-size:1.5em'></span>";
									}
								}
								echo "<br>";
								echo "<b>Director</b> ".$row[9]."<br>";
								
								echo "<b>About this movie</b><br>";
								echo $row[7];
							}
						}
					?>
					
				</div>


				<br>
				<h3>Reviews</h3>
				<div class="col-md-6">
					<?php
					

				?>
				<div style='height:70%; overflow-y: scroll;'>
					<?php
						$sql = "SELECT * FROM `review` JOIN user ON user.user_id = review.user_id WHERE movie_id=".$_GET['movieId'];
						$result = mysqli_query($mysqli, $sql);

						if(($result->num_rows) != 0){
							while($row = mysqli_fetch_array($result)){
								if($row[2] == ""){
									echo "<h4>NO REVIEW TITLE</h4>";
								}else{
									echo "<h4>".$row[1]."</h4>";
								}
								if($row[6] == $_GET['id']){
									echo "<i><b>".$row[7]." ".$row[8]."</b> ".$row[5]."</i>
									<a href='editReview.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."&&reviewId=".$row[0]."' style='padding:5px; color:#f0b518;'><span class='glyphicon glyphicon-plus'></span></a><br>";
								}else{
									echo "<i><b>".$row[7]." ".$row[8]."</b> ".$row[5]."</i><br>";
								}
								echo $row[3]." <hr>";
							}
						}

					?>
				</div>

					<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
						<?php
							$sql = "SELECT * FROM `review` WHERE user_id = ".$_GET['id']." AND movie_id=".$_GET['movieId'];
							$result = mysqli_query($mysqli, $sql);
							if(($result->num_rows) != 0){
								echo "<button class='btn btnLogin chckinMovieRev' disabled>ADD REVIEW</button>";
							}else{
								echo "<a href='addreview.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$_GET['movieId']."' class='btn btnLogin chckinMovieRev'>ADD REVIEW</a>";
							}
							
						?>
			  			
		  			</div><br>
				</div>
			</div>
			<br>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
setTimeout(function() {
  $(".success-pop").fadeOut()
}, 2000);

</script>