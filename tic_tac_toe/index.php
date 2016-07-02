<?php
	//Start the session
	session_start();
	//Page label for navigation page
	$thisPage = "Tic Tac Toe";
	//Adds menu bar and navigation page
	include("top3.php");
	//Guts of the game...
	include("functions2.php");
	//Assign the $_GET associative array to a variable
	$scoreboard = $_GET['scoreboard'];
	//Assign the function that determines who's turn it is to a variable
	$turn = whos_turn($scoreboard);
	//Assign the function that checks if anyone has won the game to a variable
	$score_keeper = did_they_win($scoreboard, $turn);
	//Add the functions that return 1 for each win each player has to variables
	$add_win_player1 = add_to_win_player1($score_keeper);
	$add_win_player2 = add_to_win_player2($score_keeper);
	//Add the results of the add_to_win_player functions to session Array to keep for next game
	$_SESSION['player_1'] = $add_win_player1;
	$_SESSION['player_2'] = $add_win_player2;
	$p1_wins = $_SESSION['player_1'];
	$p2_wins = $_SESSION['player_2'];
	$end_game = end_game_if_won($score_keeper);
	if ($end_game == '<a href="index.php?scoreboard=333333333">New Game?</a>') {
		echo $end_game;
	}
	else {
		echo $score_keeper;
	}
	//Display a message saying who won if there is a winner
	// echo $score_keeper;
	// print_r($_GET);
	// print_r($_SESSION);
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
			<!-- <?php '<a href=index.php?scoreboard=3333333330000' . $scoreboard . '>NEW GAME?</a>'; ?> -->
			<!-- <a href=index.php?scoreboard=333333333>NEW GAME?</a> -->
		</div>
		<div class="scoreBoard">
			<!--Might make these individual divs?-->
			<h2>Player 1 Wins: <?php echo $p1_wins; ?></h2>
			<h2>Player 2 Wins: <?php echo $p2_wins; ?></h2>
			<h2>Draws: <?php echo $tie_count; ?></h2>
		</div>
	</div>

<?php include("../bottom.php"); ?>