<?php
include ("includes/functions.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Havishaa</title>
		<link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="javascripts/jquery-1.8.1.min.js"></script>
		<script type="text/javascript" src="javascripts/jquery-ui-1.8.23.custom.min.js"></script>
		</link>
	</head>
	<body>
		<div class="container">
			<div class="logo-slide">
				<div class="logo">
					<img src="images/havishaa-logo.png"></img>
				</div>
				<div class="slide-image">
					<img src="images/about_us3.png" />
				</div>
			</div>
			<div class="nav-bar">
				<ul>
					<li class="<?php echo get_link_status("/index.php"); ?>">
						<a href="/">Home</a>
					</li>
					<li class="<?php echo get_link_status("/about_us.php"); ?>">
						<a href="about_us.php">About Us</a>
					</li>
					<li class="<?php echo get_link_status("/we_serve.php"); ?>">
						<a href="we_serve.php">We Serve</a>
					</li>
					<li class="<?php echo get_link_status("/what_we_do.php"); ?>">
						<a href="what_we_do.php">What We Do</a>
					</li>
					<li class="<?php echo get_link_status("/why_us.php"); ?>">
						<a href="why_us.php">Why Us</a>
					</li>
					<li class="<?php echo get_link_status("/mission.php"); ?>">
						<a href="mission.php">Mission</a>
					</li>
					<li class="<?php echo get_link_status(""); ?>">
						<a href="#">Careers</a>
					</li>
					<li class="<?php echo get_link_status("/contact.php"); ?>">
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
