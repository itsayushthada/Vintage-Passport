<?php
	$name = $_POST["object1"];
	$cat = $_POST["object2"];
	
	if($cat =="city")
	{
		$q1 = "SELECT cid FROM `city` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		$q2 = "SELECT name, _type FROM `tspot` WHERE cityid = $row[0]";
		$res2 = mysqli_query($conn,$q2);
		
		echo "<p style='font-size:40px;'>Attractions</p>";
		if(mysqli_num_rows($res2) > 0)
		{
			while($row2 = mysqli_fetch_array($res2))
			{
				echo $row2["name"]." ---► ".$row2["_type"]."<br>";
			}
		}
	}
	
	if($cat =="events")
	{
		$q1 = "SELECT website FROM `events` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Website</p>";
		echo $row["website"]."<br>";
	}
	
	if($cat =="tspot")
	{
		$q1 = "SELECT _type, otime, ctime FROM `tspot` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Categeory</p>";
		echo $row["_type"]."<br>";
	}
	
	if($cat =="hotels")
	{
		$q1 = "SELECT rate, star FROM `hotels` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Price</p>";
		echo $row["rate"]." Rs.<br>";
		 
		echo "<p style='font-size:40px;'>Star</p>";
		echo $row["star"]."<br>";
	}
?>