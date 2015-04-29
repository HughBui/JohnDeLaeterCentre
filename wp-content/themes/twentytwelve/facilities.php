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
	
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory); ?>/css/slick-theme.css"/>
	
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
	
	
	<!--  APPLICATIONS section  -->
	<section class="listings">	
		<div class="wrapper">
			<ul class="properties_list two">
				<li>
					<div class="property_details" style="height:100px; text-align:center; color: #666464; border: none;">
						<div style="width:70%; margin: 0 auto;">
							<h1>
								Environmental
							</h1>
							<p>
								Isotopic fingerprinting sources of pollutants. Trace metal analysis.
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:100px; text-align:center; color: #666464; border: none;">
						<div style="width:70%; margin: 0 auto;">
							<h1>
								Geosciences
							</h1>
							<p>
								Ceochronolow U/Pb, Pb/Pb. Sm/Nd. Kb/Sr. K/Ca.
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:100px; text-align:center; color: #666464; border: none;">
						<div style="width:70%; margin: 0 auto;">
							<h1>
								Health 
							</h1>
							<p>
								Isotopic tracing with stable isotopes. Bioavailability measurements. eg Calcium absorption for sensitive  patients - pregnant women, children. 
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:100px; text-align:center; color: #666464; border: none;">
						<div style="width:70%; margin: 0 auto;">
							<h1>
								Chemical Metrology 
							</h1>
							<p>
								Calibration of standards for isotopic composition and concentration. Isotopic abundances and atomic weights. 
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:200px; text-align:center; color: #666464; border:none;">
						<img style="position:absolute; right:0px; bottom:0px;" src="<?php bloginfo(stylesheet_directory); ?>/img/1.JPG"/>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:200px; text-align:center; color: #666464; border:none;">
						<img style="position:absolute; left:0px; bottom:0px;" src="<?php bloginfo(stylesheet_directory); ?>/img/2.JPG"/>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:200px; text-align:center; color: #666464; border:none;">
						<img style="position:absolute; right:0px; top:0px;" src="<?php bloginfo(stylesheet_directory); ?>/img/3.JPG"/>
					</div>
				</li>
				<li>
					<div class="property_details" style="height:200px; text-align:center; color: #666464; border:none;">
						<img style="position:absolute; left:0px; top:0px;" src="<?php bloginfo(stylesheet_directory); ?>/img/4.JPG"/>
					</div>
				</li>
				<script>
					$(function() {
						if($(window).width() <= 800){
							$(".property_details > img").css("position", "initial");
						}
					});
				</script>
			</ul>
		</div>
	</section>
	<!--  end APPLICATIONS section  -->
	
	<!--  FEATURED PROJECTS section  -->
	<section class="listings" style="background-color:#f2f2f2; border-top: 1px solid #dadada;">
		<h2 class="caption" style="color:#745e9f; font-weight: bold; margin-bottom:100px;">FEATURED PROJECTS</h2>
		<div class="wrapper">
			<ul class="properties_list">
				<li>
					<div class="property_details right_bottom_borders" style="height:400px;">
						<div>
							<h1>
								ISOTOPIC<br/>FINGERPRINTING OF LEAD IN GREENLAND AND ANTARCTIC SNOW AND ICE. 
							</h1>
							<br/><br/><br/><br/><br/>
							<p style="color: #666464; font-family: "Times New Roman", Georgia, Serif;">
								<b>May 1, 2012</b><br/>
								WA Minister for Science and Innovation John Day visited the John de Laeter Centre for Mass Spectrometry Stage II (JDUC) to congratulate the Centre on its innovative research, which has benefited the minerals and petroleum industry and the environmental sector in Western 
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details right_bottom_borders" style="height:400px; background: url(<?php bloginfo(stylesheet_directory); ?>/img/5.jpg) no-repeat; background-size: 100%;">
						<div style="position:absolute; bottom:20px;">
							<h1>
								DETECTION OF LONG RANGE POLLUTION TRANSPORT ON AEROSOLS.
							</h1>
							<br/>
							<p style="color: #666464; font-family: "Times New Roman", Georgia, Serif;">
								<b>April 26, 2012</b>
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="property_details right_bottom_borders" style="height:400px;">
						<div>
							<h1>
								EVALUATION OF PAST POLLUTION OF A REGION LAKE SEDIMENTS. 
							</h1>
							<br/><br/><br/><br/><br/>
							<p style="color: #666464; font-family: "Times New Roman", Georgia, Serif;">
								<b>May 1, 2012</b><br/>
								John de theter Centre researchers discovered the Earth's oldest crustal fragments at Jack Hills, Western Australia. Lavern ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magma align. Lit enitn ad minim veniam, quis nostrud exercitation ullarnco la boris nisi ut aliquip ex ea commode oonsequat. Du is ante irtn'e 
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="hero blank btn" style="width: 150px; height:50px; line-height:50px; text-align:center; border: 1px solid #dadada; margin: 0 auto;">
			<span style="color: #666464; font-family: "lato-bold", Helvetica, Arial, sans-serif; font-size: 16px; font-weight: bold;">SEE MORE</span>
		</div>
		<script>
			$(".hero.blank.btn").hover(
			  function() {
				$(this).css("background","#dadada");
			  }, function() {
				$(this).css("background","");
			  }
			);
		</script>
	</section>
	<!--  end FEATURED PROJECTS section  -->
	
	<!--  FEATURED PROJECTS section  -->
	<section class="listings" style="background-color:#ffffff; border-top: 1px solid #dadada;">
		<h3 class="caption" style="color:#666464; font-weight: lighter; margin-bottom:100px;">
			OUR TIMS FACILITY INCORPORATES THERMO FINNEGAN<br/>TRITON&#0153; AND A VG 354 MULTICOLLECTOR MASS<br/>SPECTROMETERS. 
		</h3>
		<p class="caption" style="color:#666464; font-size: 20px; margin-top:-50px; margin-bottom:50px;">
				The TIMS evaporates atoms from an unknown sample from a hot filament. The<br/>
				isotopes are separated by a magnetic field and measured as samm ecectric currents. 
		</p>
		<div class="slider multiple-items" style="width:30%; margin: 0 auto;">
			<div><img src="<?php bloginfo(stylesheet_directory); ?>/img/6.JPG"/></div>
			<div><img src="<?php bloginfo(stylesheet_directory); ?>/img/7.JPG"/></div>
			<div><img src="<?php bloginfo(stylesheet_directory); ?>/img/6.JPG"/></div>
			<div><img src="<?php bloginfo(stylesheet_directory); ?>/img/7.JPG"/></div>
		</div>
		<script>
			$('.multiple-items').slick({
			  infinite: true,
			  slidesToShow: 2,
			  slidesToScroll: 2,
			  prevArrow: "<img style='position:absolute; left:-70px; top:60px; cursor:pointer' src='<?php bloginfo(stylesheet_directory); ?>/img/previous.png'/>",
			  nextArrow: "<img style='position:absolute; right:-70px; top:60px; cursor:pointer' src='<?php bloginfo(stylesheet_directory); ?>/img/next.png'/>"			  	  
			});1
		</script>
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
</body>
</html>