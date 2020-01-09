<!DOCTYPE html>
<html lang="en">
<head>
<title>Artists</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/textanim.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/artists.css">
<link rel="stylesheet" type="text/css" href="styles/artists_responsive.css">
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
								<li class="active"><a href="artists.php?page=1">Artists</a></li>
								<li><a href="shows1.php">Shows</a></li>
								<li><a href="blog.php">Studios</a></li>
								<li><a href="contact.php">Feedback</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<!--<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="#">Login</a></li>
								<li><a href="#">Register</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/artists.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><div class="animate three" style = "position:relative; bottom:80px;font-size:55pt">
								<span>A</span><span>r</span><span>t</span><span>i</span><span>s</span><span>t</span><span>s</span>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Artists -->

	<div class="artists">
		<div class="letters">
			<ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">
			<?php 
                require_once('connect.php');
				$getCat= mysqli_query($connect,"SELECT cat_name,cat_desc FROM category");
				$i=0;$j=0;
                while($rowcat = mysqli_fetch_array($getCat)){
					$art_category[$i++]=$rowcat["cat_name"];
					$category_desc[$j++]=$rowcat["cat_desc"];
				}
                ?>
				<li><a href="artistbycategory.php?id=<?php $art=0;echo $art_category[$art++];?>" data-toggle="tooltip" title="<?php $desc=0;echo $category_desc[$desc++];?>">Playback artists</a></li>
				<li><a href="artistbycategory.php?id=<?php echo $art_category[$art++];?>" data-toggle="tooltip" title="<?php echo $category_desc[$desc++];?>">Bands</a></li>
				<li><a href="artistbycategory.php?id=<?php echo $art_category[$art++];?>" data-toggle="tooltip" title="<?php echo $category_desc[$desc++];?>">Classical artists</a></li>
				<li><a href="artistbycategory.php?id=<?php echo $art_category[$art++];?>" data-toggle="tooltip" title="<?php echo $category_desc[$desc++];?>">Composers</a></li>
				<li><a href="artistbycategory.php?id=<?php echo $art_category[$art++];?>" data-toggle="tooltip" title="<?php echo $category_desc[$desc++];?>">DJ's</a></li>
			</ul>
		</div>
		<div class="artists_container">
			<div class="container">
				<div class="row">
					<div class="col">
					<?php 
						$page_no=$_GET["page"];
						switch($page_no){
							case 1: $get_artists=mysqli_query($connect,"SELECT * FROM artists LIMIT 0,5");break;
							case 2: $get_artists=mysqli_query($connect,"SELECT * FROM artists LIMIT 5,5");break;
							case 3: $get_artists=mysqli_query($connect,"SELECT * FROM artists LIMIT 10,5");break;
							case 4: $get_artists=mysqli_query($connect,"SELECT * FROM artists LIMIT 15,5");break;

						}
						while($rowArtist = mysqli_fetch_array($get_artists)){
						?>
						<!-- Artist -->
						<div class="artist">
							<div class="row">
								
								<!-- Artist Image -->
								<div class="col-lg-6">
									<div class="artist_image"><img src="images/edit/<?php echo $rowArtist["artist_img"]?>" alt=""></div>
								</div>

								<!-- Artist Content -->
								<div class="col-lg-6 artist_col">
									<div class="artist_content">
										<div class="artist_info">
											<div class="artist_name"><h1><a href="artist.php?id=<?php echo $rowArtist["artist_name"]?>&success=0"><?php echo $rowArtist["artist_name"]?></a></h1></div>
											<div class="artist_text">
												<h3 style="color:#00DF9F;"><?php echo $rowArtist["artist_category"]?></h3>
												<p><?php echo $rowArtist["artist_desc"]?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><?php } ?>
						<!-- Page Nav -->
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li <?php if ($page_no==1) echo "class='active'"?>><a href="artists.php?page=1">01.</a></li>
								<li <?php if ($page_no==2) echo "class='active'"?>><a href="artists.php?page=2">02.</a></li>
								<li <?php if ($page_no==3) echo "class='active'"?>><a href="artists.php?page=3">03.</a></li>
								<li <?php if ($page_no==4) echo "class='active'"?>><a href="artists.php?page=4">04.</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured Artist -->
	<?php 
                require_once('connect.php');
				$getArt= mysqli_query($connect,"SELECT * FROM artists ORDER BY rating DESC");
				$i=0;$j=0;$k=0;$m=0;
                while($rowart = mysqli_fetch_array($getArt)){
					$art_name[$i++]=$rowart["artist_name"];
					$art_rate[$j++]=$rowart["rating"];
					$art_desc[$k++]=$rowart["artist_desc"];
					$art_img[$m++]=$rowart["artist_img"];
				}
                ?>
	<div class="featured_artist" style="padding-top:100px; padding-bottom:100px;">
		
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-6">
					<div class="artist_image"><img src="images/edit/<?php echo $art_img[0]?>" alt=""></div>
				</div>
				<div class="col-lg-6 artist_col">
					<div class="featured_subtitle">Artist of The Day</div>
					<div class="featured_title"><h1><?php echo $art_name[0];?></h1></div>
					<div class="featured_artist_text">
							<p><?php echo $art_desc[0];?></p>
					</div>
					<div class="button featured_artist_button"><a href="artist.php?id=<?php echo $art_name[0]; ?>&success=0">read more</a></div>
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
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/artists.js"></script>
</body>
</html>