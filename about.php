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
	<title>About</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body style="background-color:lightgreen">
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/bbq.jpg" height="70"width="250" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="about.php">About Us</a>
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
			<div class="body" id="about">
				<div id="sidebar">
					<div class="body">
						

						<img src="images/bbqinside.jpg" width="450" height="250" alt="Img">
						<div class="contact">
							<p>
								To give Feedback and for any other queries please call <b>760-962-9541</b> Or you can visit us at: <b>G2 & G3, Ground Floor, <br>DDA Community Center, Opposite Eastend Club Vivek Vihar, Vivek Vihar, Delhi, 110095</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>About Us</h1>
					<h4>JOURNEY OF BBQ</h4>
					<p>
						Visiting a restaurant today is not an easy task. Different, creative, innovative, unusual are aspects that food lover are always on the look-out for. Understanding these desires and demands, Barbeque Nation was set up in 2006, serving food innovatively. With ‘grill-on-the-table’ concept, BBQ Nation, as its fondly called, has come a long way.<br>

A casual dining restaurant chains in India, it now has 39 outlets across the nation and offers a happy blend of American, Mediterranean, Oriental and Indian cuisines in both vegetarian and non-vegetarian choices.
					</p>
					<h4>OUR POLICY</h4>
					<p>BBQ Nation is a very consumer – oriented company and have a very strong feed-back mechanism, wherein after every meal, we try to get 60 – 80 % of our customers to fill up the feedback forms to that it enables us to serve them better. It helps us gauge the customer’s expectations, reactions to offering etc, thus making feedback an internal element of the system. We also have a ‘Guest Satisfaction Index’ – GSI which gets published across our system and those scores are taken very seriously as those work as success parameters for the employees at the company. These have been core customer – driven initiatives from our side, and it becomes as part of the marketing initiative and sometimes also take the role of a business thought process. Apart from this, we have been doing a lot of festivals over the last few months, and there is a huge opportunity we see to innovate and understand the customers well, the way they think and then do things they way they like. So at the of the day, it all boils down to the customers as it is a consumer – driven business, we need to understand that and then deliver what they feel.
					</p>
					<h4>HAVE A LOOK AT OUR JOURNEY</h4>
					<video width="1000" height="400" autoplay loop controls>
  <source src="video/HistoryFinal.mp4" type="video/mp4">
  <source src="video/HistoryFinal.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
					
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
						G2 & G3, Ground Floor, <br>DDA Community Center, Opposite Eastend Club Vivek Vihar, Vivek Vihar, Delhi, 110095<br> 760-962-9541<br><br> <a href="index.html">info@carvedcreations.com</a>
					</p>
				</div>
				<div>
					<h4>To know more About Us</h4>
					
                 <form method="post" action="download.php">
                 <input type="submit" value="Download" class="btn1" name="submit" >


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