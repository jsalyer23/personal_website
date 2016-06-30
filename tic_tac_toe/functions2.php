<?php
	//Start the session on functions2 page to have access to index.php session information
	session_start();
	// if (isset($_SESSION['move'])) {
	// 	$moves = $_SESSION['move'];
	// }
	// echo $moves;
	//Create variable to determine who's turn it is. $player1 goes on odd numbers, $player2 on even
	$turn = 1;
	//Create variable for player1 and assign them the "X"s
	$player1 = "X";
	//Create variable for player2 and assign them the "O"s
	$player2 = "O";
	//Create variable to keep track of the wins
	$win_count = 0;
	//Create variable to keep track of the loses
	$tie_count = 0;
	//Create an array containing the wins?....Maybe not...
	$possible_wins = array("", "", "", "", "", "", "", "", "");
	//This function should display either an "O", a "X", or an empty box depending on which is selected
	// function display_moves($moves){
	// 	//If it's player2's turn, change the box they select to an "O"
	// 	if ($moves == "O" && ($turn % 2) == 0){
	// 		echo '<a href="?move=O" name="O"><img src="o.jpg" alt="O" width= 100px height= 100px></a>';
	// 	}
	// 	//If it's player1's turn, change the box they select to a "X"
	// 	if ($moves == "X" && ($turn % 2) != 0){
	// 		echo '<a href="?move=X" name="X"><img src="x.jpg" alt="X" width= 100px height= 100px></a>';
	// 	}
	// 	//If the box isn't selected then display an empty box
	// 	if ($moves == ""){
	// 		// echo '<a style = "color:blue" href="index.php?state="">TEST</a> <br>';
	// 		echo '<a href="?move=X" name="X"><img src="x.jpg" alt="X" width= 100px height= 100px></a>';
	// 		// echo '<a href="index.php"><img name="" src="blank_white.png" alt="Blank" width= 100px height= 100px></a>';
	// 	}
	// 	print_r($_SESSION);
	// }
	// //This should determine is there is a winner or if the game is a tie
	// function win_or_lose(){

	// }


	// Create an Array containing the choices
	// $options = array(
	// 		"" => '<a href="index.php?move=''"><img name="" src="blank_white.png" alt="Blank" width= 100px height= 100px></a>',
	// 		"X" => '<a href="index.php?move=X" name="X"><img src="x.jpg" alt="X" width= 100px height= 100px></a>',
	// 		"O" => '<a href="index.php?move=O" name="O"><img src="o.jpg" alt="O" width= 100px height= 100px></a>'
	// 	);
	// print_r($options);
?>