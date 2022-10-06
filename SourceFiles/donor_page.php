<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styledonorpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
	<div class="header fix">
			<img src="Image\logo.png">
				<div class="navbtn">
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="openNav()"></i>
				</div>
	</div>
	<div class="nav fix">
			<ul>
			<li class="active"><a href="donor_page.php" >Donor History</a></li>
			<li><a href="health_report.php">Health Report</a></li>
			<li><a href="pending_request_donor.php">Pending Request</a></li>
			<li><a href="d_blood_tips.php">Blood Tips</a></li>
			<li><a href="d_contribute.php">Contribute</a></li>
			<li><a href="">More &nabla;</a>
					<ul>
						<li><a href="d_about_us.php">About Us</a></li>
						<li><a href="d_get_in_touch.php">Contact Us</a></li>
					</ul>
			</li>
		</ul>
	</div>
	<div class="heading fix">	
		<label>Donor History</label>
	</div>
	<div class="box">
		<h3>Donate History </h3>
		<form action="donor_history.php" method="post">
			<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
			<input type='text' list='select' name='select' placeholder='----Select----' required  autocomplete="off">
			<datalist id='select'>
				<option value='All'></option>
				<option value='Event'></option>
				<option value='Patient'></option>	
			</datalist><br>
			<div class="btn" >
				<a href=""><input type="submit" name="submit" value="Show Details"></a>
			</div>
		</form>
   	</div>
   	<div class="registerdonor">
			<form>
				<div class="login">
					<h3>Short Information</h3>
					<table>
						<tr>
							<td>
								<label>Donor Id:-</label>
							</td>	
							<td>
								<label class="sinfo"></label>			
							</td>
						</tr>
						<tr>
							<td>
								<label>Donor Name:-</label>
							</td>	
							<td>
								<label class="sinfo">PlaceHolder</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Total Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
									
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Last Donation:-</label>
							</td>	
							<td>
								
							</td>
						</tr>
					</table>
				</div>
			</form>
	</div>
	<div id="mySidenav" class="sidenav">
  		<a  class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="update_donor.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  		<a href="delete_donor.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-venus-mars" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-tint" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;
		</i>
		<div class="btn btn1" >
			<a href="signout_donor.php"><input type="button" name="Signout" value="Sign Out"></a>
		</div>
	</div>
	<div class="box1">
		<h3>Current Status</h3>
	<div class="circle">
		<div class="circle1">
			<label class="cinfo">
			
			</label>
		</div>
		<div class="label1">
			<h4>Attend Event</h4>
		</div>
		<div class="circle2">
			<label class="cinfo">
			
			</label>		
		</div>
		<div class="label2">
			<h4>Blood Donation</h4>
		</div>
		<div class="circle3">
			<label class="cinfo">
			
			</label>
		</div>
		<div class="label3">
			<h4>Plasama Donation</h4>
		</div>
		<div class="circle4">
			<label class="cinfo">
			
			</label>
		</div>
		<div class="label4">
			<h4>Pletlets Donation</h4>
		</div>
	</div>
</div>
</body>
	<script>
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