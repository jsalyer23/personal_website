<?php	
		$choices = array(

		"rock" => '<a href="?weapon=rock&name=$player_name"><img src="rock.jpg" alt="Rock" class="rpsImage"></a>',

		"paper" => '<a href="?weapon=paper"><img src="paper2.jpg" alt="Paper" class="rpsImage"></a>',

		"scissors" => '<a href="?weapon=scissors"><img src="shredding_scissors.jpg" alt="Scissors" class="rpsImage"></a>'
		);

	
	foreach($choices as $weapon => $picture) {
		echo $picture;
		}


	function random_computer_choice(){
		$weapons = array("rock", "paper", "scissors");
		return $weapons[rand (0, 2)];
	}

	function display_choices($player_choice, $computer_choice)	{
			echo "<h2>Your Choice: </h2>" . " " . strtoupper($player_choice);
			echo "<h2>Computer Choice: </h2>" . " " . strtoupper($computer_choice);
	}

	function rock_paper_scissors($player_choice, $computer_choice) {

		// $computer_choice = random_computer_choice();

		if ($player_choice == $computer_choice) {
			return "<h1 class='winMessage'>It's a tie!!</h1>";
		}

		if ($player_choice == "scissors" && $computer_choice == "paper" ||
			$player_choice == "paper" && $computer_choice == "rock" ||
			$player_choice == "rock" && $computer_choice == "scissors") {

			return "<h1 class='winMessage'>You win!!!</h1>";
		}

		if ($computer_choice == "scissors" && $player_choice == "paper" ||
			$computer_choice == "paper" && $player_choice == "rock" ||
			$computer_choice == "rock" && $player_choice == "scissors") {

			return "<h1 class='winMessage'>You lose...";
		}
		
	}

?>