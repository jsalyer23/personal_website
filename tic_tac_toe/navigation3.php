		<div class="nav-wrapper">
			<div class="topLeft">
				<div class="topLeft__name">
					<h1>Joshua Salyer</h1>
				</div>

				<div class="topLeft__icons">
			      	<a href="http://twitter.com/joshsalyer23"><img class="social_icon" alt="Twitter Logo" src="../img/twitter_256.png"></a>
			      	<a href="http://facebook.com/joshsalyer23"><img class="social_icon" alt="Facebook Logo" src="../img/facebook_black.png"></a>
			      	<a href="http://github.com/jsalyer23"><img class="social_icon" alt="GitHub Logo" src="../img/GitHub-Mark-64px.png"></a>
				</div>

			</div>

			<ul class="nav">
				<li class="navTitles">Pages</li>

					<li class="navTitles__page">
						<div class="navLinks" <?php if ($thisPage == "Home") {echo " id=\"current_page\"";} ?>>
							<a href="../index.php">Home</a>
						</div>
					</li>

					<li class="navTitles__page">
						<div class="navLinks" <?php if ($thisPage == "Goals") {echo " id=\"current_page\"";} ?>>
							<a href="../goals.php">Goals</a>
						</div>
					</li>

					<li class="navTitles__page">
						<div class="navLinks" <?php if ($thisPage == "Social Media") {echo " id=\"current_page\"";} ?>>
							<a href="../social_media.php">Social Media</a>
						</div>
					</li>

					<li class="navTitles__page">
						<div class="navLinks" <?php if ($thisPage == "My Family") {echo " id=\"current_page\"";} ?>>
							<a href="../my_family.php">My Family</a>
						</div>
					</li>
			</ul>

			<ul class="nav">
				<li class="navTitles">Articles</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "SQRL") {echo " id=\"current_page\"";} ?>>
						<a href="../articles1.php">SQRL</a>
					</div>
				</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "The World Wide Web") {echo " id=\"current_page\"";} ?>>
						<a href="../articles2.php">The World Wide Web</a>
					</div>
				</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "File Paths") {echo " id=\"current_page\"";} ?>>	
						<a href="../articles3.php">File Paths</a>
					</div>
				</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "What Makes Up An HTML Document?") {echo " id=\"current_page\"";} ?>>	
						<a href="../articles4.php">What Makes Up An HTML Document?</a>
					</div>
				</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "Tic Tac Toe Journal") {echo " id=\"current_page\"";} ?>>	
						<a href="../articles5.php">Tic Tac Toe Journal</a>
					</div>
				</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "Personal Dictionary") {echo " id=\"current_page\"";} ?>>
						<a href="../articles6.php">Personal Dictionary</a>
					</div>
				</li>
	
			</ul>

			<ul class="nav">
				<li class="navTitles">Projects</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "Rock Paper Scissors") {echo " id=\"current_page\"";} ?>>	
						<a href="../rock_paper_scissors/welcome_page2.php">Rock Paper Scissors</a>
					</div>
				</li>

				<li class="navTitles__page">
					<div class="navLinks" <?php if ($thisPage == "Tic Tac Toe") {echo " id=\"current_page\"";} ?>>	
						<a href="index.php?scoreboard=3333333330">Tic Tac Toe</a>
					</div>
				</li>
			</ul>
			
		</div>