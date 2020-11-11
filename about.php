<?php

	include "connection.php";

// define variables and set to empty values

	$email="";

	if ($_SERVER["REQUEST_METHOD"]=="POST") {

	  $email=test_input($_POST["email"]);
	 
	 }

	function test_input($data) {
	  $data=trim($data);
	  $data=stripslashes($data);
	  $data=htmlspecialchars($data);
	  return $data;
	}

	$query=mysqli_query($conn,"INSERT INTO `newsletter`(`email`) VALUES ('$email')");

//	if(isset($_POST['submit'])){

		if($query){

			echo "";

		}else{

			echo "Insertion Error!!! ".die(mysqli_error());

		}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="style.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="container-fluid">

	<header id="masthead" class="site-header">
			<div class="logo1"></div>
			<!--<img class="phone-img" src="">  images/phone3.png -->
			<div id="tel"><a class="text-light text-decoration-none" href="tel:+919942362009">+91 9976579977</a></div><span class="text-light">/</span>
			<div id="tel1"><a class="text-light text-decoration-none" href="tel:+919942362009">+91 9942362009</a></div>
			<div id="poultry-regd"></div>
			<div id="whatsapp1"><a target="_blank" href="https://wa.me/+919701898905/"><img src="images/whatsapplogo1.png" /></a></div>
			<ul class="app-logo">
				<li><img src="images/apple_img.png" /></li>
				<li><img src="images/android.png" /></li>
			</ul>
			<ul class="social-buttons">
				<li><a href="https://www.facebook.com/JK-Farms-107254621191038" target="_blank"><img src="images/facebook.png"></a></li>
				<li><a href="#"><img src="images/linkedin.png"></a></li>
				<li><a href="#"><img src="images/twitter.png"></a></li>
				<li><a href="#"><img src="images/youtube.png"></a></li>
			</ul>
			<div id="login"><a href="#">Login</a></div>

	</header><!-- #masthead -->
		
		<div class="navigation-class">
			<nav id="site-navigation" class="main-navigation text-nowrap">
				<div><a href="#">Home</a></div>
				<div class="bg-dark"><a href="#">About Us</a></div>
				<div><a href="#">Our Products</a></div>
				<div><a href="#">Gallery</a></div>
				<div><a href="#">Contact Us</a></div>
			</nav><!-- #site-navigation -->	  
		</div>

		<div class="fixed-top"> <!-- Mobile Navigation -->
			  <div class="collapse" id="navbarToggleExternalContent">
			    <div class="mob-nav bg-dark p-4">
			 	        <div><a href="#">Home</a></div>
						<div><a href="#">About Us</a></div>
						<div><a href="#">Our Products</a></div>
						<div><a href="#">Gallery</a></div>
						<div><a href="#">Contact Us</a></div>
			    </div>
			  </div>
			  <nav class="navbar navbar-dark">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			  </nav>
		</div>

	<section class="main">

		<section class="aboutus-header">

		<h1 class="text-center text-light">About Us</h1>

		</section>

		<div class="art1">Since 2018 we’ve been doing everything in our power to bring the freshest produce to the people of Tamil Nadu. At JK Organic Poultry Farms we offer an authentic Poultry Farm experience that will suit the entire family. With everything from homemade foods to fun outdoor events, it’s a great place to visit at all seasons, since things are constantly changing here.</div>

		<div class="art2">Come by and enjoy our amazing products as well as contact us to know our operations, products and activities.</div>

		<section class="vision-header">

		<h2 class="text-center text-light">OUR VISION</h2>
		
		</section>

		<p>Become one of the leading chicken, Quail and Goat producers in India.</p>
		
		<section class="mission-header">

		<h2 class="text-center text-light">OUR MISSION</h2>
		
		</section>

		<p>Continuous improvement and investment in people and technologies to produce high quality products to our consumers.</p>

		<section class="corevalues-header">

		<h2 class="text-center text-light">CORE VALUES</h2>
		
		</section>

		•	
		•	
		•	
		•	

		
	</section>



















		<footer class="top-footer">
			<div class="row">
				<div class="column1 col-lg-3 col-md-12 col-sm-12 col-12" style="width:350px;">
					<div class="logo2"></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					<div class="hours">
						<h4>Opening Hours:</h4><br/>
						<div class="business-hours">
							<p>MON-SUN: 24/7 hours</p><br/>
						</div>
					</div>
				</div>
				<div class="column2 col-lg-3 col-md-12 col-sm-12 col-12" style="width:350px;">
					<div class=""><a href="#">Why JK Farms</a></div><br/>
					<div class=""><a href="#">About Us</a></div><br/>
					<div class=""><a href="#">We are hiring</a></div><br/>
					<div class=""><a href="#">Terms and Conditions</a></div><br/>
					<div class=""><a href="#">Privacy Policy</a></div><br/>
					<div class=""><a href="#">FAQs</a></div>
				</div>
				<div class="column3 col-lg-3 col-md-12 col-sm-12 col-12" style="width:350px;">
					<div><h2>Contact Us:</h2></div>
					<div><b>Call us:</b> <a href="tel:+919976579977">+919976579977</a></div><br/>
					<div><a href="tel:+919942362009">+919942362009</a></div><br/>
					<div><a href="tel:+918610109434">+918610109434</a></div><br/>
					<div><b>Mail:</b> <a href="mailto:Info@jkgroups.co.in">Info@jkgroups.co.in</a></div><br/><br/>
					<div class="chat">
						<!--Start of Tawk.to Script-->
						<script type="text/javascript">
						var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
						(function(){
						var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
						s1.async=true;
						s1.src='https://embed.tawk.to/5f806dc74704467e89f60f72/default';
						s1.charset='UTF-8';
						s1.setAttribute('crossorigin','*');
						s0.parentNode.insertBefore(s1,s0);
						})();
						</script>
						<!--End of Tawk.to Script-->
					</div>
				</div>
				<div class="column4 col-lg-3 col-md-12 col-sm-12 col-12" style="width:380px;">
					<div class="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15699.069461632327!2d78.0041838245496!3d10.360476981672416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00aa307bcfec59%3A0xe33b279892b05292!2sKalathu%20Kottam%2C%20Balakrishnapuram%2C%20Tamil%20Nadu%20624005!5e0!3m2!1sen!2sin!4v1602160073173!5m2!1sen!2sin" width="400" height="190" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div><br/>
					<div class="newsletter">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
							<input type="email" name="email" placeholder="Email for newsletter"> <input id="submitlttr" type="submit" value="Subscribe">
						</form>


					</div><br/><br/>
					
				</div>
			</div>
			
</footer>

<footer class="bottom-footer">
	Copyright © 2020. Powered by <a href="http://jkgroups.co.in/">JK Info-Tech</a> . All Rights Reserved | <a href="#">Privacy Policy.</a>
</footer>


<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<script>
	/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</div><!-- #container-fluid class ends -->
</body>
</html>