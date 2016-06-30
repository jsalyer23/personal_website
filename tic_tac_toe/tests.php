<?php
	include("functions2.php");
	echo "---------------Testing Starts Here-----------------";

	if(display_moves("X") == '<a href="index.php?move=X" name="X"><img src="x.jpg" alt="X" width= 100px height= 100px></a>') {
		echo "Success";
	}
	else {
		echo "Failure";
	}
	

?>