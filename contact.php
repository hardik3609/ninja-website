<?php 
 

if(isset($_POST['submit']))
{	  
	$name = trim($_POST['name']);
	$mail = trim($_POST['mail']);
	$num = trim($_POST['num']);
	$messageForm = $_POST['messageForm'];
	$smsbody="Hello the G Hotel You Have one request from website Room Require:-$num Name:-$name Email:-$mail Massage:-$messageForm";
// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $mail) || preg_match($pattern, $messageForm) ) {
		exit;
	}

	// Email will be send
	$to = " hardikkumawat3985@gmail.com"; // Change with your email address
	$sub = "$num Enquiry from channel manager"; // You can define email car
	// HTML Elements for Email Body
	$body = '
	<html>
        <head>
          <title>Mail from '. $name .'</title>
        </head>
        <body>
          <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Name:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Subject:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $num .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Message:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $messageForm  .'</td>
            </tr>
          </table>
        </body>
        </html>';

//Must end on first column
	
	$headers = "From: $name <$mail>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	if(mail($to, $sub, $body, $headers))
	{
		echo "<script>alert('Mail was sent.Click okay !');</script>";
		echo "<script>document.location.href='index.php'</script>"; 
		
	}
	else
	{	
		echo '<script>alert("'.$smsbody.'");</script>';
      echo "<script>document.location.href='contact.php'</script>";
 
	}
	
}

include"header.php";?>


	<section class="page">
		<!-- ***** Page Top Start ***** -->
		<div class="cover" data-image="assets/images/photos/parallax.jpg">
			<div class="page-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1>Contact Us</h1>
						</div>
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="active">Contact Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Top End ***** -->

		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom">
			<div class="map-wrapper">
				<!-- ***** Google Maps Start ***** -->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="24.5854"
					data-lng="73.7125"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="reshotel"
					data-icon-path="assets/images/marker.png"
					data-content="udaipur<br><br><a href='mailto:support@yourbrand.com'>mailto:support@yourbrand.com</a>">
				</div>
				<!-- ***** Google Maps End ***** -->

				<!-- ***** Contact Informations Start ***** -->
				<div class="container">
					<div class="row">
						<div class="offset-lg-8 col-lg-4 col-md-12 col-sm-12">
							<div class="contact-info">
								<div class="item">
									<i class="fa fa-location-arrow"></i>
									<div class="txt">
										<span>201, Centre Point, J.B.Nagar, Andheri East, Mumbai, Maharashtra 400059</span>
									</div>
								</div>
								<div class="item">
									<i class="fa fa-phone"></i>
									<div class="txt">
										<span>(+91) 7727 840 317<br> (+91) 9610 498 060<br>(+91) 8619 032 756</span>
									</div>
								</div>
								<div class="item">
									<i class="fa fa-envelope"></i>
									<div class="txt">
										<span><a href="mailto:hotelsupport@reshotel.in">hotelsupport@reshotel.in</a></span>
									</div>
								</div>
								<ul class="social">
									<li><a href="https://www.facebook.com/reshotel/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/hotelsupport7"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/in/reshotel-india-b35b1412a/"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://plus.google.com/115810654832337818045"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="https://www.instagram.com/reshotel_channel_manager/"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Contact Informations End ***** -->
			</div>

			<div class="container">
				<div class="row">
					<!-- ***** Contact Text Start ***** -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<h5 class="mbottom-30">Get in touch with us</h5>
						<div class="contact-text">
							<p>Our support is available 24*7 to help you out and answer your queries.  </p>
							<p>Need a quote? Complete the form and we'll contact you with best possible price.</p>
						</div>
					</div>
					<!-- ***** Contact Text End ***** -->

					<!-- ***** Contact Form Start ***** -->
					<div class="col-lg-8 col-md-6 col-sm-12">
						<div class="contact-form">
						<form id="contact-form" action="" method="post">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<input type="text" name="name" placeholder="Name, surname" required >
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<input type="number" name="num" required placeholder="Mobile Number">
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<input type="text" name="mail" placeholder="E-Mail" required>
								</div>
								<div class="col-lg-12">
									<textarea name="messageForm" placeholder="Your message" required ></textarea>
								</div>
								<div class="col-lg-12">
									<button name="submit" type="submit" class="btn-primary-line">SEND</button>
								</div>
							</div>
						</form>
						</div>
					</div>
					<!-- ***** Contact Form End ***** -->
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>


<?php include"footer.php";?>