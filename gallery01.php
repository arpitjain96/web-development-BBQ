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
							<img src="images/tikka.jpg" height="260" width="400" alt="Img">
						</div>
						<h5>Marwari Paneer Tikka<font color="green">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;VEG</font></h5>
						<p>Paneer Tikka is a popular tandoori snack recipe, where marinated paneer cubes are roasted to perfection. It is a vegetarian recipe that has a crispy texture and smoky flavours.	</p>
						
						<span class="price">Rs.225</span>
					</li>
					<li>
						<div class="frame">
							<img src="images/pinea.jpg"height="260" width="400" alt="Img">
						</div>
						<h5>Sweet Chilli Pinea<font color="green">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;VEG</font></h5>
						<p> These ar SO easy and really good. The hot sauce gives it an extra kick and cuts the sweetness. They can help with patience while the rest of the grilled feast comes together, but be warned, they go quickly!</p>
				
						<span class="price">Rs180.00</span>
					</li>
				
				<li>
						<div class="frame">
							<img src="images/potato.jpg"height="260" width="400" alt="Img">
						</div>
						<h5>Cajun spice Potato<font color="green">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;VEG</font></h5>
						<p> This lip smacking vegetarian starter is a must try if you are a potato lover. Baby potatoes roasted and then mixed with a rich and creamy dressing, spiced up with a special Cajun spice mix is utterly delicious.</p>
				
						<span class="price">Rs180.00</span>
					</li>
				</ul>
				<div id="pagination">
					<ul>
						<li>
							Pages:
						</li>
						<li >
							<a href="gallery.php">1</a>
						</li>
						<li class="selected">
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