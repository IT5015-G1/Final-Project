<?php
	$mysqli = mysqli_connect("localhost", "root", "", "it5015-moviereviewsystem");
	/* check connection */
	if (!$mysqli) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
?>