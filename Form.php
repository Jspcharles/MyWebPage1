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
		</br>
		</br>
	<td width="400" valign="top">
		<a href="Form.php"><font color="white">New Online Booking</font></a></br>
		<a href="Preview.php"><font color="white">Preview Existing Bookings</font></a>
	</td>
	<td>
		<table align="center">
			<tr>
				<td height="50"><font color="white">First Name</font></td>
				<td height="50"><input type="text" name="fn"></input></td>
			</tr>
			<tr>
				<td height="50"><font color="white">Last Name</font></td>
				<td height="50"><input type="text" name="ln"></input></td>
			</tr>
			<tr>
				<td height="50"><font color="white">Age</font></td>
				<td height="50"><input type="number" name="age"></input></td>
			</tr>
			<tr>
				<td height="50"><font color="white">Gender</font></td>
				<td height="50"><input type="radio" name="gen"><font color="white"><font color="white">Male</font></input></br>
				<input type="radio" name="gen"><font color="white">Female</font></input></td>
			</tr>
			<tr>
				<td height="50"><font color="white">Contact Number</font></td>
				<td height="50"><input type="number" name="cn"></input></td>
			</tr>
			<tr>
				<td height="50"><font color="white">Room Type</font></td>
				<td height="50"><input type="radio" name="rt"><font color="white">AC</font></input></br>
				<input type="radio" name="rt"><font color="white">Non AC</font></input></td>
			</tr>
			<tr>
				<td height="50"></td>
				<td height="50"><input type="submit" name="file"></td>
			</tr>
		</table>
	</td>
	<td></td>
	</tr>
	</table>
	</form>

</body>
</html>