<?php
	//Assign the function that determines who's turn it is to a variable
	$turn = whos_turn($scoreboard);
	//Assign the function that checks if anyone has won the game to a variable
	$score_keeper = did_they_win($scoreboard, $turn);
	//Add the functions that return 1 for each win each player has to variables
	$add_win_player1 = add_to_win_player1($score_keeper);
	$add_win_player2 = add_to_win_player2($score_keeper, $scoreboard);
	$add_win_computer = add_to_win_computer($score_keeper, $scoreboard);
	$player1_win_message = message_for_player1_win($score_keeper);
	$player2_win_message = message_for_player2_win($score_keeper, $scoreboard);
	//Display a message saying that the computer won the game
	$computer_win_message = message_for_computer_win($score_keeper, $scoreboard);
	//Display a message saying that there was a tie
	$draw_message = message_for_draws($score_keeper, $turn);
	//Add the funtions that return 1 for each tied game
	$add_draw = add_to_draws($turn, $draw_message);
	//game_results returns an Array to track games to be added to the end of the query string
	$game_results = game_results($add_draw, $add_win_player1, $add_win_player2);
	//Join $game_results Array to be added to the end of the query string
	$joined_game_results = implode('', $game_results);
	//Creates a substring of numbers starting at $scoreboard[9] to add to the end of the query string
	$game_history = game_history($scoreboard);
	//Shows a link to play against a computer or another person depending on how the game is currently set up
	$computer_or_person = computer_or_person($scoreboard);
	//These return the number of wins each player has
	$p1_game_history = player1_game_history($game_history);
	$p2_game_history = player2_game_history($game_history);
	$computer_game_history = computer_game_history($game_history);
	//This returns the number of draws
	$tied_history = tied_game_history($game_history);
	//This returns an Array of empty spaces for the computer player to chose from
	$available_moves = available_moves($scoreboard);
	//This returns an Array of Player 1's moves so the computer knows where Player 1 has went
	$player_moves = player_moves($scoreboard);
	//Computer player logic
	$computer_player = computer_player($scoreboard, $turn);
	//Returns an 8 or a 0 depending on which type of opponent has been chosen
	$play_computer_again = play_computer_again($scoreboard);
	//Checks if the game has ended
	$game_is_over = check_if_game_is_over($score_keeper, $turn);
	//Translates the Query String after the game has ended to X, O, or -
	$translated_scoreboard = translate_scoreboard($scoreboard, $game_is_over);

	$save_game = save_game($translated_scoreboard, $game_is_over);


?>