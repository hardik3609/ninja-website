<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reshotel</title>
	<meta name="description" content="Beapp is a Mobile App Development Agency HTML5 Template by tempload." />
	<meta name="keywords" content="beapp, mobile app, agency, development, html, template, tempload" />
	<meta name="author" content="tempload"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118135390-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-118135390-1');
	</script>
	<script type="text/javascript">(function(t,e){var r=function(t){try{var r=e.head||e.getElementsByTagName("head")[0];a=e.createElement("script");a.setAttribute("type","text/javascript");a.setAttribute("src",t);r.appendChild(a);}catch(t){}};t.CollectId = "5b487da76853811f12210f1e";r("https://collectcdn.com/launcher.js");})(window,document);</script>
</head>
<body>

	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<div class="row">
				<div class="col-lg-12 align-self-center">
				<div class="top-head">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 align-self-center">
								<div class="float-left">
										<ul class="top-nav">
											<i class="fa fa-envelope"><a href="mailto:hotelsupport@reshotel.in">&nbsp;hotelsupport@reshotel.in</a></i>
										</ul>
									</div>
									<div class="float-right">
										<ul class="top-nav">
											<i class="fa fa-phone"><a href="callto:+917727840317">&nbsp;+917727 840 317</a></i>&nbsp;| &nbsp;<i class="fa fa-phone"><a href="callto:+919610498060">&nbsp;+919610 498 060</a></i>
											<button type="button" data-toggle="modal" data-target="#loginModal" id="login-button">Login</button>
										</ul>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.php" class="logo">
							
							<img src="assets/images/reshotel dark.png" style="width: 177px;" class="light-logo img-responsive" alt="reshotel ICO"/>
							<img src="assets/images/reshotel dark.png" style="width: 177px;" class="dark-logo img-responsive" alt="reshotel ICO"/>
						</a>
						<!-- ***** Logo End ***** -->
				
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="index.php">HOME</a></li>
							<li><a href="features.php">FEATURES</a></li>
							<!--li><a href="about-us.php">ABOUT US</a></li-->
							<li><a href="index.php#price">PRICING</a></li>
							<li><a href="channel.php">CHANNEL PARTNERS</a></li>
							<li><a href="blog.php">BLOG</a></li>
							<li><a href="contact.php">CONTACT</a></li>
							<li><a href="#freedemo" class="btn-nav-line" data-toggle="modal">FREE DEMO</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->					
					</nav>
				</div>
			</div>			
		</div>
		<!--free demo model popup-->
		<?php include"free-demo.php";?>
		<!--free demo model popup//-->
		<!-- ***** Download Link Start ***** -->
		<div class="download-link">
			<ul class="">
				
				<li><a href="https://goo.gl/vGL07e" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a></li>
				<li><a href="https://goo.gl/Xnm5z7" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<!-- ***** Download Link End ***** -->	
		<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Screen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
		<div class="col-sm-6 login-panel">
			<a href="https://www.reshotel.in/hotel_owner" target="_blank"><img src="assets/images/hotel-logo1.png" width="150px" height="150px"></a>
			<div class="">
				Hotel owner can easily login here and manage his hotel
			</div>
		</div>
		<div class="col-sm-6 login-panel">
			<a href="#bookingModal" id="find-booking-form" data-toggle="collapse"><img src="assets/images/customer-logo1.png" width="150px" height="150px"></a>
			<div class="">
			You can modify your booking from the hotel's official website. Thank You.
			</div>
		</div>
		</div>
		<!--<div class="collapse"id="bookingModal">
			<p> You can modify your booking from the hotel's official website. Thank You.</p>
		</div>-->
		</div>
      </div>
    </div>
  </div>
	</header>
	<!-- ***** Header Area End ***** -->
	