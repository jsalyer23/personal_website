<?php
	session_start();
	$thisPage = "Tic Tac Toe";
	include("top3.php");
	include("functions2.php");
	
?>

	<div class="gameContainer">
		<h1>It's Player 1's turn</h1>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="0">
				<a <?php echo $blank; ?></a>
			</div>

			<div class="gameContainer__box" name="1">
				<a <?php echo $blank; ?></a>
			</div>

			<div class="gameContainer__box" name="2">
				<a <?php echo $blank; ?></a>
			</div>
		</div>
		<br>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="3">
				<a <?php echo $blank; ?></a>
			</div>

			<div class="gameContainer__box" name="4">
				<a <?php echo $blank; ?></a>
			</div>

			<div class="gameContainer__box" name="5">
				<a <?php echo $blank; ?></a>
			</div>
		</div>
		<br>
		<div class="gameContainer__row">
			<div class="gameContainer__box" name="6">
				<a <?php echo $blank; ?></a>
			</div>

			<div class="gameContainer__box" name="7">
				<a <?php echo $blank; ?></a>
			</div>

			<div class="gameContainer__box" name="8">
				<a <?php echo $blank; ?></a>
			</div>
		</div>
		<br>
		<div>
			<!--Reset button for the game-->
			<form action="index.php" method="post">
				<input type="submit" name="reset" value="reset"><?php enable_reset(); ?></input>
			</form>
		</div>
		<div>
			<!--Might make these individual divs?-->
			<h2>Player 1 Wins: <?php echo $player1_wins; ?></h2>
			<h2>Player 2 Wins: <?php echo $player2_wins; ?></h2>
			<h2>Draws: <?php echo $tie_count; ?></h2>
		</div>
	</div>

<?php include("../bottom.php"); ?>