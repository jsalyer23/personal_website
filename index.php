<!DOCTYPE HTML>
<?php 
	$thisPage = "Home";
	$theme = "default";
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
				<?php 	include("navigation.php"); ?>
			</div>

			<div class="main">
				<h2>Welcome!</h2>
			
				
			
				<p>Hello! My name is Josh. I moved to Omaha about three years ago after living in St. Louis for about five years. I grew up in McCook, NE which is a small town on the other side of the state. I've worked in kitchens most of my life and moved to St. Louis to attend culinary school right after high school. I helped start a restaurant there called <a href="http://junipereats.com/">Entre</a>. They have renamed it but the idea and menu design is still the same.</p>
			

			
				<p>I love understanding how and why things work. I think that's one of the main things that attracts me to coding. I don't really have much experience writing code but I am currently attending the <a href="http://www.omahacodeschool.com">Omaha Code School</a>, I have been doing some courses on <a href="http://www.teamtreehouse.com">Team Treehouse</a>, and reading as much as I can.</p>
			

			
				<p>I am married with two children who are 4 and 1. I enjoy watching all kinds of movies and listen to a wide variety of music. MAHA is one of my favorite music festivals i've been to since moving to Omaha. When the weather lets me, I like to garden and go backpacking. On the weekends you can find me searching for ingredients at the farmers market or at the park with my kids. Feel free to get in touch with me.</p>
			</div>
		
		</div>
    </body>
</html>