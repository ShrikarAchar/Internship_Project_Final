<!DOCTYPE html>
<html lang="en">
<head>
<title>Shows</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
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
								<li><a href="artists.php">Artists</a></li>
								<li class="active"><a href="shows.php">Shows</a></li>
								<li><a href="blog2.php">Recording Studios</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="#">Login</a></li>
								<li><a href="#">Register</a></li>
							</ul>

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
						<li><a href="artists.php">Artists</a></li>
						<li><a href="shows.php">Shows</a></li>
						<li><a href="blog2.php">Studios</a></li>
						<li><a href="contact.php">Contact</a></li>
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
							<div class="home_title">Shows	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}
* {
  box-sizing:border-box;
}



.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>Upcoming shows in the Locality</h2>
  <p>Book your tickets, Enjoyy.....</p>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>The RDX Band.</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Raghu Dixit Project</b></h1>
      
      <button type="button" class="btn btn-primary"><a href="https://in.bookmyshow.com/events/the-raghu-dixit-project-and-swarathma-at-skydeck/ET00115206"> Book Now</a></button>
    </div>
    <div class="column-33">
	<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
	<div class="shadow p-3 mb-5 bg-white rounded"> <img src="images/edit/raghu_art_main.jpg" width="500" height="350"></div>
	</div>
	
    </div>
  </div>
</div>
</div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-44">
	<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
	<div class="shadow p-3 mb-7 bg-white rounded"><img src="images/edit/agam_art_main.jpg" alt="App" width="335" height="471"></div>
	</div>
    </div>
	</div>
	  </div>
	
      <div class="column-33">
	  <h1 class="xlarge-font logo_text " style="color:midnightblue"><b>AGAM</b></h1>
      <h1 class="large-font" style="color:vibgyor"><b>Harish Sivaramakrishnan</b></h1>
      
      <button type="button" class="btn btn-primary"><a href="https://in.bookmyshow.com/events/agam-live-at-skydeck/ET00115261">Book Now</a></button>
      </div>
     </div>
     </div>
     </div>
          <!-- The App Section -->
     <div class="container">
     <div class="row">
     <div class="column-66">
      <h1 class="xlarge-font"><b>Vijayprakash</b></h1>
      
      <p><span style="font-size:25px ">Location</span></p>
      <button type="button" class="btn btn-primary"><a href="https://in.bookmyshow.com/person/vijay-prakash/22632">Book Now</a></button>
      </div>
     <div class="column-33">
	 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
	    <div class="shadow p-3 mb-5 bg-white rounded"><img src="images/edit/vijay prakash.jpg" width="400" height="600" ></div>
    </div>
  </div>
</div>
</div>

<div class="container" style="background-color:#f1f1f1">
	<div class="row">
	  <div class="column-33">
	  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
	  <div class="shadow p-3 mb-5 bg-white rounded"><img src="images/edit/pinea_art_main.jpg" alt="App" width="335" height="471"></div>
	  </div>
	  </div>
	  </div>
	  </div>
	  
	  <div class="column-44">
		<h1 class="xlarge-font logo_text " style="color:midnightblue"><h1>   Pineapple </br> Express</h1></h1>
		<h1 class="large-font" style="color:slateblue;"><b>Taka Taka </br>Thei Thei..!</b></h1>
		
		<button type="button" class="btn btn-primary"><a href="https://in.bookmyshow.com/person/pineapple-express/1082849">Book Now</a></button>
	  </div>
	</div>
  </div>
  </div>


						
						
		</div>
	</div>

	<!-- Featured News -->

	

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
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
<script src="js/blog.js"></script>
</body>
</html>