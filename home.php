<!DOCTYPE html>
<html lang="en">
<head>
	<title>League of Legends - Home</title>
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
				<a href="home.html" class="site-logo">
					<img src="./img/lollogo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<?php
									if(isset($_SESSION['username'])){
									echo'<form action="include/signout.inc.php" method="POST">
								 <button type="submit" name="signoutsubmit">Logout</button>
								 </form>';
								}
								else
								{
									echo'<div class="user-panel">
									<a href="login.php">Login</a> / <a href="register.php">Register</a>
									</div>';
								}
						?>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="home.php">Home</a></li>
						<li><a href="matchmaking.php">Matchmaking</a>
						<li><a href="news.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/front.jpg">
				<div class="container">
					<h2></h2>
					<p></p>
					<!--  <a href="#" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>  -->
				</div>
			</div>
			<!--
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/front2.jpg">
				<div class="container">
					<h2></h2>
					<p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
					<a href="#" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
			-->
		</div>
	</section>
	<!-- Hero section end-->





	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>

					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<a href="https://www.youtube.com/watch?v=lJ37NSeTVZo&feature=youtu.be"><img src="./img/news1.jpg" alt=""></a>
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">15.07.19  /  in <a href="news.php">News</a></div>
							<a href="https://www.youtube.com/watch?v=lJ37NSeTVZo&feature=youtu.be"> <h3>LEC Mic Check: Week 4</h3></a>
							<p>Listen to the comms around Caps’ surprise pick in this week’s #LEC Mic Check</p>

						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<a href="https://www.youtube.com/watch?v=wg6lffteZ-w&feature=youtu.be"><img src="./img/news2.jpg" alt=""></a>
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">14.07.19  /  in <a href="news.php">News</a></div>
							<a href="https://www.youtube.com/watch?v=wg6lffteZ-w&feature=youtu.be"> <h3>Outsiders | PROJECT: Reckoning Animated Trailer</h3></a>
							<p>A band of cybernetic castoffs plans to infiltrate The City to destroy the entity that created—and then abandoned—them: the PROJECT Corporation.</p>

						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<a href="https://www.youtube.com/watch?v=URc2kSHUx9I&feature=youtu.be"><img src="./img/news3.jpg" alt=""></a>
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">12.07.19  /  in <a href="news.php">News</a></div>
							<a href="https://www.youtube.com/watch?v=URc2kSHUx9I&feature=youtu.be"> <h3>#LEC Match of the Week | SPY vs SK | Fri 12 July</h3></a>
							<p>The LEC is back, and Week 4 debuts with Splyce battling SK Gaming on Friday. </p>

						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<a href="https://signup.euw.leagueoflegends.com/en/signup/redownload"><img src="./img/lollogo.png" alt="#"></a>
									</div>
									<div class="tw-text">
										<div class="tw-meta">16.07.19</div>
										<a href="https://signup.euw.leagueoflegends.com/en/signup/redownload"><h5>Click Here Download League of Legends</h5></a>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<a href="https://eu.lolesports.com/en/articles/five-picks-that-marked-lec-summer-split-week-4"><img src="./img/tren1.png" alt="#"></a>
									</div>
									<div class="tw-text">
										<div class="tw-meta">15.07.19</div>
										<h5>Five picks that marked LEC’s fourth summer week</h5>
									</div>
								</div>


							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/patch.jpg">
		<a href="https://www.youtube.com/watch?v=g-OYMHtne5c" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Latest Update Patch 9.12</h2>
				<p>NEW UPDATE: Best Champions TIER LIST – League of Legends Patch 9.12</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/q.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">15.06.19  /  in <a href="">Game</a></div>
				<h3>The champion that you’ve been waiting  for is out now</h3>
				<a href="https://www.youtube.com/watch?v=3ECXeoLlR3I&feature=youtu.be"><p>Qiyana: Empress of the Elements</p></a>

			</div>
		</div>
	</section>
	<!-- Featured section end-->





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
				<li><a href="home.php">Home</a></li>
				<li><a href="matchmaking.php">Matchmaking</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>

			<div class="copyright"><a href="">LolMatchmaking</a> 2019 @ All rights reserved</div>
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
