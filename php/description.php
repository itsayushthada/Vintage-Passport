<?php
	
	$name = $_POST["object1"];
	$cat = $_POST["object2"];
	$query = "SELECT _desc FROM `$cat` WHERE NAME='$name'";
	$result = mysqli_query($conn , $query);
	if($cat != "hotels")
	{
		$row = mysqli_fetch_array($result);
		echo "<br>$row[0]";
	}
?>