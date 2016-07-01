<?php
	include("functions2.php");
	echo "---------------Testing Starts Here-----------------\n\n";
	echo "Testing if Player 1 wins if they have 3 X's VERTICALLY on the LEFT COLUMN\n\n";
	if (did_they_win("111223333") == "Player 1 Wins!!!"){
		echo "Success";
	}
	else {
		echo "Failure";
	}
	// echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's HORIZONTALLY on the TOP ROW.";
	// echo "---------------------------------------------------";

	// echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's HORIZONTALLY on the CENTER ROW.";
	// echo "---------------------------------------------------";

	// echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's HORIZONTALLY on the BOTTOM ROW.";
	// echo "---------------------------------------------------";

	// echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if Player 2 wins if they have 3 O's DIAGONALLY TOP LEFT TO BOTTOM RIGHT.";
	// echo "---------------------------------------------------";

	// echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if Player 1 wins if they have 3 X's DIAGONALLY TOP RIGTH TO BOTTOM LEFT.";
	// echo "---------------------------------------------------";

	// 	echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if Player 1 DOES NOT WIN if they go after the game's OVER.";
	// echo "---------------------------------------------------";

	// 	echo "---------------Testing Starts Here-----------------\n\n";
	// echo "\n\n\n\n";
	// echo "Testing if THERE IS A TIE.";
	// echo "---------------------------------------------------";
?>