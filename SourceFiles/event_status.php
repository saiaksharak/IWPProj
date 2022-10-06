<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleeventstatus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
		<div class="header fix">
			<img src="Image\logo.png">
				<div class="navbtn">
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="openNav()"></i>
				</div>
		</div>
		<div class="nav fix">
			<ul>
				<li class="active"><a href="event_status.php">Event Status</a></li>
				<li><a href="donor_entry.php" >Donor Entry</a></li>
				<li><a href="e_blood_tips.php">Blood Tips</a></li>
				<li><a href="e_contribute.php">Contribute</a></li>
				<li><a href="e_about_us.php">About Us</a></li>
				<li><a href="e_get_in_touch.php">Contact Us</a></li>
			</ul>
		</div>
		<div id="mySidenav" class="sidenav">
  			<a  class="closebtn" onclick="closeNav()">&times;</a>
  			<a href="update_event.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  			<a href="delete_event.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;
			<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;
			<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;
			<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;
			<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;
			<i class="fa fa-clock-o" aria-hidden="true" style="color:white;">
			&nbsp;
			<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;
			<div class="btn1" >
				<a href="signout_event.php"><input type="button" name="Signout" value="Sign Out"></a>
			</div>
		</div>
			<div class="heading fix">	
				<label>Event Status</label>
			</div>
		<div class="registerdonor">
			<form>
				<div class="login">
					<h3>Event Information</h3>
					<table>
						<tr>
							<td>
								<label>Event Id :-</label>
							</td>	
							<td>
								<label class="sinfo"> PlaceHolder</label>	
							</td>
						</tr>
						<tr>
							<td>
								<label>Full Name:-</label>
							</td>	
							<td>
								<label class="sinfo">PlaceHolder</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Date:-</label>
							</td>	
							<td>
								<label class="sinfo">PlaceHolder</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Time:-</label>
							</td>	
							<td>
								<label class="sinfo">PlaceHolder&nbsp; to &nbsp; PlaceHolder ?></label>
							</td>
						</tr>
					</table>
				</div>
			</form>
	</div>
	<div class="registerdonor eventinfo">
			<form>
				<div class="login">
					<h3>Donate Information</h3>
					<table>
						<tr>
							<td>
								<label>Blood Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
									
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Pletlets Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
								PlaceHolder
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Plasama Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
								PlaceHolder
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Total Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
								PlaceHolder
								</label>
							</td>
						</tr>
					</table>
				</div>
			</form>
	</div>
		<div class="box1">
			<h3>Blood Status</h3>
			<div class="circle">
				<div class="circle1">
					<label class="cinfo">
					PlaceHolder
					</label>
				</div>
				<div class="label1">
					<h4>A+</h4>
				</div>
				<div class="circle2">
					<label class="cinfo">
					PlaceHolder
					</label>
				</div>
				<div class="label2">
					<h4>A-</h4>
				</div>
				<div class="circle3">
					<label class="cinfo">
					PlaceHolder
					</label>
				</div>
				<div class="label3">
					<h4>B+</h4>
				</div>
				<div class="circle4">
					<label class="cinfo">
					PlaceHolder
					</label>
				</div>
				<div class="label4">
					<h4>B-</h4>
				</div>
				<div class="circle5">
					<label class="cinfo">
					PlaceHolder
					</label>
				</div>
				<div class="label5">
					<h4>O+</h4>
				</div>
				<div class="circle6">
					<label class="cinfo">
					PlaceHolder
					</label>
				</div>
				<div class="label6">
					<h4>O-</h4>
				</div>
			</div>
		</div>
		

	</body>
	<script type="text/javascript">
	function openNav()
		{
  			document.getElementById("mySidenav").style.display = "block";
		}
		function closeNav()
		{
  			document.getElementById("mySidenav").style.display = "none";
		}
	function share()
	{
		var a =document.getElementById("f");
		var b=document.getElementById("g");
		var c=document.getElementById("i");
		var d=document.getElementById("y");
		if (a.style.display === "none")
		{
			a.style.display="block";
			b.style.display="block";
			c.style.display="block";
			d.style.display="block";
		}
		else
		{
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
	}
</script>
</html>