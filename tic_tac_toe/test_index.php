<?php
	$thisPage = "Tic Tac Toe";
	include("top3.php");
?>

	<h1>Tic Tac Toe</h1>
		<!-- Collect palyer's moves then return to the same page once the move is submitted -->
		<form method= "get" action= "test_index.php">
			<select name= "box1">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>
			
			<select name= "box2">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>
			
			<select name= "box3">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>

			<br>

			<select name= "box4">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>
			
			<select name= "box5">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>
			
			<select name= "box6">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>

			<br>

			<select name= "box7">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>

			<select name= "box8">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>

			<select name= "box9">
				<option value= "" ></option>
				<option value= "X" >X</option>
				<option value= "O">O</option>
			</select>

			<br>

			<input type= "submit" name= "submit" value= "Submit" />
		</form>
		<?php 
			if (isset($_GET["submit"])){
				if($_GET["box1"]){
					echo '<select name= "box1">
							<option value= "" ></option>
							<option value= "X" selected>X</option>
							<option value= "O">O</option>
						</select>';
				}
			}
		?>

<?php include("../bottom.php"); ?>

	<!-- 	<?php 
				
				// include("functions.php");
			
				//Show the dropdown boxes on the page 
				// create_drop_down();
				//Create Submit button
				// echo "<input type= "submit" name= "submit" value= "Submit" />";

			?> -->