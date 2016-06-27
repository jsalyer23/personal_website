<!DOCTYPE HTML>

<?php $player_name = $_GET["name"]
	$thisPage = "Rock Paper Scissors"
 ?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title><?php echo $player_name ?>'s Rock Paper Scissors</title>
	</head>

	<body>
			<p><?php print_r($_GET); ?></p>

			<p>Hello <?php echo $player_name ?> !</p>
			
			<div>
				<?php
					include("personal_website/navigation.php")
					include ("rps.php");
					rock_paper_scissors();
				?>
			</div>

	</body>
</html>