<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php include "php/tempname.php"; ?>
		</title>
		<link rel="shortcut icon" href="images/logof.ico"/>
		<link rel="stylesheet" href="master.css"/>
		<link rel="stylesheet" href="https://goo.gl/xkw97e"/>	
		<link rel="stylesheet" href="style2.css"/>
		
		<script type="text/javascript" src="https://goo.gl/4z1pk1"></script>
		<script type="text/javascript" src="js/scrollandfix.js"></script>
		<script type="text/javascript" src="js/navigationTemplate.js"></script>
		<form id="template2_data" action="template2.php" target="_blank" method="post">
			<input type="hidden" id="objectx" name="objectx" value="null"/>
		</form>
		
	</head>
  
	<body>
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

		<div id="search_bar">
			Search The <?php include "php/tempname.php"; ?>
		</div>
		
		<div id="eventdata">
			<form name="dataform" action="php/IIformresult.php" method="post" target="result">
				<div style="width:33%; float:left;">
					<p style='font-size:40px;'>City Name</p>
					<input type="text" id="input1" name="input1" placeholder="Enter city Name"/>
				</div>
			
				<div style="width:34%;float:left;">
					<p style='font-size:40px;'>
						<?php include "php/case11.php"; ?>
					</p>
					<input type="text" id="input2" name="input2"/>
				</div>
			
				<div style="width:33%;float:left;">
					<p style='font-size:40px;'>
						<?php include "php/case12.php"; ?>
					</p>
					<input type="text" id="input3" name="input3"/>
				</div>
		</div>		
				<input type="hidden" id="identity" name="identity" value="<?php include 'php/temp2data.php';?>"/>
				
				<div class="buttonholder">
					<input type="submit" id="button" name="Search" onclick="changeme()"/>
				</div>
			</form>
		
		<iframe id="result" name="result">
		</iframe>
		
		<!-- Footer -->
		<br><br><br>
		<div class="foot">
			<div class=social-btns>
				<a class="btn facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a class="btn twitter" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
				<a class="btn google" href="https://plus.google.com/discover"><i class="fa fa-google"></i></a>
				<a class="btn skype" href="https://web.skype.com"><i class="fa fa-skype"></i></a>
			</div>
		</div>
	</body>
</html>