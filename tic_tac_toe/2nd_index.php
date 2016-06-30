<?php
	session_start();
	$thisPage = "Tic Tac Toe";
	include("top3.php");
?>

	<div class="gameContainer">
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="box0">
				<?php 
					include("functions2.php");
					display_moves();
				?>
			</div>

			<div class="gameContainer__box" name="box1">
				<?php display_moves(); ?>
			</div>

			<div class="gameContainer__box" name="box2">
				<?php display_moves(); ?>
			</div>
		</div>
		<br>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="box3">
				<?php display_moves(); ?>
			</div>

			<div class="gameContainer__box" name="box4">
				<?php display_moves(); ?>
			</div>

			<div class="gameContainer__box" name="box5">
				<?php display_moves(); ?>
			</div>
		</div>
		<br>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="box6">
				<?php display_moves(); ?>
			</div>

			<div class="gameContainer__box" name="box7">
				<?php display_moves(); ?>
			</div>

			<div class="gameContainer__box" name="box8">
				<?php display_moves(); ?>
			</div>
		</div>
		<br>
		<?php include("functions2.php"); ?>
	</div>

<?php include("../bottom.php"); ?>