<!DOCTYPE html>
<html lang="en">
<head>
<title>Shows</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/textanim.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
								<li class="active"><a href="#">Shows</a></li>
								<li><a href="blog.php">Studios</a></li>
								<li><a href="contact.php">Feedback</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><div class="animate three" style = "position:relative; bottom:80px;font-size:55pt">
								<span>S</span><span>h</span><span>o</span><span>w</span><span>s</span>
							</div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts">
                    <?php 
                require_once('connect.php');
				$getShows= mysqli_query($connect,"SELECT * FROM events");
				$i=0;$j=0;$k=0;$l=0;$art3=-1;$art1=-1;$art2=-1;$art4=-1;
                while($rowshow = mysqli_fetch_array($getShows)){
                    $art3++;$art1++;$art2++;$art4++;
					$art_name[$i++]=$rowshow["artist"];
                    $show_place[$j++]=$rowshow["place"];
                    $show_date[$k++]=$rowshow["date"];
                    $art_website[$l++]=$rowshow["website"];
                
                ?>
						<!-- Blog Post -->
						<div class="blog_post">
							<div class="row">
								<!-- Blog Post Image -->
								<div class="col-lg-12 " style="background-color:LightGrey;">
                                <div class="blog_post_content">
										
										<div class="blog_post_title"><a href="<?php echo $art_website[$art3];?>"><?php echo $art_name[$art1];?></a></div>
										<div class="blog_post_info">
												<ul class="d-flex flex-row align-items-start justify-content-start">
													
													<li>
														<ul class="d-flex flex-row align-items-start justify-content-start">
															<li><a href="#">@ <strong><?php echo $show_place[$art2];?></strong> on <strong><?php echo $show_date[$art4];?></strong></a></li>
															
														</ul>
													</li>
												</ul>
											</div>
										<div class="blog_post_text">
											<p>Book your tickets for this event in the link below!</p>
										</div>
										<div class="blog_post_link"><a href="https://in.bookmyshow.com/bengaluru">Book Tickets</a></div>
									</div>
								</div>

								
							</div>
						</div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="background_image" style="background-image:url(images/footer_1.jpg)"></div>
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
						<div class="copyright text-center">
&copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
</div>
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
<script src="js/blog.js"></script>
</body>
</html>