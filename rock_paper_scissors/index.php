<!DOCTYPE HTML>

<html>

	<head>
		<title>Rock Paper Scissors</title>
	</head>

	<body>
		<p><?php print_r($_GET); ?></p>

		<h1>Welcome to Rock Paper Scissors!!</h1>
			<form action="welcome_page.php" method="get">
				<?php echo "<h3>What's your name?<h3>" ?>
				<input type="text" name="name">
				<input type="submit">
			</form>
	</body>

</html>

