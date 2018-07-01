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
				}
			?>
		</ul>
		<br>
		<!-- <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p> -->

		<div class="jumbotron">
			<div class="row">
				<div class="col-md-10">
					<h1>Comedy Movies</h1>
					<p>films in which the main emphasis is on humor. These films are designed to make the audience laugh through amusement and most often work by exaggerating characteristics for humorous effect</p>
					<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
				</div>
				<div class="col-md-2">
					<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
			  			<?php
							echo "<a href='addmovie.php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."' class='btn btnLogin chckinMovieRev'>ADD MOVIE</a>";
						?>
		  			</div><br>
				</div>
			</div>
		</div>

		<!--Horizontal scroll-->
		<div class="row" id="rowsize">
			<div class="col-xs-1">
				<span id="panLeft" class="panner" data-scroll-modifier='-1'><img src="img/arrowleft.png"></span>
			</div>
			<div class="col-xs-10">
				<div id="container">
					<div id="slide">
						<?php
							$actionImages = "SELECT * FROM `movie` WHERE genre_id=".$_GET['genreId'];
							$result = mysqli_query($mysqli, $actionImages);

							if(($result->num_rows) != 0){
								while($row = mysqli_fetch_array($result)){
									echo "<a href='viewmovie".$_GET['genreName'].".php?id=".$_GET['id']."&&firstName=".$_GET['firstName']."&&genreId=".$_GET['genreId']."&&genreName=".$_GET['genreName']."&&movieId=".$row[0]."'><img src='".$row[5]."' class='moviePoster' width ='161.99px' height='254.99px' style='margin-right:10px'></a>";
								}
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-1">
				<span id="panRight" class="panner" data-scroll-modifier='1'><img src="img/arrowright.png"></span>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	/*-----horizontal scroll------*/
(function () {

    var scrollHandle = 0,
        scrollStep = 5,
        parent = $("#container");

    //Start the scrolling process
    $(".panner").on("mouseenter", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);        

        $(this).addClass('active');

        startScrolling(direction, scrollStep);
    });

    //Stop the scrolling
    $(".panner").on("mouseleave", function () {
        stopScrolling();
        $(this).removeClass('active');
    });

    //Actual handling of the scrolling
    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = parent.scrollLeft() + (scrollStep * modifier);

                parent.scrollLeft(newOffset);
            }, 10);
        }
    }

    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }

}());
</script>