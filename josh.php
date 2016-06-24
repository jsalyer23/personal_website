<nav id="navigation">
	<?php if ($thisPage == "Home") { ?>
		<a id="current_page" href="index.php">Home</a>
		<?php } ?>

	<?php if ($thisPage == "Goals") {echo " id=\"current_page\"";} ?>
		<a href="goals.php">Goals</a>

	<?php if ($thisPage == "SQRL") {echo " id=\"current_page\"";} ?>
		<a href="articles1.php">SQRL</a>

	<?php if ($thisPage == "The World Wide Web") {echo " id=\"current_page\"";} ?>
		<a href="articles2.php">The World Wide Web</a>

	<?php if ($thisPage == "Social Media") {echo " id=\"current_page\"";} ?>
		<a href="social_media.php">Social Media</a>

	<?php if ($thisPage == "My Family") {echo " id=\"current_page\"";} ?>	
		<a href="my_family.php">My Family</a>
</nav>
