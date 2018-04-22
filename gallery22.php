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
	<title>Gallery</title>
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
					<li>
						<a href="gallery.php">Starters</a>
					</li>
					<li>
						<a href="gallery1.php">Main Course</a>
					</li>
					<li class="selected">
						<a href="gallery2.php">Desserts</a>
					</li>
				</ul>
				<h1>Desserts</h1>

				<ul class="items">
					<li>
						<div class="frame">
							<img src="images/brownie.jpg"height="260" width="400" alt="Img">
						</div>
						<h5>Walnut American Brownie
</h5>
<p>  Shiny outer coating, moist fudgey centre tempered by the occasional chunk of walnut. </p>						
						<span class="price">Rs.150</span>
					</li>
					<li>
						<div class="frame">
							<img src="images/kheer.jpg"height="260" width="400" alt="Img">
						</div>
						<h5>Kheer Pudding</h5>
<p> Kheer is an Indian rice pudding cooked with milk and sugar, flavored with nuts and saffron. </p>
				
						<span class="price">Rs150.00</span>
					</li>
				</ul>
				<div id="pagination">
					<ul>
						<li>
							Pages:
						</li>
						<li>
							<a href="gallery2.php">1</a>
						</li>
						<li>
							<a href="gallery21.php">2</a>
						</li>
						<li class="selected">
							<a href="gallery22.php">3</a>
						</li>
						<li>
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
					<a href="locate.php">LOCATE US</a>
				</li>
				<li>
					<a href="login.php">LOGIN/REGISTER</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>