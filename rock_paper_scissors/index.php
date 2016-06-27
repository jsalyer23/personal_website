<!DOCTYPE HTML>
<!-- <?php
	$thisPage = "Rock Paper Scissors"
?> -->
<html>

	<head><!-- 
		<link rel="stylesheet" type="text/css" href="stylesheet.css"> -->
		<title>Rock Paper Scissors</title>
	</head>

	<body>

		<h1>Welcome to Rock Paper Scissors!!</h1>
			<form action="welcome_page2.php" method="get">
				<?php 
					echo "<h3>What's your name?<h3>";
					
				?>
				<input type="text" name="name">
				<input type="submit">
			</form>
	</body>

</html>

