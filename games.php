<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MJRLegends - Games</title>
		<?php 
			include("header.php"); // Include the header section that is in a external file
		?>
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<a class="navbar-brand" href="">MJRLegends.com</a>
			<div class="main_container">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="http://www.mjrlegends.com">Home Page</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#pacman">Pac-Man-Remake</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#falldown">Falldown - Remake</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Intro Header -->
		<header class="main-header">
			<div class="intro-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<h1 class="brand-heading">MJRLegends</h1>
							<p class="intro-text">
							</p>
							<a href="#pacman" class="btn btn-circle js-scroll-trigger">
							<i class="fa fa-angle-double-down animated"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Pac-Man-Remake Section -->
		<section id="pacman" class="mods-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2 style="text-align: center;color: #4286f4">Pac-Man-Remake</h2>
						<h4> Game Information: </h4>
						<h6> The Game will reset when you have completed the game or died.</h6>
						<h4> Controls: </h4>
						<h6> W = Up, S = Down, A = Left, D = Right</h6>
						<h6> ESC - To Pause/Unpause the game </h6>
						<h6> Left Click Mouse - Click buttons in the main menu </h6>
						<a href="/pacman/pacman.html" class="btn btn-default btn-lg">Play Game</a> <br><br>
						<a href="https://github.com/MJRLegends/Pac-Man" class="btn btn-default btn-lg">Source Code</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Falldown Section -->
		<section id="falldown" class="mods-section-alt">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2 style="text-align: center;color: #4286f4">Falldown-Remake</h2>
							<h4> Game Information: </h4>
							<h6> The game gets faster as you go.</h4>
							<h6> The player will gain a score of 1 per line passed!</h4>
							<h6> You can change the difficulty in the settings menu! The default is medium!</h4>
							<h4> Controls: </h4>
							<h6> Left/right Arrows = Move player </h4>
							<h6> ESC - To Pause/Unpause the game </h4>
							<h6> Left Click Mouse - Click buttons in the main menu </h4>
							<a href="/falldown/falldown.html" class="btn btn-default btn-lg">Play Game</a> <br><br>
						<a href="https://github.com/MJRLegends/Falldown" class="btn btn-default btn-lg">Source Code</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Section -->
		<section id="contact" class="content-section text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2>Contact MJRLegends</h2>
						<ul class="list-inline banner-social-buttons">
							<li class="list-inline-item">
								<a href="https://twitter.com/mjrlegends" class="btn btn-default btn-lg">
								<i class="fa fa-twitter fa-fw"></i>
								<span class="network-name">Twitter</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://github.com/mjrlegends" class="btn btn-default btn-lg">
								<i class="fa fa-github fa-fw"></i>
								<span class="network-name">Github</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://discord.gg/VEgV7Pk" class="btn btn-default btn-lg">
								<i class="fa fa-users fa-fw"></i>
								<span class="network-name">Discord</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php 
			include("footer.php"); // Include the footer section that is in a external file
		?>
	</body>
</html>