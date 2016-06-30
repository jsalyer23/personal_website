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
	//Create an array containing the wins?....Maybe not...
	$possible_wins = array("", "", "", "", "", "", "", "", "");
?>