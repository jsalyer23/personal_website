<?php 
	$thisPage = "Rock Paper Scissors";
	include("top2.php");
?>
 			
 			<div>
 				<?php
 					
 					include ("rps.php");

 					$rand = random_computer_choice();
 					 
 					echo rock_paper_scissors($_GET["weapon"], $rand);
	 				display_choices($_GET["weapon"], $rand);
 					
 				?>
 			</div>
 

 <?php include("../bottom.php"); ?>