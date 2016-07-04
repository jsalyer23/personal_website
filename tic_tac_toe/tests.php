<?php
	include("functions2.php");

	//*********************************************************************************************
	//Tests for player1_game_history() function (looks for Player 1 wins (5s) in the sub string taken
	//from the end of the query string and increments by one for each 5 found)
	//*********************************************************************************************
	
	echo "------------Testing Starts Here----------------";
	echo "\n\n";
	echo "Testing that player1_game_history() looks for 5s in the sub sting and counts them, should return 1.\n";

	if (player1_game_history("567") == 1) {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}

	echo "------------Testing Starts Here----------------";
	echo "\n\n";
	echo "Testing that player1_game_history() looks for 5s in the sub sting and counts them, should return 3.\n";

	if (player1_game_history("56557") == 3) {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}
	//*********************************************************************************************
	//Tests for player_moves() function (looks for moves that have been made (1s) in the query string
	//then adds those moves to an Array)
	//*********************************************************************************************
	
	// 	echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player_moves() adds all of the taken spaces to an Array. Should return [1, 1, 1].\n";

	// if (player_moves('1112233338') == array(1, 1, 1)) {
	// 	echo "Success\n";
	// 	print_r($player_moves);
	// }
	// else {
	// 	echo "Failure\n";
	// }


	//*********************************************************************************************
	//Tests for available_moves() function (looks for empty spaces (3s)
	//from the query string and adds them to an array)
	//*********************************************************************************************

	// 	echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that available_moves() function adds available spaces to Array. Should return [3,3,3,3,3,3].\n";

	// if (available_moves("2113333338") == array(3, 3, 3, 3, 3, 3)) {
	// 	echo "Success\n";
	// 	print_r($available_moves);
	// }
	// else {
	// 	echo "Failure\n";
	// }
	


	//*********************************************************************************************
	//Tests for game_results() function (adds numbers representing wins and draws to an Array, returns Array)
	//*********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that if Player 1 wins, 5 is added to the $game_results array.\n";

	// if (game_results(0, 1, 0) == array("5")) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "------------Testing Starts Here----------------";
	// 	echo "\n\n";
	// echo "Testing that if Player 1 wins, 6 is added to the $game_results array.\n";

	// if (game_results(0, 0, 1) == array("6")) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "------------Testing Starts Here----------------";
	// 	echo "\n\n";
	// echo "Testing that if there is a tie, 7 is added to the $game_results array.\n";

	// if (game_results(1, 0, 0) == array("7")) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }


	//*********************************************************************************************
	//Tests for did_they_win() function (checks to see if there has been a winner, returns string)
	//*********************************************************************************************

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's VERTICALLY on the LEFT COLUMN.\n";
	// if (did_they_win("111223333") == "Player 1 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }
	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's HORIZONTALLY on the TOP ROW.\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("133122133") == "Player 1 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's HORIZONTALLY on the CENTER ROW.\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("311213313") == "Player 1 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's HORIZONTALLY on the BOTTOM ROW.\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("331321321") == "Player 1 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }
	// // 	echo "---------------Testing Starts Here-----------------";
	// // echo "\n\n";
	// // echo "Testing if Player 2 wins if they have 3 O's DIAGONALLY TOP LEFT TO BOTTOM RIGHT.\n";
	// // echo "---------------------------------------------------";
	// // 	if (did_they_win("211323332") == 1){
	// // 	echo "Success\n";
	// // }
	// // else {
	// // 	echo "Failure\n";
	// // }

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 2 wins if they have 3 O's DIAGONALLY TOP LEFT TO BOTTOM RIGHT.\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("211323332") == "Player 2 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's DIAGONALLY TOP RIGTH TO BOTTOM LEFT.\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("331313122") == "Player 1 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if THERE IS A TIE.\n";
	// echo "---------------------------------------------------";
	// 	if (whos_turn("112221121") == "It's a draw!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }


	//*********************************************************************************************
	//Tests for
	//*********************************************************************************************


	// 	echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo ".\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("") == "Player 1 Wins!!!"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	
?>