<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<style type="text/css">
.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: all;
    z-index: -100;
}

.fullscreen-bg__video {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    width: 113.5%;
    height: 135%;
}
	
</style>
<head>
	<meta charset="UTF-8">
	<title>Gallery </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/bbq.jpg" height="70"width="250" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About Us</a>
				</li>
				<li class="selected">
					<a href="gallery.php">Gallery</a>
				</li>
				
				<li>
					<a href="locate.php">Locate us</a>
				</li>
				<li>
					<a href="login.php">Login/Register</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="fullscreen-bg">
<video loop muted autoplay poster="img/achari.jpg" class="fullscreen-bg__video">
        <source src="video/cook.webm" type="video/webm">
        <source src="video/cook.mp4" type="video/mp4">
        <source src="video/cook.ogv" type="video/ogg">
    </video>
    </div>

	<div id="contents">
		<div>
			<div class="body"  id="gallery">
				<ul class="tabs">
					<li class="selected">
						<a href="gallery.php">Starters</a>
					</li>
					<li>
						<a href="gallery1.php">Main Course</a>
					</li>
					<li>
						<a href="gallery2.php">Desserts</a>
					</li>
				</ul>
				<h1>Starters</h1>
				<ul class="items">
					<li>
						<div class="frame">

							<img src="images/marrakesh.jpg" alt="Img" width="400" height="250">
						</div>
						<h5>Marrakesh Roll<font size="3" color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VEG</font></h5>
						<p>
						Beetroot, mashed potato, and remaining ingredients except for the semolina is well prepared in the bowl.  So good, you will be tongue-tied.
						</p>
						
						<span class="price">Rs.275</span>
					</li>
					<li>
						<div class="frame">
							<img src="images/chaap.jpg" alt="Img" width="400" height="250">
						</div>
						<h5>Lahori Soya Chaap<font size="3" color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;VEG</font></h5>
						<p>  Marinated with fresh masalas, cream, yogurt, gravies as per umpteen variations, Soya Chaap is like soul food whether it is eaten as a meal or as a starter. </p>
				
						<span class="price">Rs225.00</span>
					</li>
					<li>
						<div class="frame">

							<img src="images/achari.jpg" alt="Img" width="400" height="250">
						</div>
						<h5>Achari Mushroom<font size="3" color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VEG</font></h5>
						<p>
						The achari spice blend is a flavourful and fragrant medley of mustard, cumin, fennel, fenugreek, carrom, dry chillies, dry mango and nigella.
						</p>
						<span class="price">Rs225.00</span>
				</ul>
				<div id="pagination">
					<ul>
						<li>
							Pages:
						</li>
						<li class="selected">
							<a href="gallery.php">1</a>
						</li>
						<li>
							<a href="gallery01.php">2</a>
						</li>
						<li>
							<a href="gallery02.php">3</a>
						</li>
						<li>
							<a href="gallery03.php">4</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
					<a href="gallery.php"><img src="images/bbqinside.jpg" alt="Img"></a>
					<p>
						 G2 & G3, Ground Floor, <br>DDA Community Center, Opposite Eastend Club Vivek Vihar, Vivek Vihar, Delhi, 110095<br><br> <a href="index.html">info@carvedcreations.com</a>
					</p>
				</div>
				<div>
					<h4>BUFFET DETAILS</h4>
					<ul class="posts">
						<li>
							<span class="time">Lunch </span>
							<p>Lunch Veg- Rs.612<br>
							Lunch NonVeg- Rs.672
								</p>
						</li>
						<li>
							<span class="time">Dinner</span>
							<p>Dinner Veg- Rs.916<br>
							Dinner NonVeg- Rs.1033
								</p>
						</li>
						</ul>
				</div>
				<div>
					<form action="newsletter.php" method="post" id="newsletter">
						<h4>Join Our Newsletter</h4>
						<input type="text" value="Enter Email Address Here For Updates" name="EmailAddress" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2" />
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				
				<li>
					<a href="locate.php">Locate us</a>
				</li>
				<li>
					<a href="login.php">Login/Register</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>