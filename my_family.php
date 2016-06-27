<!DOCTYPE HTML>
<?php 
	$thisPage = "My Family";
	$theme = "alternate";
?>
<html>
	<head>
		<meta charset = UTF-8 />

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

			<div class="main">

				<h1>Joshua Salyer</h1>

				<h3>My Family</h3>

				<img src="img/dad_and_ronan.jpg" alt="Ronan and Me">Ronan and Me

				<img src="img/family_fishing.jpg" alt="Family Fishing">Family Fishing

				<img src="img/josh_salyer.jpg" alt="Josh Salyer">Me

				<img src="img/kellanie_and_ronan.jpg" alt="Ronan and Kellanie">Ronan and Kellanie

				<img src="img/laila_dance.jpg" alt="Laila">Laila

				<img src="img/laila_dance_recital.jpg" alt="Us at Laila's Recital">Us at Laila's Recital

				<img src="img/laila_graduation.jpg" alt="Laila's Graduation">Laila's Graduation

				<img src="img/laila_superhero.jpg" alt="Laila's a Superhero">Laila's a superhero

				<img src="img/ronan_eating.jpg" alt="Ronan">Ronan
			</div>
		</div>
	<footer>
      	<p>&copy; 2016 Josh Salyer.</p>
    </footer>
	</body>

</html>