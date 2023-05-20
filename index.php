<?php
include 'includes/connection.php';
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>New Event - Responsive HTML Template</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>



<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h3 class="wow bounceIn" data-wow-delay="0.9s">July 22 in San Francisco, CA</h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">Web Design Conference</h1>
				<a href="#overview" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LEARN MORE</a>
				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NOW</a>
			</div>


		</div>
	</div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
				<h3>The legendary ITConf SF 🇺🇸 is back — entirely focused on cutting-edge front-end.</p>
				<p>From accessibility and advanced CSS to JavaScript gems and web performance. With interactive sessions, case studies and a dash of Next.js, whimsical animations and TypeScript.Our speakers are great: they are absolute experts in their field, show how they work — their setup, techniques and shortcuts — in live interactive sessions. ITConferences cover a range of topics on front-end/web, from UX design to JS and Accessibility. We make sure you can learn something from every talk, with actionable insights for your work.</p>
			</div>
					
			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
			</div>

		</div>
	</div>
</section>


<!-- =========================
    DETAIL SECTION   
============================== -->
<section id="detail" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3>650 Participants</h3>
				<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-clock-o"></i>
				<h3>24 Programs</h3>
				<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-microphone"></i>
				<h3>11 Speakers</h3>
				<p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
			</div>

		</div>
	</div>
</section>





<!-- =========================
    SPEAKERS SECTION   
============================== -->
<?php
include_once 'speakers.php';
?>




<!-- =========================
    PROGRAM SECTION   
============================== -->
<?php 
include_once 'events.php';
?>


<!-- =========================
   REGISTER SECTION   
============================== -->
<?php
include_once "register.php";
?>


<!-- =========================
    VENUE SECTION   
============================== -->
<section id="venue" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">
				<h2>Venue</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				<h4>ITConf SF 🇺🇸</h4>
  				<h4>120 Market Street, Suite 110</h4>
  				<h4>San Francisco, CA 10110</h4>
				<h4>Tel: 010-020-0120</h4>		
			</div>

		</div>
	</div>
</section>





<!-- =========================
    CONTACT SECTION   
============================== -->
<?php
include_once "contact.php";
?>


<!-- =========================
    FOOTER SECTION   
============================== -->
<?php
include_once "footer.php"
?>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>