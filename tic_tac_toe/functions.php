<?php
	//Create nine radio buttons for tic tac toe game
	function create_buttons(){
		$radio_button = "<input type= \"radio\" value=\"on\">";
		for ($eachBox = 0; $eachBox <= 8; $eachBox++) {
			echo $radio_button;
			if ($eachBox == 2 || $eachBox == 5){
				echo "<br>";
			}
		}
	}	
	

?>