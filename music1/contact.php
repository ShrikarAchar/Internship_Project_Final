<!DOCTYPE html>
<html lang="en">
<head>
<title>Feedback</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">music</span>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.php">Home</a></li>
								<li><a href="artists.php?page=1">Artists</a></li>
								<li><a href="shows1.php">Shows</a></li>
								<li><a href="blog.php">Studios</a></li>
								<li class="active"><a href="contact.php">Feedback</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<!--<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>-->

							<!-- Hamburger -->
							<div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container">
			<div class="menu_background"></div>
			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="menu_content d-flex flex-column align-items-center justify-content-start">
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-center justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="artists.php?page=1">Artists</a></li>
						<li><a href="#">Shows</a></li>
						<li><a href="blog.php">Studios</a></li>
						<li><a href="contact.php">Feedback</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/elements.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">How did you like our work?</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-5">
					<div class="contact_content">
						<div class="contact_title">Give us feedback!</div>
						<div class="contact_text">
							<p>Tell us how your experience with our website was. Did you love it or did you hate it? Your valuable feedback helps us grow! &#128522  </p>
						</div>
						<!--<div class="contact_list">
							<ul>
								<li><span>Address:</span> Main Str, no 253, New York, NY</li>
								<li><span>Phone:</span> +546 990221 123</li>
								<li><span>E-mail</span> music@contact.com</li>
							</ul>
						</div>-->
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 offset-lg-1 contact_col">
					<div class="contact_form_container">
						<form method="post" action="feedback_update.php" class="contact_form" id="contact_form">
							<?php if(isset($_GET['success'])==1){ ?>
        						<div class="alert alert-success" role="alert">Feedback has been submitted. Thank you!</div>
        					<?php } ?>
							<div>
								<div class="row">
									<div class="col-md-6 contact_input_col"><input type="text" name="name" class="contact_input" placeholder="Your Name" required="required"></div>
									<div class="col-md-6"><input type="email" name="email" class="contact_input" placeholder="Your E-mail" required="required"></div>
								</div>
							</div>
							<div><input type="text" class="contact_input" name="subject" placeholder="Subject" required="required"></div>
							<div><textarea class="contact_input contact_textarea" name="message" placeholder="Message" required="required"></textarea></div>
							<button type="submit" class="button contact_form_button"><span>send</span></button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="background_image" style="background-image:url(images/footer.jpg)"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">music</span>
							</a>
						</div>

						<!-- Footer Social -->
						<div class="footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-center">
							<li><a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="web.whatsapp.com"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
&copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
			
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/contact.js"></script>
</body>
</html>