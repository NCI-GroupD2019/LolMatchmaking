<!DOCTYPE html>
<html lang="en">
<head>
	<title>League of Legends - Contact</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->

			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.php" class="site-logo">
					<img src="./img/lollogo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="login.php">Login</a> / <a href="register.php">Register</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="home.php">Home</a></li>
						<li><a href="matchmaking.php">Matchmaking</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>

	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Contact</h2>
			<div class="site-breadcrumb">
				<a href="home.php">Home</a>  /
				<span>Contact</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form method="post" name="contact-form" action="" class="contact-form" >
						<input name="myname" type="text" placeholder="Your name" required  >
						<input name="myemail" type="email" placeholder="Your e-mail" required>
						<input name="mysubject" type="text" placeholder="Subject" required>
						<textarea name="message" class="form-contact" placeholder="Message" required></textarea>
						<button name="contactsubmit" type="submit" value="submit" class="site-btn">Send message<img src="img/icons/double-arrow.png" alt="#"/></button>
						<?php

							$conn = new mysqli('localhost', 'root', '', 'contactlol');

							if(isset($_POST['contactsubmit'])){
								$cname = mysqli_real_escape_string($conn, $_POST['myname']);
						    $email = mysqli_real_escape_string($conn, $_POST['myemail']);
						    $subject = mysqli_real_escape_string($conn, $_POST['mysubject']);
								$message = mysqli_real_escape_string($conn, $_POST['message']);

								$sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$cname', '$email', '$subject', '$message' );";
								mysqli_query($conn, $sql);
								header("Location: ./contact.confirm.php");
							}
							?>
					</form>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>Howdy! Say hello</h3>
					<p>Welcome to the Contact page, Please feel free to leave a message or suggestion if you have any! </br>Thanks.</p>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
						<div class="ci-text">Mayor Street Lower, IFSC, Dublin</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
						<div class="ci-text">+555-2368</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
						<div class="ci-text">LoLMatchmaking@contact.com</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->





	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<!--
			<div class="footer-left-pic">
				<img src="img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="img/footer-right-pic.png" alt="">
			</div>
			-->

			<ul class="main-menu footer-menu">
				<li><a href="home.php">Home</a></li>
				<li><a href="matchmaking.php">Matchmaking</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>

			<div class="copyright"><a href="">LoLMatchmaking</a> 2019 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
