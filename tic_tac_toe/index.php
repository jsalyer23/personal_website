<?php
	$thisPage = "Tic Tac Toe";
	include("top3.php");
?>

	<h1>Tic Tac Toe</h1>

		<form>
			<?php 
				include("functions.php"); 
				create_buttons();
			?>
		</form>



<?php include("../bottom.php"); ?>