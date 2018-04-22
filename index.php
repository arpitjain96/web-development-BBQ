<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: left;
    padding-top: 16px;
}

/* The Modal (background) */
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
.modal {
    display: none; /* Hidden by default */
   position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
     overflow: auto;/* Enable scroll if needed */
    background-color: #EA0D4C/* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #EA0D4C;
    margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<head>
	<meta charset="UTF-8">
	<title>Barbeque Nation</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body style="background-color:lightgreen" ;>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/bbq.jpg" height="70"width="250" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About Us</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				
				<li>
					<a href="locate.php">LOCATE US</a>
				</li>

				<li>
					<a href="login.php">LOGIN/REGISTER</a>
				</li>
				
				<!--button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/user.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
  <label align="left"><h3>Username</h3></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label align="left"><h3>Password</h3></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <center><button type="submit">Login</button></center>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" align="right" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div-->
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
						<section>

					<img class="mySlides" src="images/bbqinside.jpg" width="440" height="440" alt="Img">
					<img class="mySlides" src="images/achari.jpg" width="440" height="440" alt="Img">
					<img class="mySlides" src="images/corn.jpg" width="440" height="440" alt="Img">
					<img class="mySlides" src="images/fish.jpg" width="440" height="440" alt="Img">
					<img class="mySlides" src="images/prawns.jpg" width="440" height="440" alt="Img">
					</section>
					<script>
						var myIndex=0;
						carousel();
						function carousel(){

							var i;
							var x=document.getElementsByClassName("mySlides");
							for(i=0;i<x.length;i++)
								{x[i].style.display="none";}
							myIndex++;
							if(myIndex>x.length)
								{myIndex=1}
							x[myIndex-1].style.display="block";
							setTimeout(carousel,3000);
						}
					</script>


						
						
					</div>
				</div>
				<div id="main">
					
					<h4>BARBEQUE NATION</h4>
					<p>
						Barbeque Nation is an Indian restaurant chain owned by Indore-based Sayaji Hotels Limited. The first restaurant opened in Mumbai in January 2006. The restaurant chain also has private equity firm CX Partners as its investor. Shortly after its start in Mumbai, it opened in other cities such as Chennai, Bengaluru, Hyderabad, Pune, Panjim, Mysore and Kolkata.<br><br>Every table in a Barbeque Nation outlet has a live-grille on it, which customers use to cook their food. Some of the best dishes on the menu are Chermoula Prawns, Shish Kebabs and Cajun Spiced Potatoes. In addition to grilled food, the restaurant serves soups, salads, and desserts, which are a mix of Mediterranean, Pan-Asian, American, Oriental, and Continental cuisine.
					</p>
					
				</div>
			
				<ul id="featured">
					<li>
						<div>
							<img src="images/starters.jpg" width="350" alt="Img"> <a href="gallery.php"></a>
						</div>
						<div class="details">
							<h4>STARTERS</h4>
							<p>Deep vertical integration and our relentless focus on quality, food safety practices at each step of the value chain has earned BBQ as one of the most trusted, valuable and popular brands among Indian consumers .
							</p>
						</div>
					</li>
					<li class="bedroom">
						<div>
							<img src="images/main.jpg" width="310" alt="Img"> <a href="gallery1.php"></a>
						</div>
						<div class="details">
							<h4>MAIN COURSE</h4>
							<p>
								Choose from over varieties food items and feel the need to want more .
								We keep innovating ourselves to serve you better.<br><br><br>
							</p>
						</div>
					</li>
					<li class="kitchen">
						<div>
							<img src="images/desserts.jpg" width="320" alt="Img"> <a href="gallery2.php"></a>
						</div>
						<div class="details">
							<h4>DESSERTS</h4>
							<p>
								Whether you crave sweet, savory, decadent or healthy, we have hundreds of top-rated desserts to satisfy your taste buds.<br><br><br>
							</p>
						</div>
					</li>
				</ul>
				<div class="contact">
					<p>
						For Feedback or any query you can call us on <b>760-962-9541</b></p>
				</div>
				 <!--div class="blog">
					<h4>From the Blog</h4>
					<div>
						<img src="images/carving-small.png" alt="Img"> <span>April 16, 2023</span>
						<p>
							CC's Carving
						</p>
						<a href="blog.php" class="more">Read More</a>
					</div>
					<div>
						<img src="images/resort-small.png" alt="Img"> <span>April 15, 2023</span>
						<p>
							5 Star Resorts
						</p>
						<a href="blog.php" class="more">Read More</a>
					</div-->
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
					
					<a href="gallery.php"><img src="images/bbqinside.jpg" width="300" alt="Img"></a>
					<p>
 G2 & G3, Ground Floor, <br>DDA Community Center, Opposite Eastend Club Vivek Vihar, Vivek Vihar, Delhi, 110095	</p>
				</div>
				<div>
					<h4>About Buffet</h4>
					<ul class="posts">
						<li>
			
							<p>We provide you with umlimited starters, delicious food and sweetest desserts.<br><br>
							   For more details about Buffet system<br></p>

								<a href="gallery.php"><br>Click Here </a>
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