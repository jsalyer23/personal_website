
		<div class="nav-wrapper">
			<header>
				Joshua Salyer

		      	<a class="social_icon" href="http://twitter.com/joshsalyer23"><img alt="Twitter Logo" src=""></a>
		      	<a class="social_icon" href="http://facebook.com/joshsalyer23"><img alt="Facebook Logo" src="img/FB-f-Logo__blue_50.png"></a>
		      	<a class="social_icon" href="http://github.com/jsalyer23"><img alt="GitHub Logo" src="img/GitHub-Mark-64px.png"></a>
			</header>

			<ul>
				<li>Pages

					<li <?php if ($thisPage == "Home") {echo " id=\"current_page\"";} ?>>
						<a href="index.php">Home</a>

					<li <?php if ($thisPage == "Goals") {echo " id=\"current_page\"";} ?>>
						<a href="goals.php">Goals</a>

					<li <?php if ($thisPage == "Social Media") {echo " id=\"current_page\"";} ?>>
						<a href="social_media.php">Social Media</a>

					<li <?php if ($thisPage == "My Family") {echo " id=\"current_page\"";} ?>>	
						<a href="my_family.php">My Family</a>

					<li <?php if ($thisPage == "Rock Paper Scissors") {echo " id=\"current_page\"";} ?>>	
						<a href="rock_paper_scissors/index.php">Rock Paper Scissors</a>

				</li>
			</ul>

			<ul>
				<li>Articles

					<li <?php if ($thisPage == "SQRL") {echo " id=\"current_page\"";} ?>>
						<a href="articles1.php">SQRL</a>

					<li <?php if ($thisPage == "The World Wide Web") {echo " id=\"current_page\"";} ?>>
						<a href="articles2.php">The World Wide Web</a>

					<li <?php if ($thisPage == "File Paths") {echo " id=\"current_page\"";} ?>>	
						<a href="articles3.php">File Paths</a>

					<li <?php if ($thisPage == "What Makes Up An HTML Document?") {echo " id=\"current_page\"";} ?>>	
						<a href="articles4.php">What Makes Up An HTML Document?</a>
				</li>
			</ul>
			
		</div>