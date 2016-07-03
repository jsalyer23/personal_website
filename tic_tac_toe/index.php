<?php
	session_start();
	//Page label for navigation page
	$thisPage = "Tic Tac Toe";
	//Adds menu bar and navigation page
	include("top3.php");
	//Guts of the game...
	include("functions2.php");
	if (!isset($_SESSION['scoreboard'])) {
		$_SESSION['scoreboard'] = "333333333";
	}
	else {
			$scoreboard = $_GET['scoreboard'];
	}
	//Assign the $_GET associative array to a variable

	//Assign the function that determines who's turn it is to a variable
	$turn = whos_turn($scoreboard);
	//Assign the function that checks if anyone has won the game to a variable
	$score_keeper = did_they_win($scoreboard, $turn);
	//Add the functions that return 1 for each win each player has to variables
	$add_win_player1 = add_to_win_player1($score_keeper);
	$add_win_player2 = add_to_win_player2($score_keeper);
	//Display a message saying that there was a tie
	$draw_message = message_for_draws($score_keeper, $turn);
	//Add the funtions that return 1 for each tied game
	$add_draw = add_to_draws($turn, $draw_message);
	$game_results = game_results($add_draw, $add_win_player1, $add_win_player2);
	//Join $game_results Array to be added to the end of the query string
	$joined_game_results = implode('', $game_results);
	$game_history = game_history($scoreboard);
	print_r($_SESSION);
	print_r($game_results);
	//Display a message saying who won if there is a winner
	echo $score_keeper;
	echo $draw_message;
	
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

		<div class="scoreBoard">
			<!--Might make these individual divs?-->
			<h2>Player 1 Wins: <?php echo $add_win_player1; ?></h2>
			<h2>Player 2 Wins: <?php echo $add_win_player2; ?></h2>
			<h2>Draws: <?php echo $add_draw; ?></h2>
			<h2><a href=index.php?scoreboard=333333333>Reset Game</a></h2>
			<?php echo '<a href=index.php?scoreboard=333333333' . $joined_game_results . $game_history . '>Play Again</a>'; ?>
		</div>
	</div>

<?php include("../bottom.php"); ?>