<?php
	
	//Create variable to keep track of the wins
	$player1_wins = 0;
	$player2_wins = 0;
	//Create variable to keep track of the loses
	$tie_count = 0;
	//This function checks to see if anyone has won the game
	function did_they_win($scoreboard) {
		

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
					//Add one to player 1's wins
					$player1_wins += 1;
					$availible_boxes -= 1;
					//Display the winner
					return "Player 1 Wins!!!";
					
				}
				//If one of the combinations has three ones in it then O's have won
				else if ($value == "222") {
					//Add one to player 2's wins
					$player2_wins += 1;
					$availible_boxes -= 1;
					//Display the winner
					return "Player 2 Wins!!!";
					
				}
			
			}
			
			
	}

	//This function resets the game
	function enable_reset(){
		//If the reset button is clicked then reload the game
		if (isset($_POST['reset'])) {
			//Show a link to the TTT home page
			echo '<a href="index.php?scoreboard=333333333">New Game?</a>';
		}
	}
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
			echo "It's a draw!!!";
			//Add one to the number of tied games
			$tie_count += 1;
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
	
?>