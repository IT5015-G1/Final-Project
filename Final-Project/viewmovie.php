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
			<br>Hi Guest!
		</div>
	</div>

	<div class="container">
		<ul class="nav nav-tabs navs">
			<li class="active"><a href="horror.php">Horror</a></li>
			<li><a href="comedy.php">Comedy</a></li>
			<li><a href="romance.php">Romance</a></li>
			<li><a href="fantasy.php">Fantasy</a></li>
			<li><a href="action.php">Action</a></li>
		</ul>
		<br>
		<!-- <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p> -->

		<div class="jumbotron"">
			<div class="row">
				<div class="col-md-6">
					<h2>Insidious</h2>
					<center><img src="img/insidious.jpg"></center>
					Rating <img src="img/4stars.png" class="star"><br>
					<b>About this movie</b><br>
					Parents (Patrick Wilson, Rose Byrne) take drastic measures when it seems their new home is haunted and their comatose son (Ty Simpkins) is possessed by a malevolent entity.
				</div>
				<div class="col-md-6">
				<br>
				<h3>Reviews</h3>
				<div style='height:70%; overflow-y: scroll;'>
					<h4>Scariest Movie I've Seen In Years!!!</h4>
					<i>Chad Brinkman31 March 2011</i><br>
					I went into this movie confident that it would be a cheesy, campy romp with the same "tried and true tricks of the trade," like when the hero is investigating the creepy music coming from the basement and a cat jumps into frame, but I quickly discovered that this would not be case with Insidious. After watching the move and obsessing on it for about 12 hours now, I can honestly say it's one of the scariest movies I've ever seen. In fact, there were several points during the film where I screamed like a 13-year old girl at a Justin Beiber concert. Keep in mind I was consciously trying my hardest to keep my composure, mainly because I was sitting beside my new girlfriend of 2 months. She, incidentally, didn't make a peep; thankfully, I later found out she had her eyes closed the whole time. <hr>

					<h4>I will have trouble sleeping tonight....</h4>
					<i>blackmambamark3 April 2011</i><br>
					Of all the genre's that Hollywood has to offer, the most tattered of the bunch is without a doubt the horror department. I am so sick of these wannabe 'so called' horror flicks that belong on late night lifetime channel. Im sick of the same old parlor tricks and scare tactics that have been used for the past 10 years. And i am even more sickened by the fact that they keep making the same crap year after year. You would figure after great horror flicks like "The Decent" and "Paranormal Activity", studios would start realizing what actually works and what audiences want to see. Hopefully in the coming years, this genre' will come back to life.<hr>
				</div>

					<div class='row text-center' style='margin-bottom:10px; margin-top:50px'>
			  			<a href="addreview.php" class='btn btnLogin chckinMovieRev'>ADD REVIEW</a>
		  			</div><br>
				</div>
			</div>
			<br>
		</div>
	</div>
</body>
</html>