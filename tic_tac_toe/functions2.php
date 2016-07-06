<?php
	session_start();
	
	

	

	
	//This function checks to see if anyone has won the game (returns a String)
	function did_they_win($scoreboard, $turn) {

		//Create an empty Array with 8 spots to add winning combination Strings from the $scoreboard
		$winning_combinations = array('', '', '', '', '', '', '', '');
			//Assign one winning combination to each of the spots in the Array
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

	//This function displays a message to the screen if the computer has won the games (returns a String)
	//$scoreboard = the query String
	//score_keeper = the String returned from did_they_win()
	function message_for_computer_win($score_keeper, $scoreboard) {
		//If the 10th number in the query String is 8 the computer player has been selected
		if ($scoreboard[9] == "8") {
			//If the String returned from $score_keeper says Player 2 won
			if ($score_keeper == "Player 2 Wins!!!") {
				//Display a String saying that the computer won
				return "The Computer Won!!!";
			}
		}
	}

	//This function displays a message if it's a draw and nothing if it's not a draw (returns a String)
	//$turn = the Integer returned from whos_turn() function
	//$score_keeper = the String returned from did_they_win() function
	function message_for_draws($score_keeper, $turn) {
		//If no one has won the game and the whos_turn() function returns "It's a draw!!!"
		if ($score_keeper != "Player 1 Wins!!!" && $score_keeper != "Player 2 Wins!!!" && $turn == "It's a draw!!!") {
			//Display the tied game message as a String
			return "It's a draw!!!";
		}
		else {
			//Otherwise don't display anything
			return "";
		}
	}

	//This function adds 1 to player 1's win count if they have won (returns an Integer)
	//$score_keeper = the String returned from did_they_win() function
	function add_to_win_player1($score_keeper) {
		//Create variable to keep track of the wins
		$player1_wins = 0;
		//If $score_keeper is equal to the string "Player 1 Wins!!!"
		if ($score_keeper == "Player 1 Wins!!!") {
			//Add 1 to Player 1's wins
			$player1_wins += 1;
			//Return the number of wins for Player 1
			return $player1_wins;
		}
	}
	
	//This function adds 1 to player 2's win count if they have won (returns an Integer)
	//$score_keeper = the String returned from did_they_win() function
	//$scoreboard = the query String
	function add_to_win_player2($score_keeper, $scoreboard){
		//Create variable to keep track of the wins
		$player2_wins = 0;
		//If Player 2 is a person and $score_keeper is equal to the String "Player 2 Wins!!!"
		//and the game is not set up to play against the computer
		if ($scoreboard[9] == "0" && $score_keeper == "Player 2 Wins!!!") {		
			//Add 1 to Player 2's wins
			$player2_wins += 1;
			//Return the number of wins for Player 2
			return $player2_wins;
		}

	}

	//This function adds 1 to computer player win count if Player 1 loses (returns an Integer)
	//$score_keeper = the String returned from did_they_win() function
	//$scoreboard = the query String
	function add_to_win_computer($score_keeper, $scoreboard) {
		//Create a variable to keep track of the computer's wins
		$computer_wins = 0;
		//If the game is set up to play against the computer player and $score_keeper returns
		//the String "Player 2 Wins!!!"
		if ($scoreboard[9] == "8" && $score_keeper == "Player 2 Wins!!!") {
			//Add 1 to the computer player's wins
			$computer_wins += 1;
			//Return the number of wins for the computer player
			return $computer_wins;
		}
	}

	//This function adds 1 to the draw count (returns an Integer)
	//$turn = the Integer returned from the whos_turn() function
	//$draw_message = the String returned from the message_for_draws() function
	function add_to_draws($turn, $draw_message) {
		//Create variable to keep track of the draws
		$draw_count = 0;
		//If the String returned from $draw_message() is the String "It's a draw!!!" and
		//isn't an empty String
		if ($turn == "It's a draw!!!" && $draw_message != "") {
			//Add 1 to the number of draws
			$draw_count += 1;
			//Return the number of draws
			return $draw_count;
		}
	}

	//This function puts the results of the game into an Array that will be added to the end of the query String
	//(returns an Array)
	//$add_draw = the Integer returned from the add_to_draws function
	//$add_win_player1 = the Integer returned from the add_to_win_player1
	//$add_win_player2 = the Integer returned from the add_to_win_player2
	//$add_win_computer = the Integer returned from the add_to_win_computer
	function game_results($add_draw, $add_win_player1, $add_win_player2, $add_win_computer) {
		//Create an empty Array to hold the numbers (if any)
		$game_results = array();
		//If there is a draw
		if ($add_draw == 1) {
			//Add the number 7 to the results Array (7 represents a draw)
			array_push($game_results, "7");
		}
		//If player 1 wins
		if ($add_win_player1 == 1) {
			//Add the number 5 to the results Array (5 represents a Player 1 win)
			array_push($game_results, "5");
		}
		//If there is a draw
		if ($add_win_player2 == 1) {
			//Add the number 6 to the results Array (6 represents a Player 2 win)
			array_push($game_results, "6");
		}
		//If the computer wins
		if ($add_win_computer == 1) {
			//Add the number 8 to the results Array (8 represents a computer player win)
			array_push($game_results, "8");
		}
		//Return the Array to be added to the end of the query String
		return $game_results;
	}

	//This function will return a String containing the wins to the end of the query String ($scoreboard)
	function game_history($scoreboard) {
		//If the length of the query String is more than just the original 9 spots
		if (strlen($scoreboard) > 9) {
			//Create a Substring starting at the 10th position in the query String and return it
			return substr($scoreboard, 10);
		}
	}

	//This function checks how many wins Player 1 has had by counting them from within the $game_history
	//Substring then returns that Integer to be printed to the screen
	function player1_game_history($game_history) {
		//substr_count() counts how many times a specified Substring appears in another String
		$player1_total_wins = substr_count($game_history, "5");
		//Return the Integer representing Player 1 wins (5s) on the screen
		return $player1_total_wins;
	}

	//This function checks how many wins Player 2 has had by counting them from within the $game_history
	//Substring then returns that Integer to be printed to the screen
	function player2_game_history($game_history) {
		//substr_count() counts how many times a specified Substring appears in another String
		$player2_total_wins = substr_count($game_history, "6");
		//Return the Integer representing Player 2 wins (6s) on the screen
		return $player2_total_wins;
	}

	//This function checks how many tied games there have been by counting them from within the $game_history
	//Substring then returns that Integer to be printed to the screen
	function tied_game_history($game_history) {
		//substr_count() counts how many times a specified Substring appears in another String
		$draw_total = substr_count($game_history, "7");
		//Display the Integer representing tied games (7s) on the screen 
		return $draw_total;
	}

	//This function checks how many games have been won by the computer player by counting them from within the
	//$game_history Substring then returns that Integer to the screen
	function computer_game_history($game_history) {
		//substr_count() counts how many times a specified Substring appears in another String
		$computer_total_wins = substr_count($game_history, "8");
		//Display the Integer representing computer player wins (8s)
		return $computer_total_wins;
	}

	//This function prints out the option to play against a computer or another person (returns HTML link)
	//$scoreboard = the query String
	function computer_or_person($scoreboard) {
		//If the 10th number in the query String is equal to 0 then the game is set for two players
		if ($scoreboard[9] == 0) {
			//Print out the option to play against a computer instead
			return '<a href=index.php?scoreboard=3333333338>VS Computer</a><br>';
		}
		else {
			//If the game is set up to play against the computer print a link to play another person
			return '<a href=index.php?scoreboard=3333333330>VS Person</a><br>';
		}
	}

	//This function will check who Player 1 is currently playing against and returns either an 8 (computer player)
	//or a 0 (human player) to the end of the query String allowing Player 1 to "Play Again" (returns an String)
	//$scoreboard = the query String
	function play_computer_again($scoreboard) {
		//If the 10th number in the query String is 8
		if ($scoreboard[9] == "8") {
			//Return 8 to be added to the query String if the game is reloaded
			return "8";
		}
		else {
			//Return 0 to be added to the query String if the game is reloaded
			return "0";
		}
	}

	//This function checks for empty spaces and adds the empty spaces into an Array (returns Array)
	//$scoreboard = the query String
	function available_moves($scoreboard) {
		//Create an empty Array to add available moves to
		$available_moves = array();
		//If the 10th number in the query String is 8 then the computer opponent option was selected
		if ($scoreboard[9] == "8") {
			//For each of the numbers in the query String
			for ($box = 0; $box < 9; $box++) {
				//If any of them are an empty space (3)
				if ($scoreboard[$box] == "3") {
					//Add it to the $available_moves Array
					array_push($available_moves, $scoreboard[$box]);
				}
			}
			//Return the Array of available moves
			return $available_moves;
		}
	}

	//This function checks for which spaces are occupied by the person playing (returns Array)
	//$scoreboard = the query String
	function player_moves($scoreboard) {
		//Create an empty Array to add taken spaces to
		$player_moves = array();
		//If the 10th number in the query String is 8 then the computer opponent option was selected
		if ($scoreboard[9] == "8") {
			//For each of the numbers in the query String
			for ($box = 0; $box < 9; $box++) {
				//If a number is equal to 1 then that means Player 1 has chosen that space already
				if ($scoreboard[$box] == "1") {
					//Add Player 1's moves to the $player_moves Array
					array_push($player_moves, $scoreboard[$box]);
				}
			}
			//Return the Array of Player 1's moves
			return $player_moves;
		}
	}

	//This function checks if Player 1 has taken the center space and takes it if it's available.
	//Computer always goes 2nd (returns query String)
	//$scoreboard = the query String
	//$turn = the Integer returned from whos_turn() function
	function computer_player($scoreboard, $turn) {
		//If  Player 1 is playing against the computer (8), it's the computer's turn, and the center
		//space has not been taken (3 = empty space)
		if ($scoreboard[9] == "8" && $turn == 2 && $scoreboard[4] == "3") {
			//The computer takes the center space
			$scoreboard[4] = "2";
			//Return the new query String
			return $scoreboard;
		}
	}

	//Add a "X" or an "O" or a "@" in each box based on the query String (returns a String or a HTML link)
	//$scoreboard = the query String
	//$box_number = the number assigned to each box
	//$turn = the Integer returned from whos_turn() function
	function fill_boxes($scoreboard, $box_number, $turn) {
		//If the position in the query String is equal to "1" then that will display a "X" in the box
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
	//and 2 if it's Os turn. If the sum of both players' turn counts is equal to 9, then it returns "It's a draw"
	//(returns an Integer or a String if all the moves have been used)
	//$scoreboard = the query String
	function whos_turn($scoreboard) {
		//Set both player's turn counts to 0
		$player1_turn = 0;
		$player2_turn = 0;

		//Iterate over each number (character) in the query String ($scoreboard)
		for ($number = 0; $number < strlen($scoreboard); $number++) {
			//If one of the numbers in the query String is a "1"
			if ($scoreboard[$number] == "1") {
				//add 1 to player 1 (X)'s turn count
				$player1_turn += 1;
			} 
			//If one of the numbers in the query String is a "2"
			else if ($scoreboard[$number] == "2") {
				//add 1 to player 2 (O)'s turn count
				$player2_turn += 1;
			}
		}
		//If the number of available boxes is 0 then it's a tie
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
	
?>