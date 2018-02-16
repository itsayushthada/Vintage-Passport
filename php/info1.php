<?php
	$name = $_POST["object1"];
	$cat = $_POST["object2"];
	
	if($cat =="city")
	{
		$q1 = "SELECT cid FROM `city` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		$q2 = "SELECT name, rate FROM `hotels` WHERE cityid = $row[0]";
		$res2 = mysqli_query($conn,$q2);
		
		echo "<p style='font-size:40px;'>Hotels</p>";
		if(mysqli_num_rows($res2) > 0)
		{
			while($row2 = mysqli_fetch_array($res2))
			{
				echo $row2["name"]." ---► ".$row2["rate"]." Rs.<br>";
			}
		}
	}
	
	if($cat =="events")
	{
		$q1 = "SELECT fees FROM `events` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Price</p>";
		echo $row["fees"]." Rs.<br>";
	}
	
	if($cat =="tspot")
	{
		$q1 = "SELECT fee FROM `tspot` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Visit Fee</p>";
		echo $row["fee"]." Rs.<br>";
	}
	
	if($cat =="hotels")
	{
		$q1 = "SELECT phone, email FROM `hotels` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Contact No.</p>";
		echo $row["phone"]."<br>";
		
		echo "<p style='font-size:40px;'>Email.</p>";
		echo $row["email"]."<br>";
	}
?>