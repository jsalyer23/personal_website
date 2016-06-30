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
		<?php for ($i=0; $i<9; $i++){
			$val = $i;
			echo '<form action="" method="post" width="60px" height="60px">
					<table width="60px" height="60px"><tr>
					<td><center><input type="submit" name="move[]" value=$i width="60px" height="60px"></center></td>
					</tr></table></form>';
		}
		?>

		<div><!--Might make these individual divs?-->
			<h2>Player 1 Wins: <?php echo $player1_wins; ?></h2>
			<h2>Player 2 Wins: <?php echo $player2_wins; ?></h2>
			<h2>Draws: <?php echo $tie_count; ?></h2>
		</div>
	</div>



<?php include("../bottom.php"); ?>