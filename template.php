<html>
	<head>
		<title>VintagePassport</title>
		
		<link rel="stylesheet" type="text/css" href="style2.css"/>
		<link rel="stylesheet" href="https://goo.gl/xkw97e"/>	
		<link rel="shortcut icon" href="images/logof.ico"/>
		
		<script type="text/javascript" src="https://goo.gl/4z1pk1"></script>
		<script type="text/javascript" src="js/scrollandfix.js"></script>
		<script type="text/javascript" src="js/navigationTemplate.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>
		<form id="template_data" action="template.php" target="_blank" method="post">
		
			<input type="hidden" id="object1" name="object1" value="null"/>
			<input type="hidden" id="object2" name="object2" value="null"/>
		</form>
		
		<form id="template2_data" action="template2.php" target="_blank" method="post">
			<input type="hidden" id="objectx" name="objectx" value="null"/>
		</form>
		<?php require "php/connection.php";?>
	</head>
	
	<body class="wrapper">
		<!-- Header-->
		<div class="header">
			<!-- Logo -->
			<div class="logo">
				<a id="logo1" href="index.html" style="text-decoration:none;color:black;text-shadow:0px 0px 0px;padding-left:8px;">
					<span class="fa-stack fa-4x" style="color:black;">
						<i class="fa fa-circle-thin fa-stack-2x"></i>
						<i class="fa fa-vimeo-square fa-stack-1x" ></i>
					</span><br/>&nbsp &nbsp VintagePassport
				</a>
			</div>
			
			<!-- Navigation Bar -->
			<div class="nav-bar">
				<ul>
					<li>
						<a id="icon1" align="center" href="city.html" class="items" title="Cities" data-pqrs="city">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-bed fa-stack-1x"></i>
							</span>
							<br/>&nbsp Cities
						</a>
					</li>
					
					<li>
						<a id="icon2" align="center" class="items" title="Top Places" data-pqrs="Tourist Attractions">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-bed fa-stack-1x"></i>
							</span>
							<br/>Top Places
						</a>
					</li>
					
					<li>
						<a id="icon3" align="center" class="items" title="Hotels" data-pqrs="Hotels">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-bed fa-stack-1x"></i>
							</span>
							<br/>&nbsp Hotels
						</a>
					</li>
					
					<li>
						<a id="icon4" class="items" align="center" title="Events" data-pqrs="Events">  &nbsp
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-tags fa-stack-1x"></i>
							</span>
							<br/>Events
						</a>
					</li>
					
					<li>
						<a id="icon5" href="aboutus.html" align="center" class="items" title="About us" data-pqrs="about">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-users fa-stack-1x"></i>
							</span>
							<br/>About us
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- Search Bar-->
		<div id="search_bar">
			<?php include "php/name.php"; ?>
		</div>
		
		<!-- SlideShow-->
		<div id="theater">
			<?php include "php/slideshow.php"; ?>
		</div>
		
		<!-- Description-->
		<div id="desc">
			<?php include "php/description.php"; ?>
		</div>
		
		<!-- Related Searches-->
		<div id="rel_search">
			<div style="width:33%; float:left;">
				<?php include "php/info1.php"; ?>
			</div>
			
			<div style="width:34%;float:left;">
				<?php include "php/info2.php"; ?>
			</div>
			
			<div style="width:33%;float:left;">
				<?php include "php/info3.php"; ?>
			</div>
		</div>
		
		<!-- Footer -->
		<div class="footer">
			<div class=social-btns>
				<a class="btn facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a class="btn twitter" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
				<a class="btn google" href="https://plus.google.com/discover"><i class="fa fa-google"></i></a>
				<a class="btn skype" href="https://web.skype.com"><i class="fa fa-skype"></i></a>
			</div>
		</div>
	</body>
	
</html>