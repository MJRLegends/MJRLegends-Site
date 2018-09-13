<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MJRLegends - Falldown-Remake</title>
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
							<a class="nav-link js-scroll-trigger" href="http://www.mjrlegends.com/games.php">Games</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#pacman">Falldown-Remake</a>
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
							<a href="#about" class="btn btn-circle js-scroll-trigger">
							<i class="fa fa-angle-double-down animated"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Falldown Section -->
		<section id="falldown" class="mods-section-alt">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2 style="text-align: center;color: #4286f4">Falldown-Remake</h2>
						<canvas id="falldownCanvas" width="850" height="600" style="border: 1px dashed black; background: black;">
						</canvas>
						<script type="text/javascript" src="scripts/main.js"></script>
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