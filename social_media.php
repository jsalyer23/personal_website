<!DOCTYPE HTML>
<?php
	$thisPage = "Social Media"; 
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

				<p>Feel free to contact me!</p>

				<p><a href="mailto:joshsalyer23@gmail.com">joshsalyer23@gmail.com</a></p>

				<a href="http://twitter.com/joshsalyer23"><img alt="Twitter Logo" src=""></a>

				<a href="http://facebook.com/joshsalyer23"><img alt="Facebook Logo" src="img/FB-f-Logo__blue_50.png"></a>

				<a href="http://github.com/jsalyer23"><img alt="GitHub Logo" src="img/GitHub-Mark-64px.png"></a>
			</div>
		</div>
	</body>
	
	<footer>
      	<p>&copy; 2016 Josh Salyer.</p>
    </footer>
</html>