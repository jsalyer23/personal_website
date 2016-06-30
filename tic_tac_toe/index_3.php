<?php
	session_start();
	$thisPage = "Tic Tac Toe";
	include("top3.php");
	include("functions3.php");
?>
	<div>
		<div>
			<h1>Tic Tac Toe</h1>
		</div>
		<div>
			<form class="board" action="" method="post">
				<table class="board__table" width="60px" height="60px">
					<tr>
					<?php for ($i=0; $i<3; $i++){
						$boxes ='<td class="board__cells">
									<input type="submit" name="move[' . $i . ']" value="" width="60px" height="60px">
								</td>';
								
						// if ($i == 2 || $i == 5) {
						// 	echo '<br>';
						// } 
						echo $boxes . "<br>";
					}
					for ($i=0; $i<3; $i++){
						$boxes ='<td class="board__cells">
									<input type="submit" name="move[' . $i . ']" value="" width="60px" height="60px">
								</td>';
						echo $boxes . "<br>";
						}
					?>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<!--Reset button for the game-->
			<form action="index.php" method="post">
				<input type="submit" name="reset" value="reset">Play Again?</input>
			</form>
		</div>
		<div>
			<!--Might make these individual divs?-->
			<h2>Player 1 Wins: <?php echo $player1_wins; ?></h2>
			<h2>Player 2 Wins: <?php echo $player2_wins; ?></h2>
			<h2>Draws: <?php echo $tie_count; ?></h2>
		</div>
	</div>



<?php include("../bottom.php"); ?>