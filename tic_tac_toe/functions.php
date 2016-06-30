<?php		
	 //ADD AN IF STATEMENT WITHIN THE BOXES LOOP TO CHANGE IF IT IS NOT ""
	//Create nine drop down selectors for tic tac toe game and make them into an Array
	function create_drop_down(){
		for ($eachBox = 0; $eachBox <= 8; $eachBox++) {

			$unset_boxes = '<select name= "box[$eachBox]">
								<option value= "O" selected>O</option>
							</select>'; 
							// if ($_POST["box[$eachBox"] == "O"){
							// 	return 'value= "O" selected>O';
							// elseif ( $_POST["box[$eachBox"] == "X")
							// 	return 'value= "X" selected>X';
							// else
							// 	return 'value= "" selected>';
							// }
							// '</option>
							// </select>';

			echo $unset_boxes;
			//Create line breaks to make a square of dropdowns
			if ($eachBox == 2 || $eachBox == 5){
				echo "<br>";
			}
			
		}
		print_r($_POST);
	}	
?>
<!-- isset($_POST["box[$eachBox]"] && 
isset($_POST["box[$eachBox]"] && -->