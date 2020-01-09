
<!DOCTYPE html>
<html lang="en">
<head>
<title>Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/elements.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>
<?php
require_once('connect.php');
session_start();
?>
<body>
<div class="container_fluid">
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="artists.php?page=1">Artists</a></li>
								<li><a href="shows1.php">Shows</a></li>
								<li><a href="blog.php">Studios</a></li>
								<li><a href="contact.php">Feedback</a></li>
							</ul>
						</nav>

						<!-- User area -->
						

						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<!--<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php?useradded=0">Register</a></li>
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
						<li><a href="shows1.php">Shows</a></li>
						<li><a href="blog.php">Studios</a></li>
						<li><a href="contact.php">Feedback</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	

	<!-- Home -->

	<div class="home">
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title_container text-center">
											<div class="home_title text-center"><h1>Musician's <span> website</span></h1></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Scroll Down -->
			<div class="scroll_down scroll_down_link" data-scroll-to=".tours">
				<a href="#"></a>
				<div class="d-flex flex-row align-items-center justify-content-start">
					<div>scroll down</div>
					<div class="scroll_arrows d-flex flex-column align-items-start justify-content-start">
						<img src="images/arrow_down.png" alt="">
						<img src="images/arrow_down.png" alt="">
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Song -->
	<div class="song">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/song.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="song_content">

						<!-- Player -->
						<div class="single_player_container">
							<div class="single_player d-flex flex-row align-items-center justify-content-start">
								<div id="jplayer_1" class="jp-jplayer"></div>
								<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
									<div class="jp-gui jp-interface d-flex flex-lg-row flex-column align-items-start justify-content-start">

										<!-- Player Controls -->
										<div class="player_controls_box d-flex flex-row align-items-start justify-content-start">
											<div class="order-lg-1 order-2">
												<div class="player_title">song of the week</div>
												<div class="jp-controls-holder player_controls ml-auto d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>
											<div class="song_image ml-lg-auto order-lg-2 order-1"><img src="images/song_agam.jpg" alt=""></div>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars d-flex flex-row align-items-start justify-content-start">
											<div class="player_progress_box">
												<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
												<div class="song_info">
													<div class="jp-artist" aria-label="title">Agam The Band</div>
													<div class="jp-title" aria-label="title"></div>
												</div>
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div>
															<div class="jp-play-bar"><span></span></div>
														</div>
													</div>
												</div>
												<div class="jp-duration ml-auto" role="timer" aria-label="duration">02:33</div>
											</div>

											<!-- Volume Controls -->
											<div class="jp-volume-controls ml-lg-auto">
												<div class="mute_button">
													<button class="jp-mute" tabindex="0"></button>
												</div>
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="jp-volume-bar">
														<div>
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tours -->

	<div class="tours">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Add -->
				<div class="col-lg-4 order-lg-1 order-2 tours_col">
					<div class="extra d-flex flex-column align-items-center justify-content-between">
						<div class="background_image" style="background-image:url(images/extra_1.jpg)"></div>
						<div class="extra_frame"></div>
						<div class="extra_text">it's awesome</div>
						<div class="extra_title_container">
							<div class="extra_year">2019</div>
							<div class="extra_title">hot events</div>
							<div class="extra_subtitle">around India!</div>
						</div>
						<div class="button extra_button"><a href="https://in.bookmyshow.com/bengaluru">get your tickets</a></div>
					</div>
				</div>

				<!-- Tours Content -->
				<div class="col-lg-8 order-lg-2 order-1">
					<div class="tours_content">
						<div class="section_title"><h1>Upcoming shows</h1></div>
						<div class="tours_list_container">
							<ul class="tours_list">

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<?php
										$sql = mysqli_query($connect, "SELECT date,place,artist,website FROM events order by date");
										$i=0;
										while ($row = $sql->fetch_assoc()){
											if($row['date']>date("Y-m-d")){	
											//$days_to_go[$i]=date("Y-m-d")-row['date'];
											$date_arr[$i]=$row["date"];
											$loc_arr[$i]=$row["place"];
											$art_arr[$i]=$row["artist"];
											$webs_arr[$i]=$row["website"];//echo $webs_arr[$i];
											$i++;
											}
										}
										?>
										<?php $i1_webs=0;?>
										<div class="tour_date"><a href=""><?php $i1_art=0;echo $art_arr[$i1_art++];?></a></div>
										<div class="tour_name"><?php $i1_date=0;echo $date_arr[$i1_date++];?></div>
										<div class="tour_location"><?php $i1_loc=0;echo $loc_arr[$i1_loc++];?></div>
									</div>
									<div class="button button_2 ml-auto"><a href="<?php echo $webs_arr[$i1_webs++] ?>">get your tickets</a></div>
								</li>

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date"><a href="#"><?php echo $art_arr[$i1_art++];?></a></div>
										<div class="tour_name"><?php echo $date_arr[$i1_date++];?></div>
										<div class="tour_location"><?php echo $loc_arr[$i1_loc++];?></div>
									</div>
									<div class="button button_2 ml-auto"><a href="<?php echo $webs_arr[$i1_webs++] ?>">get your tickets</a></div>
								</li>

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date"><a href="#"><?php echo $art_arr[$i1_art++];?></a></div>
										<div class="tour_name"><?php echo $date_arr[$i1_date++];?></div>
										<div class="tour_location"><?php echo $loc_arr[$i1_loc++];?></div>
									</div>
									<div class="button button_2 ml-auto"><a href="<?php echo $webs_arr[$i1_webs++] ?>">get your tickets</a></div>
								</li>

								<!-- Tour -->
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div class="tour_info">
										<div class="tour_date"><a href="#"><?php echo $art_arr[$i1_art++];?></a></div>
										<div class="tour_name"><?php echo $date_arr[$i1_date++];?></div>
										<div class="tour_location"><?php echo $loc_arr[$i1_loc++];?></div>
									</div>
									<div class="button button_2 ml-auto"><a href="<?php echo $webs_arr[$i1_webs++] ?>">get your tickets</a></div>
								</li>

							</ul>
						</div>
						<div class="tours_link"><a href="shows.php">See All Event Dates</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- App -->
			<!-- Milestones -->
			<?php
				$song_dir="C:/wamp64/www/music/files/";
				// Initialize filecount variable 
				$filecount = 0; 
  				$files2 = glob( $song_dir ."*" ); 
  				if( $files2 ) { 
    			$filecount = count($files2); 
				} 
				$milesfeed=mysqli_query($connect,"SELECT * FROM feedback");
				$num_feed = mysqli_num_rows($milesfeed);
				$handle=fopen("totalHits.txt","r") or die("Cannot open hit file!");
				$hitcount=fread($handle,10);
				fclose($handle);
				$hitcount++;
				$handle=fopen("totalHits.txt","w");
				fwrite($handle,$hitcount);
				fclose($handle);
				$handle=fopen("rating_count.txt","r");
				$ratecount=fread($handle,10);
			?>
			<div class="container" style="padding-left:100px;">
				<div class="milestones">
						<div class="elements_title"><h1 style="padding-left:320px;">Milestones</h1></div>
						<div class="row milestones_row">

							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_1.png" alt=""></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value = <?php echo $filecount;?>>0</div>
										<div class="milestone_text">Songs Uploaded</div>
									</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_6.png" alt=""></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value=<?php echo $hitcount;?>>0</div>
										<div class="milestone_text">Visiters</div>
									</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_5.png" alt=""></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value=<?php echo $ratecount;?>>0</div>
										<div class="milestone_text">Ratings</div>
									</div>
									
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_3.png" alt=""></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value=<?php echo "$num_feed"?>>0</div>
										<div class="milestone_text">Feedbacks</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- App Image 
				<div class="col-lg-6 order-lg-1 order-2 app_col">
					<div class="app_image">
						<img src="images/app.jpg" alt="">
					</div>
				</div>

				App Content 
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="app_content d-flex flex-column align-items-start justify-content-center">
						<div class="section_title"><h1>Get Your Music Right Now!</h1></div>
						<div class="app_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque, nisi nisl tincidunt enim, non aliquet diam neque sed urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit amet</p>
						</div>
						<div class="stores d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="store"><a href="#"><img src="images/appstore.png" alt=""></a></div>
							<div class="store"><a href="#"><img src="images/googleplay.png" alt=""></a></div>
						</div>
					</div>
				</div>-->
	<!-- Featured -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center"><h1>Featured Albums</h1></div>
					<div class="featured_list">
						<div id="jplayer_2" class="jp-jplayer"></div>
						<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
							<div class="jp-type-playlist">
								<div class="jp-playlist">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li></li>
									</ul>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
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
						<div class="copyright text-center"></div>
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
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/custom.js"></script>
<script src="plugins/jquery-circle-progress-1.2.2/circle-progress.js"></script>
<script src="js/elements.js"></script>
</body>
</html>