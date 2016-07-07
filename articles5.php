<?php
	$thisPage = "Tic Tac Toe Journal";
	include("top.php");
?>

	
				<h2>Tic Tac Toe Journal</h2>
				
				<p>When I started working on my tic tac toe project I thought that by changing the image that was displayed in each space on the board was a great idea. About half way through writing the code that I was making things more complex then they needed to be. I was using HTML to resize my images as they loaded which ended up creating a slight lag when a move was made. Plus I was spending way too much time trying to find just the right image to make it look like it wasn't an image. So I decided to start over and focus more on usin a query string.</p>

				<p>The boxes in the tic tac toe board were numbered in my mind but I previously had never actually put that concept into my code anywhere. Realizing my mistake, I assigned numbers to each of the boxes and created a query string to represent all the boxes and their values. I decided to set empty boxes to 3, boxes taken by Player 1 to 1, and boxes taken by Player 2 to 2. My first thought when doing this ws that I would subtract either 1 or 2 from 3 in the query string which would then change the appropriate boxes on the board. I ended up finding that by just assigning the box a new value in the query string was less complicated and had the same desired outcome.</p>

				<p>Once I had the query string determining what was shown in the boxes, I was able to start writing the functions that would determine whos turn it was and how a winner would be determined. Once I had the basic functionality of the game working as expected, I began working on keeping track of each games' outcome. At first I thought that by adding the number of wins each player had onto the end of the query string each time the link to a new game was clicked would store the win history for the next game. I soon found that only 1 win would be stored at the end of the query string because it was being replaced each time the game would start over.</p>

				<p>After a lot of trial and error I ended up doing some research about storing data from page to page. I found that sessions seemed to be my best bet for what I was trying to accomplish. Even after finding sessions there was even more trial and error until I finally got it to store the data the way I was expecting. I changed my approach to how the game results were being determined but still kept track of wins by adding the data to an array and attaching it to the end of the query string.</p>

				<p>Now the game is working as expected and I have written at least three tests for each of the functions I have as I wrote them. I have some more work to do with adding more functionality and style to the game but at least I feel like I have separated my code into separate functions that work well together.</p>
			</div>
		</div>




<?php include("bottom.php"); ?>