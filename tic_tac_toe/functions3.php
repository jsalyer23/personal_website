<?php
	session_start();
	$turn = 1;
	//Create variable for player1 and assign them the "X"s
	$player1 = 1;
	//Create variable for player2 and assign them the "O"s
	$player2 = O;
	//Create variable to keep track of the wins
	$player1_wins = 0;
	$player2_wins = 0;
	//Create variable to keep track of the loses
	$tie_count = 0;
	//Set up the score board for keeping track of the game
	//3= empty space 2= player2 (O) 1= player1 (X)
	$_SESSION['scoreboard'] = "333333333";
	//Store the scoreboard into a variable
	$scoreboard = $_SESSION['scoreboard'];
	//Gets the value from submission buttons(the blanks on the board)
	$submitted_move = $_POST['move'];
	// print_r($scoreboard);
	// for ($i = 0; $i < )
	// foreach ($scoreboard as $squares) {
	// 	if ($squares == 3)
	// }
	// Check if something was submitted
	// if ("" != trim($submitted_move)) {
	// 	//assign the move to a variable
	// 	$ttt_move = $submitted_move[0];
	// 	$scoreboard[$ttt_move] = $turn;
	// 	$
	// 	if ($turn == $player1){
	// 		echo "It's  Player 1's Turn";
	// 	}
	// }
	//If the reset button is clicked then display a link to TTT homepage?
	if (isset($_POST['reset'])) {
		session_destroy();
		echo '<a href="index.php">Click reset to play again</a>';
	}
?>