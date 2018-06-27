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
			<br>Hi Guest!
		</div>
	</div>

	<div class="container">
		<ul class="nav nav-tabs navs">
			<li><a href="horror.php">Horror</a></li>
			<li><a href="comedy.php">Comedy</a></li>
			<li><a href="romance.php">Romance</a></li>
			<li class="active"><a href="fantasy.php">Fantasy</a></li>
			<li><a href="action.php">Action</a></li>
		</ul>
		<br>
		<!-- <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p> -->

		<div class="jumbotron">
			<div class="row">
				<div class="col-md-10">
					<h1>Fantasy! Wow Magiic! </h1>
					<p>Some description here...</p>
					<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
				</div>
				<div class="col-md-2">
					<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
			  			<a href="addmovie.php" class='btn btnLogin chckinMovieRev'>ADD MOVIE</a>
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
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
						<img src="img/logoo.png" class="moviePoster">
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