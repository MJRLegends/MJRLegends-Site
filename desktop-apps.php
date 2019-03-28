<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MJRLegends - Desktop Apps</title>
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
							<a class="nav-link js-scroll-trigger" href="#forgetool">MC Forge Tool</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#modpackpackager">MC Mod Pack Packager</a>
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
							<a href="#forgetool" class="btn btn-circle js-scroll-trigger">
							<i class="fa fa-angle-double-down animated"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Minecraft Forge Tool Section -->
		<section id="forgetool" class="content-section text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2 style="text-align: center;color: #4286f4">Minecraft Forge Tool</h2>
						<h4> Information: </h4>
						<p>  
							This tool is a c++ application that allows for easy running of ForgeGradle commands!
						</p>
						<h4> Includes the following features: </h4>
						<ul>
							<li> Setup Workspace(setupDevcompWorkspace) </li>
							<li> Setup Workspace(setupCiWorkspace) </li>
							<li> Setup Eclipse Files </li>
							<li> Setup IntelliJ IDEA Files </li>
							<li> Build Project (build) </li>
							<li> Build Project (tasks) </li>
							<li> Clean Eclipse Files </li>
							<li> Clean IntelliJ IDEA Files </li>
							<li> Clean Build Directory. </li>
							<li> Run Minecraft Client </li>
							<li> Run Minecraft Server </li>
							<li> Generate Javadoc API documentation</li>
						</ul>
						<a href="https://mjrlegends.com/downloads/Minecraft Forge Tool v1.5.2.exe" class="btn btn-default btn-lg">Download v1.5.2</a> <br><br>
						<a href="https://mjrlegends.com/downloads/Minecraft Forge Tool v1.5.1.exe" class="btn btn-default btn-lg">Download v1.5.1</a> <br><br>
						<a href="https://mjrlegends.com/downloads/Minecraft Forge Tool v1.5.0.exe" class="btn btn-default btn-lg">Download v1.5.0</a> <br><br>
						<a href="https://mjrlegends.com/downloads/Minecraft Forge Tool v1.0.0.exe" class="btn btn-default btn-lg">Download v1.0.0</a> <br><br>
						<a href="https://github.com/MJRLegends/Minecraft-Forge-Tool" class="btn btn-default btn-lg">Source Code</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Minecraft Mod Pack Packager Section -->
		<section id="modpackpackager" class="content-section-alt content-section text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2 style="text-align: center;color: #4286f4">Minecraft Mod Pack Packager</h2>
						<h4> Information: </h4>
						<p>  
							A program to package mod packs.
						</p>
						<h4> Supported Launchers: </h4>
						<ul>
							<li> FTB Launcher </li>
						</ul>
						<h4> Other Features: </h4>
						<ul>
							<li> Save Settings </li>
							<li> Built in support for Client & Server files </li>
							<li> Support to include certain folders & files for both Client & Server files </li>
							<li> Support to include certain Mods Client & Server files </li>
						</ul>
						<a href="https://mjrlegends.com/downloads/Minecraft Mod Pack Packager v2.0.0.exe" class="btn btn-default btn-lg">Download v2.0.0</a> <br><br>
						<a href="https://mjrlegends.com/downloads/Minecraft Mod Pack Packager v1.0.0.exe" class="btn btn-default btn-lg">Download v1.0.0</a> <br><br>
						<a href="https://github.com/MJRLegends/Minecraft-Mod-Pack-Packager" class="btn btn-default btn-lg">Source Code</a>
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