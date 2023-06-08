<?php 
session_start();

	include("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;800&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Computer Science</title>
</head>
<body>
	<div class="wrapper">
		<header id="open" class="header">
			<div id="close" class="header__container">
				<a href="" class="header__logo">
					<img src="images/logoo.svg" alt="Logo">
				</a>
				<div class="header__menu menu">
				 <nav class="menu__body">
					<ul class="menu__list">
					</ul>
				 </nav>
				</div>
				<div>
					<a href="login.php" class="header__button button">Log In/Sign Up</a>
					<a href="#open" class="icon-menu"><span></span></a>
					<a href="#close" class="close-icon-menu"></a>
				</div>
			</div>
		</header>
		<main class="main">
			<section class="get-started">
				<div class="get-started__container">
					<div class="get-started__content">
						<div class="get-started__block-text block-text">
							<h1 class="block-text__title block-text__title-blue">Start learning your favorite subject with <span>video lessons and tests.</span>
							</h1>
							<div class="block-text__text">
								In order to start studying, register on the website.
							</div>
							<a href="" class="block-text__button button">GET STARTED</a>
						</div>
					</div>
					<div class="get-started__image">
						<img src="images/main_page2.png" alt="Main page">
					</div>
				</div>
			</section>
			<section class="aboutus">
				<div class="about-us__container">
					<div class="about-us__media">
						<div class="media-about-us">
						<div class="media-about-us__image">
						<img src="images/about_us.png" alt="About Us">
						</div>
						<div class="media-about-us__item media-about-us__item1"></div>
						<div class="media-about-us__item media-about-us__item2"></div>
						<div class="media-about-us__item media-about-us__item3"></div>
					</div>
				</div>
					<div class="about-us__content">
						<div class="about-us__block-text block-text">
							<h2 class="block-text__title">Stay safe with <span>with with with</span></h2>
							<div class="block-text__text">
								24x7 Support and user friendly mobile platform to bring healthcare to your fingertips. Signup and be a part of the new health culture.
							</div>
							<a href="" class="block-text__button button">About Us</a>
						</div>
					</div>
				</div>
			</section>
			<section class="aboutus2">
				<div class="aboutus2__container">
					<div class="aboutus2__statistics statistics-aboutus2">
						<div class="statistics-aboutus2__body body-statistics-aboutus2">
							<div class="body-statistics-aboutus2__item">
							<div class="body-statistics-aboutus2__value">2M</div>
							<div class="body-statistics-aboutus2__text">Users</div>
							</div>
							<div class="body-statistics-aboutus2__item">
							<div class="body-statistics-aboutus2__value">78</div>
							<div class="body-statistics-aboutus2__text">Countries</div>
							</div>
							<div class="body-statistics-aboutus2__item">
							<div class="body-statistics-aboutus2__value">10 000+</div>
							<div class="body-statistics-aboutus2__text">Medical Experts</div>
							</div>
						</div>
						<div class="statistics-aboutus2__decor1"></div>
						<div class="statistics-aboutus2__decor2"></div>
						<div class="statistics-aboutus2__decor3"></div>
					</div>
					<div class="aboutus2__body">
						<div class="aboutus2__content">
						<div class="aboutus2__block-text block-text">
							<h2 class="block-text__title block-text__title-blue">Talk to <span>experts.</span></h2>
							<div class="block-text__text">
								Book appointments or submit queries into thousands of forums concerning health issues and prevention against noval Corona Virus.
							</div>
							<a href="" class="block-text__button button">About Us</a>
						</div>
						</div>
						<div class="aboutus2__video">
							<iframe src="https://www.youtube.com/embed/9kpuOoIh3wU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>
			<section class="courses">
				<div class="courses__container">
					<div class="courses__block-text block-text block-text__center">
							<h2 class="block-text__title block-text__title-blue"><span>Healthcare</span> at your Fingertips.</h2>
							<div class="block-text__text block-text__text_mw">
								Bringing premium healthcare features to your fingertips. User friendly mobile platform to bring healthcare to your fingertips. Signup and be a part of the new health culture.</div>
						    </div>
						<div class="courses__items">
							<div class="courses__column item-column_1">
							<div class="courses__item item-courses">
								<div class="item-courses__icon">
									<img src="images/courses2/1.svg" alt="Courses">
								</div>
								<div class="item-courses__title">9-grade</div>
							</div>
							</div>
							<div class="courses__column item-column_2">
							<div class="courses__item item-courses">
								<div class="item-courses__icon">
									<img src="images/courses2/2.svg" alt="Courses">
								</div>
								<div class="item-courses__title">10-grade</div>
							</div>
						</div>
						<div class="courses__column item-column_3">
							<div class="courses__item item-courses">
								<div class="item-courses__icon">
									<img src="images/courses2/3.svg" alt="Courses">
								</div>
								<div class="item-courses__title">11-grade</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
  	 <div class="footer-container">
  	 	<div class="social-links">
  	 		<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 		<a href="#"><i class="fab fa-twitter"></i></a>
  	 		<a href="#"><i class="fab fa-instagram"></i></a>
  	 		<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 	</div>
  	 	<div class="footernav">
  	 		<ul>
  	 		<li><a href="">Home</a></li>
  	 		<li><a href="">About Us</a></li>
  	 		<li><a href="">Contact Us</a></li>
  	 		<li><a href="">Admin Login</a></li>
  	 	</ul>
  	 	</div>
  	 </div>
  	 <div class="footer-bottom">
  	 		<p>| Copyright &copy;2023 | Designed by <span class="designer">iiintrovertka</span> |</p>
  	 	</div>
  </footer>
	<script type="text/javascript" src="js/index.js"></script>
</div>
</body>
</html>