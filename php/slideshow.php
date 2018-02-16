<?php
	$name = strtolower($_POST["object1"]);
	
	$img1= "images/".$name."1";
	$img2= "images/".$name."2";
	$img3= "images/".$name."3";

	echo '
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
					<img src="'.$img1.'.jpg" style="width:100%; height:700px;">
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="'.$img2.'.jpg" style="width:100%; height:700px;">
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="'.$img3.'.jpg" style="width:100%; height:700px;">
				</div>
			</div>
			<br>

			
			<script>
				var slideIndex = 0;
				showSlides();
			</script>';
?>