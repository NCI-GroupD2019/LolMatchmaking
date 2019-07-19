<!DOCTYPE html>
<html lang="en">
<head>
	<title>League of Legends - Matchmaking</title>
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
	<header class="header-section">
		<div class="header-warp">

			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.html" class="site-logo">
					<img src="./img/lollogo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="login.php">Login</a> / <a href="register.php">Register</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="home.php">Home</a></li>
						<li><a href="games.php">Matchmaking</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Matchmaking</h2>
			<div class="site-breadcrumb">
				<a href="home.php">Home</a> /
				<span>Matchmaking</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!--Player Roles section-->
	<section class="matchmaking-page">
			<div class="container">
				<div class="row">
					<!--User Role Area-->
					<form name='userrole'>
						<h3 class="text-white">Please enter your preffered role: </h3>
						</br>
						<script>
							function topscript()
							{
								document.getElementById('top1').innerHTML = document.userrole.toplanebutton.value;
							}
							function junglescript()
							{
								document.getElementById('jung1').innerHTML = document.userrole.junglelanebutton.value;
							}
							function midscript()
							{
								document.getElementById('mid1').innerHTML = document.userrole.midlanebutton.value;
							}
							function botscript()
							{
								document.getElementById('bot1').innerHTML = document.userrole.botlanebutton.value;
							}
							function suppscript()
							{
								document.getElementById('supp1').innerHTML = document.userrole.supplanebutton.value;
							}
						</script>
						<button name="toplanebutton" type="submit" class="site-btn" onclick="topscript(); return false" value="Top Lane" id="top1"> Top Lane<img style="width:100%; height:75px;" src="img\icons\Top_icon.png" alt="#"/></button>
						&nbsp; &nbsp;
						<button name="junglelanebutton" type="submit" class="site-btn" onclick='junglescript(); return false' value="Jungle" id="jung1">Jungle<img style="padding-left:30px; width:100%; height:75px;" src="img\icons\Jungle_icon.png" alt="#"/></button>
						&nbsp; &nbsp;
						<button name="midlanebutton" type="submit" class="site-btn" onclick='midscript(); return false' value="Mid Lane" id="mid1">Mid Lane<img style="width:100%; height:75px;" src="img\icons\Mid_icon.png" alt="#"/></button>
						&nbsp; &nbsp;
						<button name="botlanebutton" type="submit" class="site-btn" onclick='botscript(); return false' value="Bottom" id="bot1">Bottom<img style="width:100%; height:75px;" src="img\icons\Bottom_icon.png" alt="#"/></button>
						&nbsp; &nbsp;
						<button name="supplanebutton" type="submit" class="site-btn" onclick='suppscript(); return false' value="Support" id="supp1">Support<img style="width:100%; height:75px;" src="img\icons\Support_icon.png" alt="#"/></button>
					</form>
				</div>
			</div>
				<br />
				<br />
				<br />
				<br />
			<div class="container">
				<div class="row">
					<!--Individual Player Role Items-->
					<h3 class="text-white">User1 is currently in search of: </h3>
					</br>
				  </br>
				</div>
				<button class="site-btn">Support<img style="width:100%; height:125px;" src="img\icons\Support_icon.png" alt="#"/></button>
			</div>
			<br />
			<br />
			<br />
			<br />
			<div class="container">
				<div class="row">
					<!--Individual Player Role Items-->
					<h3 class="text-white">User7 is currently in search of: </h3>
					</br>
				  </br>
				</div>
				<h3 class="text-white">
					<button class="site-btn">Mid Lane<img style="width:100%; height:125px;" src="img\icons\Mid_icon.png" alt="#"/></button>
					&nbsp; &nbsp;
					OR
					&nbsp; &nbsp;
					<button class="site-btn">Jungle<img style="width:100%; height:125px;" src="img\icons\Jungle_icon.png" alt="#"/></button>
				</h3>
			</div>
		</section>
	<!--Player Roles section-->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
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
