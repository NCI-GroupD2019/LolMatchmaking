<!DOCTYPE html>
<html lang="en">
<head>
	<title>League of Legends - Register</title>
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
						<li><a href="matchmaking.php">Matchmaking</a>
						<li><a href="blog.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Heard you need an account! - Sign up</h2>
							</br>
					</div>
									<form action="./include/signupinc.php" method="post" class="contact-form" id="register_form">
												  <div>
												 	<input type="text" name="username" placeholder="Username" required>
													</br>
												  </div>
												  <div>
												  <input type="email" name="email" placeholder="Email" required>
													</br>
												  </div>
												  <div>
												  <input type="password" name="password" placeholder="Password" required>
													</br>
												  </div>
													<!--<div>
												  <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword">
													</br>
													</div> -->
												  <div>
												 	<button name="regsubmit" type="submit" value="Register" class="site-btn" id="reg_btn"> Register <img src="img/icons/double-arrow.png" alt="#"/></button>
													</div>
									</form>
								  </br>
								  </br>
									<h5 style="color:a9a9a9;">
  										Already a member? <a href="login.php" class="text-white">Sign in</a>
  								</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<!-- img
			<div class="footer-left-pic">
				<img src="img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="img/footer-right-pic.png" alt="">
			</div>
			-->

			<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Matchmaking</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
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
