<?php
	session_start();
	//Page label for navigation page
	$thisPage = "Tic Tac Toe";
	//Adds menu bar and navigation page
	include("top3.php");
	//Guts of the game...
	include("functions2.php");
	if (!isset($_SESSION['scoreboard'])) {
		$_SESSION['scoreboard'] = "3333333330";
	}
	else {
		$scoreboard = $_GET['scoreboard'];
	}
	//Define the variable for the game
	include("define_variables.php");
	
?>

<div class="gameContainer">
	<div class="gameContainer__winDisplay">
	<?php 	
		$computer_player;
		make_computer_move($scoreboard, $computer_player, $turn);
		//Display a message saying who won if there is a winner
		echo $player1_win_message;
		echo $player2_win_message;
		echo $draw_message;
		echo $computer_win_message;
		echo $save_game;
	?>
	</div>
	<div class= "gameContainer__board">
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
	</div>

	<div class="gameContainer__scores">
		<div class="scoreBoard">
			<!--Might make these individual divs?-->
			<h2 class="scoreBoard__scores">Player 1 Wins: <?php echo $p1_game_history; ?></h2>
			<h2 class="scoreBoard__scores">Player 2 Wins: <?php echo $p2_game_history; ?></h2>
			<h2 class="scoreBoard__scores">Computer Wins: <?php echo $computer_game_history; ?></h2>
			<h2 class="scoreBoard__scores">Draws: <?php echo $tied_history; ?></h2>
			<div class="scoreBoard__linkBox">
			<a class="scoreBoard__links" href=index.php?scoreboard=3333333330>Reset Game</a>
			<?php echo '<a class="scoreBoard__links" href=index.php?scoreboard=333333333' . $play_computer_again . $joined_game_results . $game_history . '>Play Again</a>'; ?>
			<?php echo $computer_or_person; ?>
			<a class="scoreBoard__links" href=http://localhost:8888/personal_website/tic_tac_toe/index.php?scoreboard=32312123385>Testing</a>

			</div>
		</div>
	</div>
</div>

<?php include("../bottom.php"); ?>