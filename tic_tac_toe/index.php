<?php
	$thisPage = "Tic Tac Toe";
	include("top3.php");
	include("functions2.php");
	$scoreboard = $_GET['scoreboard'];
	$turn = whos_turn($scoreboard);
	$score_keeper = did_they_win($scoreboard);
	echo $score_keeper;
	
?>

	<div class="gameContainer">
		
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="0">
				 <?php fill_boxes($scoreboard, 0, $turn); ?>
			</div>

			<div class="gameContainer__box" name="1">
				 <?php fill_boxes($scoreboard, 1, $turn); ?>
			</div>

			<div class="gameContainer__box" name="2">
				 <?php fill_boxes($scoreboard, 2, $turn); ?>
			</div>
		</div>
		<br>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="3">
				 <?php fill_boxes($scoreboard, 3, $turn); ?>
			</div>

			<div class="gameContainer__box" name="4">
				 <?php fill_boxes($scoreboard, 4, $turn); ?>
			</div>

			<div class="gameContainer__box" name="5">
				 <?php fill_boxes($scoreboard, 5, $turn); ?>
			</div>
		</div>
		<br>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="6">
				 <?php fill_boxes($scoreboard, 6, $turn); ?>
			</div>

			<div class="gameContainer__box" name="7">
				 <?php fill_boxes($scoreboard, 7, $turn); ?>
			</div>

			<div class="gameContainer__box" name="8">
				 <?php fill_boxes($scoreboard, 8, $turn); ?>
			</div>
		</div>
		<br>
		<div>
			<!--Reset button for the game-->
			<form action="index.php" method="post">
				<input type="submit" name="reset" value="reset"><?php enable_reset(); ?></input>
			</form>
		</div>
		<div class="scoreBoard">
			<!--Might make these individual divs?-->
			<h2>Player 1 Wins: <?php echo $player1_wins; ?></h2>
			<h2>Player 2 Wins: <?php echo $player2_wins; ?></h2>
			<h2>Draws: <?php echo $tie_count; ?></h2>
		</div>
	</div>

<?php include("../bottom.php"); ?>