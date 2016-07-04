<?php
	session_start();
	//Create variable to keep track of the wins
	$player1_wins = 0;
	$player2_wins = 0;

	//Create variable to keep track of the draws
	$draw_count = 0;

	
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
		
	}
	//This function displays a message if it's a draw and nothing if it's not a draw
	//$turn = the result of whos_turn() function
	//$score_keeper = the result of did_they_win() function
	function message_for_draws($score_keeper, $turn) {
		if ($score_keeper != "Player 1 Wins!!!" && $score_keeper != "Player 2 Wins!!!" && $turn == "It's a draw!!!") {
			return "It's a draw!!!";
		}
		else {
			return "";
		}
	}
	//This function adds 1 to player 1's win count if they have won
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
	//This function adds 1 to player 2's win count if they have won
	//$score_keeper = the result of did_they_win() function
	function add_to_win_player2($score_keeper){
		//If $score_keeper is equal to the string "Player 2 Wins!!!"
		if ($score_keeper == "Player 2 Wins!!!") {
			//Add 1 to Player 2's wins
			$player2_wins += 1;
			//Display the number of wins for Player 2
			return $player2_wins;
		}
	}
	//This function adds 1 to the draw count
	//$turn = the result of whos_turn() function
	//$draw_message = the result of message_for_draws() function
	function add_to_draws($turn, $draw_message) {
		//If the game is a draw
		if ($turn == "It's a draw!!!" && $draw_message != "") {
			//Add 1 to the number of draws
			$draw_count += 1;
			//Display the number of draws
			return $draw_count;
		}
	}

	//This function puts the results of the game into an Array that will be added to the end of the query string
	//$add_draw = result of add_to_draws function
	//$add_win_player1 = result of add_to_win_player1
	//$add_win_player2 = result of add_to_win_player2
	function game_results($add_draw, $add_win_player1, $add_win_player2) {
		$game_results = array();
		//If there is a draw
		if ($add_draw == 1) {
			//Add the number 7 to the end of the results Array
			array_push($game_results, "7");
		}
		//If player 1 wins
		if ($add_win_player1 == 1) {
			//Add the number 5 to the end of the results Array
			array_push($game_results, "5");
		}
		//If there is a draw
		if ($add_win_player2 == 1) {
			//Add the number 6 to the end of the results Array
			array_push($game_results, "6");
		}
		return $game_results;
	}
	function game_history($scoreboard) {
		if (strlen($scoreboard) > 9) {
			return substr($scoreboard, 10);
		}
	}

	function player1_game_history($scoreboard) {
		$player1_total_wins = 0;
		foreach ($scoreboard as $games) {
			if ($games == "5") {
				$player1_total_wins += 1;
				return $player1_total_wins;
			}
		}
	}

	function player2_game_history($scoreboard) {
		$player2_total_wins = 0;
		foreach ($scoreboard as $games) {
			if ($games == "6") {
				$player2_total_wins += 1;
				return $player2_total_wins;
			}
		}
	}

	function tied_game_history($scoreboard) {
		$total_draws = 0;
		foreach ($scoreboard as $games) {
			if ($games == "7") {
				$total_draws += 1;
				return $total_draws;
			}
		}
	}
	//This function keeps track of previous game result


	// function game_history($scoreboard, $add_win_player1, $add_win_player2, $add_to_draws) {
	// 	if (empty($_SESSION)) {
	// 		$_SESSION['player1'] = 0;
	// 		$_SESSION['player2'] = 0;
	// 		$_SESSION['draws'] = 0;
	// 	}

	// 	if ($add_win_player1 == 1) {
	// 		$_SESSION['player1']++;
	// 		echo '<a href=index.php?scoreboard=333333333' . $scoreboard[9] . '>Play Again</a>';
	// 	}
	// 	else if ($add_win_player2 == 1) {
	// 		$_SESSION['player2']++;
	// 		echo '<a href=index.php?scoreboard=333333333' . $scoreboard[9] . '>Play Again</a>';
	// 	}
	// 	else if ($add_to_draws == 1) {
	// 		$_SESSION['draws']++;
	// 		echo '<a href=index.php?scoreboard=333333333' . $scoreboard[9] . '>Play Again</a>';
	// 	}
	// }
	//This function prints out the option to play against a computer or another person
	//$scoreboard is the query string
	function computer_or_person($scoreboard) {
		//If the 10th number in the query string is equal to 0 then the game is set for two players
		if ($scoreboard[9] == 0) {
			//Print out the option to play against a computer instead
			return '<a href=index.php?scoreboard=3333333338>VS Computer</a><br>';
		}
		else {
			//If the game is set up to play against the computer print a link to play another person
			return '<a href=index.php?scoreboard=3333333330>VS Person</a><br>';
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

	//This function will count how many Xs and Os have been placed on the board then returns a 1 if it's Xs turn
	//and 2 if it's Os turn. If the sum of both players' turn counts are equal to 9, then it returns "It's a draw"
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
	// function computer_player($scoreboard) {
	// 	$availible_moves = array();
	// 	for ($box = 0; $box < 9; $box++) {
	// 		if ($scoreboard[$box] == "3") {
	// 			array_push($availible_moves, $box);
	// 			return $availible_moves;
	// 		}
	// 	}
		// if ($turn == 2) {
		// 	foreach ($availible_moves as $choices) {
		// 		if ($availible_moves[$choices] == "4") {
		// 			$scoreboard[4] = "2";
		// 			return $scoreboard;
		// 		}
		// 		else if ($score_keeper[$scoreboard] == $winning_combinations) {
		// 			$scoreboard[$choices] == "2";
		// 			return $scoreboard;
		// 		}
		// 		else if ($scoreboard[$choices] == "3" && ($choices == "0" || $choices == "2" || $choices == "6" || $choices == "8")){
		// 			$scoreboard[$choices] = "2";
		// 			return $scoreboard;
		// 		}
		// 	}
		// }

	
?>