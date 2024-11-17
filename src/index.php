<?php
session_start();
?>



<!DOCTYPE HTML>

<html>
	<head>
		<title> </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
		<header id="header" class="alt skel-layers-fixed">
			<h1><a href="index.php"> Tech Staff </a></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>
						<a href="" class="icon fa-angle-down">Layouts</a>
						<ul>
							<li><a href="#">Left Sidebar</a></li>
							<li><a href="#">Right Sidebar</a></li>
							<li><a href="#">No Sidebar</a></li>
							<li>
								<a href="">Submenu</a>
								<ul>
									<li><a href="#">Option 1</a></li>
									<li><a href="#">Option 2</a></li>
									<li><a href="#">Option 3</a></li>
									<li><a href="#">Option 4</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="elements.html">Elements</a></li>

					<?php if (isset($_SESSION['username'])): ?>
						<!-- <li>Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></li> -->
						<li><a href="logout.php" class="button" style="color: white;">Logout</a></li>
					<?php else: ?>
						<li><a href="login.php" class="button" style="color: white;">Login</a></li>
						<li><a href="signup.php" class="button" style="color: white;">Signup</a></li>
					<?php endif; ?>


				</ul>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">

			<?php 
			 if (isset($_SESSION['username'])):	?>
			<h2>Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></h2>
			<?php endif; ?>
				<!-- <h2>Tech Innovations</h2> -->
				<p>Discover the latest trends and advancements shaping the future of technology.</p>
				<ul class="actions">
					<li><a href="#one" class="button big scrolly">Learn More</a></li>
				</ul>
			</div>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1">
			<div class="container">
				<header class="major">
					<h2>Explore the Future of Technology</h2>
					<p>From artificial intelligence to sustainable energy solutions, innovation is driving change. Stay informed and inspired with insights into groundbreaking developments shaping tomorrow.</p>
				</header>
				<div class="slider">
					<span class="nav-previous"></span>
					<div class="viewer">
						<div class="reel">
							<div class="slide">
								<img src="images/slide01.jpg" alt="AI-powered automation" />
							</div>
							<div class="slide">
								<img src="images/slide02.jpg" alt="Innovative designs in technology" />
							</div>
							<div class="slide">
								<img src="images/slide03.jpg" alt="Sustainable energy solutions" />
							</div>
						</div>
					</div>
					<span class="nav-next"></span>
				</div>
			</div>
		</section>

		<!-- Two -->
		<section id="two" class="wrapper style2">
			<div class="container">
				<div class="row uniform">
					<div class="4u 6u(2) 12u$(3)">
						<section class="feature fa-briefcase">
							<h3>AI and Automation</h3>
							<p>Learn how artificial intelligence is automating industries and unlocking new opportunities for growth.</p>
						</section>
					</div>
					<div class="4u 6u$(2) 12u$(3)">
						<section class="feature fa-code">
							<h3>Innovative Software</h3>
							<p>Explore groundbreaking software solutions that are redefining how we interact with technology.</p>
						</section>
					</div>
					<div class="4u$ 6u(2) 12u$(3)">
						<section class="feature fa-save">
							<h3>Data Security</h3>
							<p>Understand the importance of cybersecurity in a data-driven world and how to stay protected.</p>
						</section>
					</div>
					<div class="4u 6u$(2) 12u$(3)">
						<section class="feature fa-desktop">
							<h3>Smart Devices</h3>
							<p>Discover the latest in IoT and how smart devices are enhancing everyday life.</p>
						</section>
					</div>
					<div class="4u 6u(2) 12u$(3)">
						<section class="feature fa-camera-retro">
							<h3>Immersive Experiences</h3>
							<p>From AR to VR, technology is creating new ways to experience and engage with the digital world.</p>
						</section>
					</div>
					<div class="4u$ 6u$(2) 12u$(3)">
						<section class="feature fa-cog">
							<h3>Green Tech</h3>
							<p>Explore sustainable technologies that aim to minimize environmental impact and promote green living.</p>
						</section>
					</div>
				</div>
			</div>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper style1">
			<div class="container">
				<header class="major">
					<h2>Our Latest Articles</h2>
					<p>Stay updated with insightful articles and thought leadership on the most exciting tech innovations of our time.</p>
				</header>
				<div class="row">
					<div class="4u 6u(2) 12u$(3)">
						<article class="box post">
							<a href="#" class="image fit"><img src="images/pic01.jpg" alt="AI in everyday life" /></a>
							<h3>AI in Everyday Life</h3>
							<p>Discover how artificial intelligence is seamlessly integrating into daily routines.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</article>
					</div>
					<div class="4u 6u$(2) 12u$(3)">
						<article class="box post">
							<a href="#" class="image fit"><img src="images/pic02.jpg" alt="Blockchain innovation" /></a>
							<h3>Blockchain Breakthroughs</h3>
							<p>An in-depth look at how blockchain is revolutionizing industries beyond cryptocurrency.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</article>
					</div>
					<div class="4u$ 6u(2) 12u$(3)">
						<article class="box post">
							<a href="#" class="image fit"><img src="images/pic03.jpg" alt="Sustainable Tech" /></a>
							<h3>Sustainable Tech</h3>
							<p>Learn how technology is driving sustainability and promoting eco-friendly innovations.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</section>

		<!-- CTA -->
		<section id="cta" class="wrapper style3">
			<h2>Join the Tech Revolution</h2>
			<ul class="actions">
				<li><a href="signup.php" class="button big">Get Started</a></li>
			</ul>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
			</ul>
			<ul class="menu">
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Contact</a></li>
			</ul>

		</footer>


	</body>
</html>