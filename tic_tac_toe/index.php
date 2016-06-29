<?php
	$thisPage = "Tic Tac Toe";
	include("top3.php");
?>

	<h1>Tic Tac Toe</h1>
		<!-- Collect palyer's moves then return to the same page once the move is submitted -->
		<form method= "post" action= "index.php">
			<?php 
				
				include("functions.php");
			
				//Show the dropdown boxes on the page 
				create_drop_down();
				//Create Submit button
				echo "<input type= \"submit\" name= \"submit\" value= \"Submit\" />"

			?>
		</form>



<?php include("../bottom.php"); ?>