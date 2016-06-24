<!DOCTYPE HTML>
<?php 
	$thisPage = "Goals";
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

			<div class="main">

				<h1>Joshua Salyer</h1>
				
				<h3>Professional Goals</h3>
					<ul>
						<li><em>Effectively</em> use a wide variety of programming languages</li>
						<li><em>Learn</em> from the open source community and my employers</li>
						<li><em>Develop</em> mobile applications for iOS using Swift</li>
					</ul>
				<h3>Personal Goals</h3>
					<ul>
						<li><strong>Truely</strong> spend time with my wife and children everyday</li>
						<li>Visit a foreign country and experience it's culture</li>
						<li><strong>Never</strong> stop learning and teaching my children about the world</li>
					</ul>
			</div>
		</div>
	</body>
	<footer>
      	<p>&copy; 2016 Josh Salyer.</p>
    </footer>
</html>