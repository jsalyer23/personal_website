<?php		
	 //ADD AN IF STATEMENT WITHIN THE BOXES LOOP TO CHANGE IF IT IS NOT ""
	//Create nine drop down selectors for tic tac toe game and make them into an Array
	function create_drop_down(){
		for ($eachBox = 0; $eachBox <= 8; $eachBox++) {

			$unset_boxes = '<select name= "box[$eachBox]">
								<option value= ""'//DO THIS MORE TIMES MAYBE IT WILL WORK!!!
							if (isset($_POST["box[$eachBox]"] == ""){
								echo 'selected';
							}
							'></option>';
				
			//Create line breaks to make a square of dropdowns
			if ($eachBox == 2 || $eachBox == 5){
				echo "<br>";
			}
			print_r($_POST);
		}
	
	}	
?>
