<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
body{background-image:url(Images/Oralando5.jpg);}

</style>
<link rel="stylesheet" type="text/css" href="Css/design.css">
<link rel="stylesheet" type="text/css" href="Css/Edit.css">
</head>

<body>
	<table>
		<tr>
			<td>
				<img src="Images/marina_logo.png" id="bg0">
			</td>
			
			<td >
			
			<a href="Home.html" id="hyp1">
				<div class="dropdown">
					<font id="f1">&nbsp&nbsp<span>HOME</span>&nbsp&nbsp|</font></a>
					<div class="dropdown-content">
						<b>Wel Come to Marina Bay</b>
						<img src="Images/15197599.jpg" id="im2">
					</div>
				</div>
			<a href="Entertainment.html" id="hyp1">
				<div class="dropdown">
					<font id="f1">&nbsp&nbsp<span>ENTERTAINMENT</span>&nbsp&nbsp|</font></a>
					<div class="dropdown-content">
						<table>
							<tr>
								<td>
									View All Shows
									<img src="Images/7028819-madagascar-3-wallpaper.jpg" id="im1">
								</td>
								<td>
									Musical Shows
									<img src="Images/4087344413_a2558bec33_o.jpg" id="im1">
								</td>
							</tr>
							<tr>
								<td>
									Bat Snooker Club
									<img src="Images/taylor_davis.jpg" id="im1">
								</td>
								<td>
									Join the Part
									<img src="Images/how-to-attract-girls-in-clubs-photo.jpg" id="im1">
								</td>
							</tr>
						</table>
					</div>
				</div>
			<a href="Facilities.html" id="hyp1">
				<div class="dropdown">
					<font id="f1">&nbsp&nbsp<span>FACILITY</span>&nbsp&nbsp|</font></a>
					<div class="dropdown-content">
						<table>
							<tr>
								<td>
									Fastest Transport 
									<img src="Images/6487161_orig.jpg" id="im1">
								</td>
								<td>
									Buy Some Items
									<img src="Images/shop.jpeg" id="im1">
								</td>
							</tr>
							<tr>
								<td>
									Enjoy with Meals & Drinks
									<img src="Images/oasis_large.jpg" id="im1">
								</td>
								<td>
									Kindest Servants
									<img src="Images/100785182-140668181.530x298.jpg" id="im1">
								</td>
							</tr>
						</table>
					</div>
				</div>	
			<a href="About us.html" id="hyp1">
				<div class="dropdown">
					<font id="f1">&nbsp&nbsp<span>ABOUT US</span>&nbsp&nbsp|</font></a>
					<div class="dropdown-content">
						<b>Contact</b><br>
						
							<b>Owner & Managing Director</b><br>
									T.P NO: 0064 236 015</li><br><br>
							<b>Assistan Managing Director</b><br>
									T.P NO: 0064 245 044</li><br><br>
							<b>Supervisor</b><br>
									T.P NO: 0064 676 043</li><br><br>
							<b>Receptionist</b><br>
									T.P NO: 0064 896 015</li><br>
						
					</div>
				</div>	
			<a href="Form.php" id="hyp1">
				<div class="dropdown">
					<font id="f1">&nbsp&nbsp<span>ONLINE BOOKING</span>&nbsp&nbsp</font></a>
				</div>	
			</td>
			<td>	
				<img src="Images/Singapore-city-skyline destination-banner.jpg" id="bg1">
			</td>
		</tr>
	</table>

	<?php
	$host = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "mydb";

	$conn = mysqli_connect($host,$uname,$pwd,$dbname);

   if(!empty($_POST['file'])){
	$s = "INSERT INTO marina(first_name,last_name,age,gender,contact_num,room_type) VALUE('$_POST[fn]','$_POST[ln]','$_POST[age]','$_POST[gen]','$_POST[cn]','$_POST[rt]')";
	mysqli_query($conn,$s);
	}
	?>

	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	<table>
	<tr>
	<td width="400" valign="top">
		</br>
		</br>
		<a href="Form.php"><font color="white">New Online Booking</font></a></br>
		<a href="Preview.php"><font color="white">Preview Existing Bookings</font></a>

	</td>
	<td>
	
			<?php
	$host = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "mydb";

	$conn = mysqli_connect($host,$uname,$pwd,$dbname);

	$sql2 = "SELECT * FROM marina";
	$res = mysqli_query($conn,$sql2);

	echo "<table border = '1' bgcolor = 'white'>";
	echo "<tr>";
	echo "<th>First Namee</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Contact Number</th><th>Room Type</th>";
	echo "</tr>";

	while($row = mysqli_fetch_array($res)){
		echo "<tr>";
		echo "<td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['age']."</td><td>".$row['gender']."</td><td>".$row['contact_num']."</td><td>".$row['room_type']."</td>";
		echo "</tr>";
	}

	echo "</table>";

	?>

	</td>
	<td></td>
	</tr>
	</table>
	</form>

</body>
</html>