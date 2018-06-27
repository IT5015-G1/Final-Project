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
			<h3>Add Review for Movie *Movie Title*</h3>
			Movie Review
			<textarea class="form-control" placeholder="Type Review Here..." rows="6" required="required" name=""></textarea> <br>
			Movie Rating
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Rating
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li><a href="#">5</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">1</a></li>
			  </ul>
			</div>
			<div class='row text-center' style='margin-bottom:10px; margin-top:30px'>
	  			<a class='btn btnLogin chckinMovieRev'>ADD REVIEW</a><br><br>
	  			<a class='btn btnAdd cancelAction'>CANCEL</a>
  			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>