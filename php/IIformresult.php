<?php
		$a = $_POST["input1"];
		$b = $_POST["input2"];
		$c = $_POST["input3"];
		$identity = $_POST["identity"];
		
		include "connection.php";
?><!--
		if($identity == "Events")
		{
			if(strlen($b)==10)
				if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$b))
					$validb=1;
				
			if(strlen($c)==10)
				if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$c))
					$validc=1;
			
			if($validb == 1 && $validc == 1)
			{
				$query="SELECT events.name, events._date, events.address FROM `events` JOIN `city` ON (city.name='$a' AND city.cid=events.cityid) WHERE _date>='$b' AND _date<='$c';";
				$result = mysqli_query($conn, $query);
				while($row1 = mysqli_fetch_array($result))
					echo $row1['name']."<br>";
				$result = mysqli_query($conn, $query);
				while($row2 = mysqli_fetch_array($result))
					echo $row2['_date']."<br>";
				$result = mysqli_query($conn, $query);
				while($row3 = mysqli_fetch_array($result))
					echo $row3['address']."<br>";
			}
		}	
	
?>	
		
	<!--
		else if($identity == "Tourist Attractions")
		{
		
		}
	
		else if($identity == "Hotels")
		{
		
		}--!-->

<!DOCTYPE HTML>
<html>
	<head>
		<style type="text/css">
			.wrapper{
				width:100%;
				height:100%;
				text-align:center;
				overflow-x:hidden;
			}
			.minfo{
				width:33.33%;
				float:left;
				text-align: center;
				text-shadow: 2px 1px green;
				font-family: Arvo;
				font-size: 20px;
			}
			.hinfo{
				width:25%;
				float:left;
				text-align: center;
				text-shadow: 2px 1px green;
				font-family: Arvo;
				font-size: 20px;
			}
			p{
				text-align: center;
				text-shadow: 2px 1px green;
				font-family: Arvo;
			}
		</style>
	</head>
	
	<body class="wrapper">
		
		<?php
			$validb=0;
			$validc=0;
			if($identity == "Events")
			{
				if(strlen($b)==10)
					if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$b))
						$validb=1;
				
				if(strlen($c)==10)
					if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$c))
						$validc=1;
			
				if($validb == 1 && $validc == 1)
				{
					$query="SELECT events.name, events._date, events.address FROM `events` JOIN `city` ON (city.name='$a' AND city.cid=events.cityid) WHERE _date>='$b' AND _date<='$c';";
					echo "<div class='minfo'>
						  <p style='font-size:40px;'>Name</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['name']."<br>";
					echo "</div>";
					
					echo "<div class='minfo'>
						  <p style='font-size:40px;'>Date</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['_date']."<br>";
					echo "</div>";
				
					echo "<div class='minfo'>
						  <p style='font-size:40px;'>Name</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['address']."<br>";
					echo "</div>";
				}
				else
					echo "<p style='font-size:40px;'>Incorrect Date</p>";
			}
			
			if($identity == "Hotels")
			{
				$validb=0;
				$validc=0;
				if (ctype_digit($b))
					$validb=1;
				
				if (ctype_digit($c))
					$validc=1;
			
				if($validb == 1 && $validc == 1)
				{
					$query="SELECT hotels.name, hotels.rate, hotels.address, hotels.star FROM `hotels` JOIN `city` ON 
							(city.name='$a' AND city.cid=hotels.cityid) WHERE rate<$b AND star<=$c;";
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Name</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['name']."<br>";
					echo "</div>";
					
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Price</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['rate']."<br>";
					echo "</div>";
				
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Star</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['star']."<br>";
					echo "</div>";
					
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Address</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['address']."<br>";
					echo "</div>";
				}
				else
				{
					if($validb==0)
						echo "<p style='font-size:40px;'>Enter Valid Max Price</p>";
					if($validc==0)
						echo "<p style='font-size:40px;'>Enter Valid Hotel Rating</p>";
				}
			}
			
			if($identity == "Tourist Attractions")
			{
				$validb=0;
				$validc=0;
				if (ctype_digit($b))
					$validb=1;
				
				$checker = array("Religious","Historic","Public","Natural");
				foreach ($checker as $value)
					if($c==$value)
						$validc=1;
					
				if($validb == 1 && $validc == 1)
				{
					$query="SELECT tspot.name, tspot.fee, tspot.otime, tspot.ctime FROM `tspot` JOIN `city` ON 
						   (city.name='$a' AND tspot.cityid=city.cid) WHERE fee<=$b AND _type='$c';";
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Name</p>";
							$result = mysqli_query($conn, $query) or die();
							while($row1 = mysqli_fetch_array($result))
							echo $row1['name']."<br>";
					echo "</div>";
					
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Visiting Fees</p>";
							$result = mysqli_query($conn, $query) or die();
							while($row1 = mysqli_fetch_array($result))
							echo $row1['fee']."<br>";
					echo "</div>";
				
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Open Time</p>";
							$result = mysqli_query($conn, $query) or die();
							while($row1 = mysqli_fetch_array($result))
							echo $row1['otime']."<br>";
					echo "</div>";
					
					echo "<div class='hinfo'>
						  <p style='font-size:40px;'>Close Time</p>";
							$result = mysqli_query($conn, $query);
							while($row1 = mysqli_fetch_array($result))
							echo $row1['ctime']."<br>";
					echo "</div>";
				}
				else
				{
					if($validb==0)
						echo "<p style='font-size:40px;'>Enter Valid Max Price</p>";
					if($validc==0)
						echo "<p style='font-size:40px;'>Enter Valid Description</p>";
				}
			}
		?>
	</body>
</html>
	
	
	