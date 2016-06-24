<?php	
	$player_name = $_GET["name"];

	$choices = array(

		"rock" => '<a href="?weapon=rock&name=$player_name"><img src="rock_paper_scissors/rock.jpg" alt="Rock"></a>',

		"paper" => '<a href="?weapon=paper"><img src="Code/personal_website/rock_paper_scissors/rps_images/paper.jpg" alt="Paper"></a>',

		"scissors" => '<a href="?weapon=scissors"><img src="rock_paper_scissors/rps_images/scissors.png" alt="Scissors"></a>'
	);

	foreach($choices as $weapon => $picture) {
		echo $picture;
		}

	function rock_paper_scissors() {


		$weapons = array("rock", "paper", "scissors");
		$player_choice = $_GET["weapon"];
		$computer_choice = $weapons[rand (0, 2)];


		if ($player_choice == $computer_choice) {
			echo "<h1>It's a tie!!</h1>";
		}

		if ($player_choice == "scissors" && $computer_choice == "paper" ||
			$player_choice == "paper" && $computer_choice == "rock" ||
			$player_choice == "rock" && $computer_choice == "scissors") {

			echo "<h1>You win!!!</h1>";
		}

		if ($computer_choice == "scissors" && $player_choice == "paper" ||
			$computer_choice == "paper" && $player_choice == "rock" ||
			$computer_choice == "rock" && $player_choice == "scissors") {

			echo "<h1>You lose...</h1>";
		}
		echo "<h2>Your Choice: </h2>" . " " . strtoupper($player_choice);
		echo "<h2>Computer Choice: </h2>" . " " . strtoupper($computer_choice);
	}
?>