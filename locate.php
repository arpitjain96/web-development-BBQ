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
	<title>LOCATE US</title>
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
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
				
				<li class="selected">
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
			<div class="body"  id="gallery">
				<h1>DELHI</h1>
				<ul class="items">
					<li>
						 <div id="map"style="width:850px;height:400px;background:yellow"></div>
						 <h5>VIVEK VIHAR</h5>
						<p> G2 & G3, Ground Floor, DDA Community Center, Opposite Eastend Club Vivek Vihar, Vivek Vihar, Delhi, 110095</p>
						</li>
						
						<li>
						 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9805612537475!2d77.21837531421447!3d28.63034469093267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd3688e349cb%3A0xce0d96d63feed9fb!2sBarbeque+Nation!5e0!3m2!1sen!2sin!4v1498755714685" background="yellow" width="850" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
						 <h5>CONNAUGHT PLACE</h5>
						<p> N-19, 2nd Floor, Munshi Lal Building, Connaught Place, New Delhi, Delhi 110001</p>
						</li>



    <script>
      function initMap() {
        var uluru = {lat: 28.6657816, lng: 77.3039008};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGSigEHvr-M5MtgIJtAb8WOxbTzmeEabE&callback=initMap">
    </script>
			
				
					<h1>CONTACT US</h1>
					
					<form action="contactus.php" method="post">
						<label>Name</label><br>
						<input type="text" value="" name="Name">
						<br><br><label>EmailAddress</label><br>
						<input type="text" value="" name="EmailAddress">
						<br><br><label>Subject</label><br>
						<input type="text" value="" name="Subject">
						<input type="submit" value="SUBMIT" class="btn1">
					</form>
		</div>
	</ul>
	</div>
</div>

	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
					<a href="gallery.php"><img src="images/bbqinside.jpg" alt="Img"></a>
					<p>
						4885 Wilson Street<br> Victorville, CA 92392<br><br> 760-962-9541<br><br> <a href="index.html">info@carvedcreations.com</a>
					</p>
				</div>
				<div>
					<h4>IMPORTANT</h4>
					<ul class="posts">
						<li>
							<h1>INTERNS REQUIRED</h1>
							<p>We are hiring interns to assist us in our IT department<br>upload your Resume so that we can select the deserving ones.<br></p>
							<form action="upload.php" method="post" enctype="multipart/form-data">
	                         <br>Your CV:<br> <input type="file" name="uploadedfile"/>
							<input type="submit" name="submit" value="Upload" class="btn1"/>
						</form>
                
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