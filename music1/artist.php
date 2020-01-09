<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Artist</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/rating.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/artist.css">
<link rel="stylesheet" type="text/css" href="styles/artist_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/elements.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
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
						<li><a href="shows1.php">Shows</a></li>
						<li><a href="blog.php">Studios</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/artists.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<!--<div class="home_title"></div>--><h1 style="color:white;font-size:55pt;">Artist Bio</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Artist -->
	<?php 
		require_once("connect.php");
		$id = $_GET['id'];
		$get_artists=mysqli_query($connect,"SELECT * FROM artists WHERE artist_name='$id' ");
		$rowArtist = mysqli_fetch_array($get_artists);
		?>
	<div class="artist">
		<div class="container">
			<div class="row">
				
				<!-- Artist Image -->
				<div class="col-lg-6 artist_col order-lg-1 order-2">
					<div class="artist_image text-right">
						<img src="images/edit/<?php echo $rowArtist['artist_img']?>" alt="">
						<img src="images/edit/<?php echo $rowArtist['artist_img']?>" alt="">
					</div>
				</div>

				<!-- Artist Info -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="artist_info">
						<div class="artist_name"><h1><?php echo $rowArtist['artist_name']?></h1></div>
						<div class="artist_title"><?php echo $rowArtist['artist_category']?></div>
						<div class="artist_info_list">
							<ul>
								<li><?php if($rowArtist['artist_category']=="Band")echo "Inception: ";else echo "Born: "?><span><?php echo $rowArtist['artist_dob']?></span></li>
								<?php if($rowArtist['first_release']!="null")
									echo "<li>First release: <span>".$rowArtist['first_release']."</span></li>";
								?>
								<?php if($rowArtist['first_album']!="null")
									echo "<li>First album: <span>".$rowArtist['first_album']."</span></li>";
								?>
							</ul>
						</div>
						<div class="artist_info_text">
							<p><?php echo $rowArtist['artist_desc']?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Songs -->

	<div class="songs">
		<div class="container">
			<div class="row">
				
				<!-- Songs Content -->
				<div class="col-lg-4">
					<?php if(($rowArtist['song1']!="null") || ($rowArtist['song2']!="null") || ($rowArtist['song3']!="null")) { ?>
					<div class="songs_content">
						<div class="songs_title"><h1 style="font-size:33pt;">Popular Numbers</h1></div>
						<div class="songs_text">
							<p>The songs you can't get enough right now!</p>
						</div>
						<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
						</div>
					</div>
					<?php } ?>
				</div>

				<!-- Songs -->
				<div class="col-lg-8">
					<div class="songs_container">
						<!-- Song -->
						<?php if($rowArtist['song1']!="null") { ?>
							<div class="song">
							<!-- Player -->
							<div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="<?php echo $rowArtist['song1']?>" data-artist="<?php echo $rowArtist['artist_name']?>" data-ancestor=".jp_container_1" data-url="files/<?php echo $rowArtist['song1']?>.mp3"></div>
									<div class="jp-audio jp_container_1" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
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
						<?php } ?>
						<!-- Song -->
						<?php if($rowArtist['song2']!="null") { ?>
							<div class="song">
							
							<!-- Player -->
							<div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="<?php echo $rowArtist['song2']?>" data-artist="<?php echo $rowArtist['artist_name']?>" data-ancestor=".jp_container_2" data-url="files/<?php echo $rowArtist['song2']?>.mp3"></div>
									<div class="jp-audio jp_container_2" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
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
						<?php } ?>
						<!-- Song -->
						<?php if($rowArtist['song3']!="null") { ?>
							<div class="song">

							<!-- Player -->
							<div class="single_player_container">
								<div class="single_player">
									<div class="jp-jplayer jplayer" data-title="<?php echo $rowArtist['song3']?>" data-artist="<?php echo $rowArtist['artist_name']?>" data-ancestor=".jp_container_3" data-url="files/<?php echo $rowArtist['song3']?>.mp3"></div>
									<div class="jp-audio jp_container_3" role="application" aria-label="media player">
										<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

											<!-- Player Controls -->
											<div class="player_controls_box">
												<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>

											<!-- Progress Bar -->
											<div class="player_bars d-flex flex-row align-items-start justify-content-start">
												<div class="player_progress_box">
													<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
													<div class="song_info">
														<div class="jp-title" aria-label="title"></div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div>
																<div class="jp-play-bar"><span></span></div>
															</div>
														</div>
													</div>
													<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
												</div>

												<!-- Volume Controls -->
												<div class="jp-volume-controls ml-auto">
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
						<?php } ?>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Video -->

	<div class="video">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="video_container_outer">
						<div class="video_container">
							<!-- Video poster image artist: https://unsplash.com/@annademy -->
							<video id="vid1" class="video-js vjs-default-skin" controls data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "<?php echo $rowArtist['youtube_link'] ?>" }], "youtube": { "iv_load_policy": 1 } }'>
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
<!-- RATING - Form -->
<?php $notif=$_GET['success']; ?>
<form class="rating-form" action="rating_update.php?artist_name=<?php echo $id ?>" method="post" name="rating-artist">
	<div class="newsletter">
		<div class="container">
			<div class="row">

				
				<div class="col-xl-6">
					<div class="newsletter_content">
						<div class="section_title"><h1 style="font-size:40pt;">Rate <?php echo $rowArtist['artist_name']?></h1></div>
						<button class="button button_3 newsletter_button" style="width:385pt;"><span>submit rating!</span></button>
					</div>
				</div>

				
				<div class="col-xl-6 nl_col">
				<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


  <fieldset class="form-group">
    
    <legend class="form-legend">Rating:</legend>
    
    <div class="form-item">
      
      <input id="rating-5" name="rating" type="radio" value=5 />
      <label for="rating-5" data-value="5">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">5</span>
      </label>
      <input id="rating-4" name="rating" type="radio" value=4 />
      <label for="rating-4" data-value="4">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">4</span>
      </label>
      <input id="rating-3" name="rating" type="radio" value=3 />
      <label for="rating-3" data-value="3">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">3</span>
      </label>
      <input id="rating-2" name="rating" type="radio" value=2 />
      <label for="rating-2" data-value="2">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">2</span>
      </label>
      <input id="rating-1" name="rating" type="radio" value=1 />
      <label for="rating-1" data-value="1">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">1</span>
      </label>				 
      <div class="form-action">
        <input class="btn-reset" type="reset" value="Reset" />   
      </div>

      <div class="form-output">
        ? / 5
      </div>
      <?php
						 if($notif==1){
							$handle=fopen("rating_count.txt","r") or die("Cannot open hit file!");
							$ratecount=fread($handle,10);
							fclose($handle);
							$ratecount++;
							$handle=fopen("rating_count.txt","w");
							fwrite($handle,$ratecount);
							fclose($handle);
							?>
						 <div class="alert alert-success" role="alert">Thank you for the rating</div>
						 <?php } ?>
    </div>

  </fieldset>
</form>
					<!--<div class="newsletter_form_container d-flex flex-column align-items-start justify-content-end">
						<form action="#" class="newsletter_form" id="newsletter_form">-->
							
						<!--</form>-->
					<!--</div>-->
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
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
 &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
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
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="js/artist.js"></script>
</body>
</html>