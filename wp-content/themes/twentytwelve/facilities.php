<?php
/*
 * Template Name: Facilities
 * Description: Single Facilities Page Template.
 */

// Code to display Page goes here...?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>John de Laeter Centre</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory); ?>/css/responsive.css">


	<script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	
	
</head>
<body>
	<!-- header section  -->
	<section class="hero facilitiesTop">
		<header>
			<div class="wrapper">
				<img class="logo" src="<?php bloginfo(stylesheet_directory); ?>/img/logo.png"/>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Facilities</a></li>
						<li><a href="#">Instruments</a></li>
						<li><a href="#">Research</a></li>
					</ul>
					<a href="#" class="login_btn">Contact</a>
				</nav>
			</div>
		</header>

			<section class="caption" style="margin-top:80px;">
				<h3 class="caption">(TIMS)</h3>
				<h2 class="caption">THERMAL IONIZATION MASS SPECTROMETRY FACILITY</h2><br/>
				<img src="<?php bloginfo(stylesheet_directory); ?>/img/video.png"/>
				<h3 class="caption" style="font-size:15px;line-height: 170%; color:#706e71;">
					THIS INSTRUMENT PROVIDES HIGHLY ACCURATE AND PRECISE MEASUREMENTS<br/>
					OF AN ELEMENT'S ISOTOPIC COMPOSITION, REPRESENTING THE 'GOLD'<br/>
					STANDARD FOR ISOTOPIC ANALYSIS. THE ISOTOPIC DILUTION TECHNIQUE IS<br/>
					USED TO MEASURE THE CONCENTRATION OF ELEMENTS IN A MATRIX AND CAN<br/>
					YIELD THE HIGHEST ACCURACY ACHIEVABLE. 
				</h3>
			</section>
	</section>
	<!--  end header section  -->

	<section class="hero blank" style="height: 200px;">
		<section class="caption" style="margin-top:80px;">
			<h2 class="caption" style="color:#b463b0; font-weight: bold;">APPLICATIONS</h2><br/>
			<p class="caption" style="color:#797979;">
				The TIMS instrument, in combination with isotope dilution methodology, is<br/>
				widely used in chemical metrology for the calibration of isotopic standards, and<br/>
				the calculation of isotopic abundances and atomic weights. 
			</p>
		</section>
	</section>	
	
	
	<!--  grid section  -->
	<section class="listings">	
		<div class="wrapper">
			<ul class="properties_list two">
				<li>
					<div class="property_details" style="height:200px; border-bottom: 3px solid #49b1b4;">
						<div>
							<h1>
								<a href="#">K-AR GEOCHRONOLOGY<br/>&nbsp;</a>
							</h1>
							<p style="position: absolute; bottom:20px; right: 20px;">
								Dr Noreen Evans
							</p>
							<p style="color:white; display:none; position: absolute; bottom:20px; left: 20px;">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra ante quam, sit amet faucibus metus aliquet sit amet. Pellentesque mollis suscipit arcu eget lobortis.
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:200px; margin-right:0px; border-bottom: 3px solid #59ba97;">
						<div>
							<h1>
								<a href="#">(U-TH)/HE<br/>&nbsp;</a>
							</h1>
							<p style="position: absolute; bottom:20px; right: 20px;">
								Dr Noreen Evans
							</p>
							<p style="color:white; display:none; position: absolute; bottom:20px; left: 20px;">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra ante quam, sit amet faucibus metus aliquet sit amet. Pellentesque mollis suscipit arcu eget lobortis.
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!--  end grid section  -->

	<!--  footer section  -->
	<div style="width:100%; overflow: hidden; background: #303030;">
		<div style="float:left; margin-left: 10%;">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/address.jpg"/>			
		</div>
		
		<div style="float:left; margin-left: 10%; margin-top: 50px; background: #303030; font-family: 'lato-regular', Helvetica, Arial, sans-serif; font-size: 15px;">
					<a href="#" style="text-decoration: none;">STAFF PORTAL</a><br/>
					<a href="#" style="text-decoration: none;">LINKS</a><br/>
					<a href="#" style="text-decoration: none;">SCIENCE LINKS</a><br/>
					<a href="#" style="text-decoration: none;">BOARD OF DIRECTORS</a><br/>
			</div>
		
		<div style="float:left; margin-left: 10%; margin-top: 50px; background: #303030;">
					<p style="color:white">Contact to us Via social:</p>
					<a href="" target="_blank"><img src="<?php bloginfo(stylesheet_directory); ?>/img/in.png"/></a>
					<a href="" target="_blank"><img src="<?php bloginfo(stylesheet_directory); ?>/img/twitter.png"/></a>
					<a href="" target="_blank"><img src="<?php bloginfo(stylesheet_directory); ?>/img/youtube.png"/></a>
		</div>
	</div>
	<div style="width:100%; overflow: hidden; background: #242424;">
		<img src="<?php bloginfo(stylesheet_directory); ?>/img/gramercy.jpg"/ style="float:left; margin-left:10%;">
		<img src="<?php bloginfo(stylesheet_directory); ?>/img/copywrite.jpg" style="float:right; margin-right:10%;"/>
	</div>
	<!--  end footer section  -->
	
	<!--  scripts to change color  -->
	<script>
		$('.property_details').each(function() {
			$(this).hover(
			  function() {
				var color = $(this).css("border-bottom-color");
				$(this).css('background-color',color); 
				$(this).find("p").toggle();
				$(this).find("a").css("color", "white");
			  }, function() {
				$(this).css('background-color','white'); 
				$(this).find("p").toggle();
				$(this).find("a").css("color", "#666464");
			  }
			);
		});
	</script>
</body>
</html>