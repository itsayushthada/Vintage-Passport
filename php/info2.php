<?php
	$name = $_POST["object1"];
	$cat = $_POST["object2"];
	
	if($cat =="city")
	{
		$q1 = "SELECT cid FROM `city` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		$q2 = "SELECT name, fees FROM `events` WHERE cityid = $row[0]";
		$res2 = mysqli_query($conn,$q2);
		
		echo "<p style='font-size:40px;'>Events</p>";
		if(mysqli_num_rows($res2) > 0)
		{
			while($row2 = mysqli_fetch_array($res2))
			{
				echo $row2["name"]." ---► ".$row2["fees"]." Rs.<br>";
			}
		}
	}
	
	if($cat =="events")
	{
		$q1 = "SELECT cityid, _date , address FROM `events` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		
		$q2 = "SELECT jid FROM `city` WHERE cid = ".$row["cityid"];
		$res2 = mysqli_query($conn,$q2);
		$row2 = mysqli_fetch_array($res2);
		
		$q3 = "SELECT name FROM `_state` WHERE jid = ".$row2["jid"];
		$res3 = mysqli_query($conn,$q3);
		$row3 = mysqli_fetch_array($res3);
		
		echo "<p style='font-size:40px;'>Address</p>";
		echo $row["address"].", ".$row3["name"]."<br>";
		
		echo "<br><p style='font-size:40px;'>Date</p>";
		echo $row["_date"]."<br>";
	}
	
	if($cat =="tspot")
	{
		$q1 = "SELECT cityid,otime,ctime FROM `tspot` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		
		$q2 = "SELECT jid FROM `city` WHERE cid = ".$row["cityid"];
		$res2 = mysqli_query($conn,$q2);
		$row2 = mysqli_fetch_array($res2);
		
		$q3 = "SELECT name FROM `_state` WHERE jid = ".$row2["jid"];
		$res3 = mysqli_query($conn,$q3);
		$row3 = mysqli_fetch_array($res3);
		
		echo "<p style='font-size:40px;'>Location</p>";
		echo $row3["name"]."<br>";
		
		echo "<p style='font-size:40px;'>Time</p>";
		echo $row["otime"]." - ".$row["ctime"]."<br>";		
	}
	
	if($cat =="hotels")
	{
		$q1 = "SELECT address FROM `hotels` WHERE name = '$name'";
		$res = mysqli_query($conn,$q1);
		$row = mysqli_fetch_array($res);
		
		echo "<p style='font-size:40px;'>Address</p>";
		echo $row["address"]."<br>";
		
		$q1 = "SELECT cityid FROM `hotels` WHERE name = '$name'";
		$res1 = mysqli_query($conn,$q1);
		$row1 = mysqli_fetch_array($res1);
		
		
		$q2 = "SELECT jid FROM `city` WHERE cid = ".$row1["cityid"];
		$res2 = mysqli_query($conn,$q2);
		$row2 = mysqli_fetch_array($res2);
		
		$q3 = "SELECT name FROM `_state` WHERE jid = ".$row2["jid"];
		$res3 = mysqli_query($conn,$q3);
		$row3 = mysqli_fetch_array($res3);
		
		echo "<p style='font-size:40px;'>Location</p>";
		echo $row3["name"]."<br>";
	}
?>