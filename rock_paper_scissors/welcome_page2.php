<?php 
	$thisPage = "Rock Paper Scissors";
	include("top2.php");
?>
 			
 			<div class="content">
 				<div class="rps">
 				<?php
 					
 					include ("rps.php");

 					$rand = random_computer_choice();
 					 
 					echo rock_paper_scissors($_GET["weapon"], $rand);
 				?>
 				</div class="rpsChoices">
	 				<?php display_choices($_GET["weapon"], $rand); ?>
 				</div>
 				
 			</div>
 

 <?php include("../bottom.php"); ?>