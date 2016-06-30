<?php
	//Start the session on functions2 page to have access to index.php session information
	session_start();

		//Assign the $_SESSION Array to a variable
		$_SESSION['scoreboard'] = "333333333";
		$scoreboard = $_SESSION['scoreboard'];
		//Create variable to determine who's turn it is. $player1 goes on odd numbers, $player2 on even
		$turn = 1;
		//Create variable for player1 and assign them the "X"s (1)
		// $player1 = "1";
		//Create variable for player2 and assign them the "O"s (2)
		// $player2 = "2";
		//Create variable to keep track of the wins
		$player1_wins = 0;
		$player2_wins = 0;
		//Create variable to keep track of the loses
		$tie_count = 0;


	//This function resets the game
	function enable_reset(){
		//If the reset button is clicked then reload the game
		if (isset($_POST['reset'])) {
		//Delete the players moves that have been stored
			session_destroy();
			//Show a link to the TTT home page
			echo '<a href="index.php">Click reset to play again</a>';
		}
	}
	//Add a "X" or an "O" or a "@" in each box based on the query string parameter ($scoreboard)
	//Box number is the number of each box which is used as the position in the query string
	function fill_boxes($scoreboard, $box_number, $turn) {
		//If the box is blank ("3")
		if ($scoreboard[$box_number] == "3") {
			$scoreboard[$box_number] = $turn;
			//Show a hidden link in the div that adds the current scoreboard to the end of the URL
			echo '<a class="gameContainer__link" href="index.php?scoreboard=' . $scoreboard . '">@</a>';
		}
		//If the position in the query string is equal to "1" then that will display a "X" in the box
		elseif ($scoreboard[$box_number] == "1") {
			echo "X";
		}
		//If it's a "2" then it will show an "O"
		else {
			echo "O";
		}
	}

	//Determine who's turn it is according to the query string ($soreboard)
	function whos_turn($scoreboard) {
		//Set both player's turn counts to 0
		$player1_turn = 0;
		$player2_turn = 0;
		//Cycle through each number (character) in the query string ($scoreboard)
		for ($number = 0; $number < strlen($scoreboard); $number++) {
			//If one of the numbers in the query string is a "1"
			if ($scoreboard[$number] == "1") {
				//add 1 to player 1 (X)'s turn count
				$player1_turn += 1;
			} 
			//If one of the numbers in the query string is a "2"
			elseif ($scoreboard[$number] == "2") {
				//add 1 to player 2 (O)'s turn count
				$player2_turn += 1;
			}
		}
		//If player 1's turn count is greater than player 2's
		if ($player1_turn > $player2_turn) {
			//then it's player 2's turn
			echo "Player 2's turn (O)";
		}
		else {
			//if not then it's player 1's turn
			echo "Player 1's turn (X)";
		}

	}
	
?>