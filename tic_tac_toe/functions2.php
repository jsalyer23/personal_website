<?php
	session_start();
	//Create variable to keep track of the wins
	$player1_wins = 0;
	$player2_wins = 0;

	//Create variable to keep track of the loses
	$tie_count = 0;
	//This function saves the previous games results somehow...
	// function keep_multiple_results()
	//This function checks to see if anyone has won the game
	function did_they_win($scoreboard, $turn) {

		//Create an empty array with 8 spots to add winning combination strings from the $scoreboard
		$winning_combinations = array('', '', '', '', '', '', '', '');
			//Assign one winning combination to each of the spots in the array
			$winning_combinations[0] = $scoreboard[0] . $scoreboard[1] . $scoreboard[2];
			$winning_combinations[1] = $scoreboard[0] . $scoreboard[3] . $scoreboard[6];
			$winning_combinations[2] = $scoreboard[0] . $scoreboard[4] . $scoreboard[8];
			$winning_combinations[3] = $scoreboard[1] . $scoreboard[4] . $scoreboard[7];
			$winning_combinations[4] = $scoreboard[2] . $scoreboard[5] . $scoreboard[8];
			$winning_combinations[5] = $scoreboard[2] . $scoreboard[4] . $scoreboard[6];
			$winning_combinations[6] = $scoreboard[3] . $scoreboard[4] . $scoreboard[5];
			$winning_combinations[7] = $scoreboard[6] . $scoreboard[7] . $scoreboard[8];
			//Iterate through the values in the Array of winning combos
			foreach ($winning_combinations as $value) {
				//If one of the combinations has three twos in it then X's have won
				if ($value == "111") {
					//Display the winner
					return "Player 1 Wins!!!";
				}
				//If one of the combinations has three ones in it then O's have won
				else if ($value == "222") {
					// Display the winner
					return "Player 2 Wins!!!";
				}
			}
			if ($turn == "It's a draw!!!") {
				return "";
			}
	}
// 9, 10, 11, 12
// 	function win_tracker($scoreboard) {
// 		if ($scoreboard[9] != 0)
// 	}
	//This function should add 1 to the winning player's wins count
	//$score_keeper = the result of did_they_win() function
	function add_to_win_player1($score_keeper) {
		//If $score_keeper is equal to the string "Player 1 Wins!!!"
		if ($score_keeper == "Player 1 Wins!!!") {

			//Add 1 to Player 1's wins
			$player1_wins += 1;
			//Display the number of wins for Player 1
			return $player1_wins;
		}
	}

	function add_to_win_player2($score_keeper){
		//If $score_keeper is equal to the string "Player 2 Wins!!!"
		if ($score_keeper == "Player 2 Wins!!!") {
			//Add 1 to Player 2's wins
			$player2_wins += 1;
			//Display the number of wins for Player 2
			return $player2_wins;
		}
	}

	//This function will return a link to play again
	function end_game_if_won($score_keeper) {
		//If someone wins the game
		if ($score_keeper == "Player 1 Wins!!!" || $score_keeper == "Player 2 Wins!!!") {
			return '<a href="index.php?scoreboard=333333333">Play Again</a>';
		}
	}


	//This function resets the game
	// function enable_reset(){
	// 	//If the reset button is clicked then reload the game
	// 	if (isset($_POST['reset'])) {
	// 		//Show a link to the TTT home page
	// 		echo '<a href="index.php?scoreboard=333333333">New Game?</a>';
	// 	}
	// }
	//Add a "X" or an "O" or a "@" in each box based on the query string parameter ($scoreboard)
	//Box number is the number of each box which is used as the position in the query string
	function fill_boxes($scoreboard, $box_number, $turn) {
	

		//If the position in the query string is equal to "1" then that will display a "X" in the box
		if ($scoreboard[$box_number] == "1") {
			echo "X";
		}
		//If it's a "2" then it will show an "O"
		else if ($scoreboard[$box_number] == "2") {
			echo "O";
		}
		//If the box is blank ("3")
		else if ($scoreboard[$box_number] == "3") {
			$scoreboard[$box_number] = $turn;
			//Show a hidden link in the div that adds the current scoreboard to the end of the URL
			echo '<a class="gameContainer__link" href=index.php?scoreboard=' . $scoreboard . '>@</a>';
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
			else if ($scoreboard[$number] == "2") {
				//add 1 to player 2 (O)'s turn count
				$player2_turn += 1;
			}
		}
		//If the number of availible boxes is 0 then it's a tie
		if (($player1_turn + $player2_turn) == 9) {
			//Display the results
			return "It's a draw!!!";
		}

		//If player 1's turn count is greater than player 2's
		if ($player1_turn > $player2_turn) {
			//then it's player 2's turn
			return 2;
		}
		else {
			//if not then it's player 1's turn
			return 1;	
		}
	}

	//This function determines what the computer will chose
	// function computer_choice()
	
?>