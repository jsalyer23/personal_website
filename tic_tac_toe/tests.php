<?php
	include("functions2.php");

	// 	*********************************************************************************************
	// Tests for computer_game_history() function (looks for games the computer won (8s) in the sub 
	// string taken from the end of the query string and returns the number of them found)
	// *********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_game_history() looks for 8s in the sub string and counts them, should return 3.\n";

	// if (computer_game_history("586878") == 3) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_game_history() looks for 8s in the sub string and counts them, should return 7.\n";

	// if (computer_game_history("5868888878") == 7) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_game_history() doesn't find any 8s, should return 0.\n";

	// if (computer_game_history("555667") == 0) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	*********************************************************************************************
	// Tests for add_to_win_computer() function (checks if the computer player has been chosen and if
	// it has won. If both those things are true then it returns 1)
	// *********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that add_to_win_computer() checks if the computer player is Player 2 and if it has won,\n 
	// 	should return 1.\n";

	// if (add_to_win_computer("Player 2 Wins!!!", "2113233328") == 1) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that add_to_win_computer() sees that Player 2 is a human, should return nothing.\n";

	// if (add_to_win_computer("Player 2 Wins!!!", "2113233320") == "") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }



	// 	*********************************************************************************************
	// Tests for computer_player() function (checks if the center space is taken and takes it if it
	// isn't)
	// *********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_player() checks if the center space is taken and takes it if it isn't, 
	// 	should return '1332211338'\n";

	// if (computer_player("1332311338", 2) == "1332211338") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_player() checks if the center space is taken and doesn't take it, 
	// 	should return '1332111238'\n";

	// if (computer_player("1332111238", 2) == "1332111238") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	*********************************************************************************************
	//BLANK TESTS
	// Tests for () function (checks if the center space is taken and takes it if it
	// isn't)
	// *********************************************************************************************

	echo "------------Testing Starts Here----------------";
	echo "\n\n";
	echo "Testing that () checks if the center space is taken and takes it if it isn't, 
		should return ''\n";

	if ( == ) {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}

	echo "------------Testing Starts Here----------------";
	echo "\n\n";
	echo "Testing that () checks if the center space is taken and doesn't take it, 
		should return ''\n";

	if ( == ) {
		echo "Success\n";
	}
	else {
		echo "Failure\n";
	}

		// 	*********************************************************************************************
	// Tests for check_corners() function (checks if the corner spaces are taken and takes it if it
	// isn't)
	// *********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that check_corners() checks if the corner spaces are taken and takes ONLY ONE if it isn't, 
	// 	should return '2332311338'\n";

	// if (check_corners("3332311338", 2) == "2332311338") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that check_corners() checks if the corner spaces are taken and takes the LAST ONE if it isn't, 
	// 	should return '1312311328'\n";

	// if (check_corners("1312311338", 2) == "1312311328") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that check_corners() checks if the corner spaces are taken and takes the FIRST ONE if it isn't, 
	// 	should return '2312311318'\n";

	// if (check_corners("3312311318", 2) == "2312311318") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that check_corners() checks if the corner spaces are taken and doesn't take them, 
	// 	should return ''\n";

	// if (check_corners("1312111218", 2) == "") {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	//*********************************************************************************************
	//Tests for tied_game_history() function (looks for tied games (7s) in the sub string taken
	//from the end of the query string and returns the number of them found)
	//*********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_game_history() looks for 9s in the sub sting and counts them, should return 5.\n";

	// if (computer_game_history("5997699977") == 5) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_game_history() looks for 9s in the sub sting and counts them, should return 3.\n";

	// if (computer_game_history("57699977") == 3) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that computer_game_history() looks for 9s in the sub sting and counts them, should return 0.\n";

	// if (computer_game_history("57677") == 0) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	//*********************************************************************************************
	//Tests for tied_game_history() function (looks for tied games (7s) in the sub string taken
	//from the end of the query string and returns the number of them found)
	//*********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that tied_game_history() looks for 7s in the sub sting and counts them, should return 3.\n";

	// if (tied_game_history("57677") == 3) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that tied_game_history() looks for 7s in the sub sting and counts them, should return 5.\n";

	// if (tied_game_history("5767777") == 5) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that tied_game_history() looks for 7s in the sub sting and doesn't find any, should return 0.\n";

	// if (tied_game_history("5655") == 0) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	//*********************************************************************************************
	//Tests for player2_game_history() function (looks for Player 2 wins (6s) in the sub string taken
	//from the end of the query string and returns the number of them found)
	//*********************************************************************************************

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player2_game_history() looks for 6s in the sub sting and counts them, should return 1.\n";

	// if (player2_game_history("567") == 1) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player2_game_history() looks for 6s in the sub sting and counts them, should return 7.\n";

	// if (player2_game_history("56566666657") == 7) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player2_game_history() looks for 6s in the sub sting and doesn't find any, should return 0.\n";

	// if (player2_game_history("5557") == 0) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	//*********************************************************************************************
	//Tests for player1_game_history() function (looks for Player 1 wins (5s) in the sub string taken
	//from the end of the query string and returns the number of them found)
	//*********************************************************************************************
	
	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player1_game_history() looks for 5s in the sub sting and counts them, should return 1.\n";

	// if (player1_game_history("567") == 1) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player1_game_history() looks for 5s in the sub sting and counts them, should return 3.\n";

	// if (player1_game_history("56557") == 3) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player1_game_history() looks for 5s in the sub sting and doesn't find any, should return 0.\n";

	// if (player1_game_history("67767") == 0) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	//*********************************************************************************************
	//Tests for player_moves() function (looks for moves that have been made (1s) in the query string
	//then adds those moves to an Array)
	//*********************************************************************************************
	
	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player_moves() adds all of the taken spaces to an Array. Should return [1, 1, 1].\n";

	// if (player_moves('1112233338') == array(1, 1, 1)) {
	// 	echo "Success\n";
	// 	print_r($player_moves);
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that player_moves() doesn't add anything if there are no moves made. Should return [].\n";

	// if (player_moves('3332233338') == array()) {
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

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that available_moves() function adds available spaces to Array. Should return [3,3,3,3,3,3].\n";

	// if (available_moves("2113333338") == array(3, 3, 3, 3, 3, 3)) {
	// 	echo "Success\n";
	// 	print_r($available_moves);
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that available_moves() doesn't add any spaces if all spaces are taken. Should return [].\n";

	// if (available_moves("2112212228") == array()) {
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

	// if (game_results(0, 1, 0, 0) == array("5")) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "------------Testing Starts Here----------------";
	// 	echo "\n\n";
	// echo "Testing that if Player 1 wins, 6 is added to the $game_results array.\n";

	// if (game_results(0, 0, 1, 0) == array("6")) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "------------Testing Starts Here----------------";
	// 	echo "\n\n";
	// echo "Testing that if there is a tie, 7 is added to the $game_results array.\n";

	// if (game_results(1, 0, 0, 0) == array("7")) {
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "------------Testing Starts Here----------------";
	// echo "\n\n";
	// echo "Testing that if the computer wins, 9 is added to the $game_results array.\n";

	// if (game_results(0, 0, 0, 1) == array("9")) {
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
	// 	echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing if Player 2 wins if they have 3 O's DIAGONALLY TOP LEFT TO BOTTOM RIGHT.\n";
	// echo "---------------------------------------------------";
	// 	if (did_they_win("211323332") == 1){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

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
	//Tests transtlate_scoreboard($scoreboard, $game_is_over) function which should translate
	//the query string at the end of a game to X, O, or -.
	//$scoreboard = Query String
	//$game_is_over = String returned if the game has come to an end ("yes")
	//*********************************************************************************************


	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing for translated scoreboard of a TIED GAME, should return XXOOOXXOX0";
	// echo "---------------------------------------------------";
	// 	if (translate_scoreboard("1122211210", "yes") == "XXOOOXXOX0"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing for translated scoreboard for PLAYER 1 WIN, should return --X-X-XOO0";
	// echo "---------------------------------------------------";
	// 	if (translate_scoreboard("3313131220", "yes") == "--X-X-XOO0"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing for translated scoreboard for PLAYER 2 WIN, should return OXX-O---O0";
	// echo "---------------------------------------------------";
	// 	if (translate_scoreboard("2113233320", "yes") == "OXX-O---O0"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }

	// 	echo "---------------Testing Starts Here-----------------";
	// echo "\n\n";
	// echo "Testing for translated scoreboard if the computer is playing, should return OXX-O---O8";
	// echo "---------------------------------------------------";
	// 	if (translate_scoreboard("2113233328", "yes") == "OXX-O---O8"){
	// 	echo "Success\n";
	// }
	// else {
	// 	echo "Failure\n";
	// }


	

	
?>