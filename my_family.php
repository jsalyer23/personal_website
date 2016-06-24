<!DOCTYPE HTML>
<?php 
	$thisPage = "My Family";
	$theme = "alternate";
?>
<html>
	<head>
		<meta charset = utf-8/>

		<?php if ($theme == "default"){ ?>
    		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<?php } else { ?>
    		<link rel="stylesheet" type="text/css" href="stylesheet2.css">
		<?php } ?> 

		<title>Josh Salyer's Website</title>
	</head>

	<body>
		<div class="flex-container">

			<div class="sidebar">
				<?php include("navigation.php"); ?>
			</div>

			<div class="main"

				<h1>Joshua Salyer</h1>

				<h3>My Family</h3>

				<img src="img/dad_and_ronan.jpg">Ronan and Me</img>

				<img src="img/family_fishing.jpg">Family Fishing</img>

				<img src="img/josh_salyer.jpg">Me</img>

				<img src="img/kellanie_and_ronan.jpg">Ronan and Kellanie</img>

				<img src="img/laila_dance.jpg">Laila</img>

				<img src="img/laila_dance_recital.jpg">Us at Laila's Recital</img>

				<img src="img/laila_graduation.jpg">Laila's Graduation</img>

				<img src="img/laila_superhero.jpg">Laila's a superhero</img>

				<img src="img/ronan_eating.jpg">Ronan</img>
			</div>
		</div>

	</body>

	<footer>
      	<p>&copy; 2016 Josh Salyer.</p>
    </footer>
</html>