<?php
	include("rps.php");

	echo "Testing that if you pass in rock and rock, it's a tie.";
	if (rock_paper_scissors("rock", "rock") == "It's a tie!!"){
		echo "Success!";
	}
	else{
		echo "Failure!";
	}


	echo "Testing that the human can win.";
	if (rock_paper_scissors("paper", "rock") == "You win!!!"){
		echo "Success!";
	}
	else{
		echo "Failure!";
	}


	echo "Testing that if you pass in Scissors and rock, the computer wins.";
	if (rock_paper_scissors("scissors", "rock") == "You lose..."){
		echo "Success!";
	}
	else{
		echo "Failure!";
	}


	echo "Testing for a tie.";
	if (rock_paper_scissors("scissors", "scissors") == "It's a tie!!"){
		echo "Success!";
	}
	else{
		echo "Failure!";
	}


?>