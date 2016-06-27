<!DOCTYPE html>
<?php 
	$thisPage = "What Makes Up An HTML Document?";
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

				<h2></h2>
				
				<p></p>

				<p></p>

				<p></p>

				<p></p>
			</div>
		</div>
	<footer>
      	<p>&copy; 2016 Josh Salyer.</p>
    </footer>
	</body>

</html>