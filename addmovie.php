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
			<h3>Add New Movie</h3>
			Movie Title
			<input class="form-control" placeholder="Title" required="required" name=""> <br>
			Date Released
			<input class="form-control" type="date" required="required" name=""><br>
			Movie Poster
			<input class="form-control" type="file" placeholder="Year Released" required="required" name="">
			<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
	  			<a class='btn btnLogin chckinMovieRev'>ADD MOVIE</a><br><br>
	  			<a class='btn btnAdd cancelAction'>CANCEL</a>
  			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>