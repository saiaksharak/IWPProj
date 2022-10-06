<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styledonorentry.css">
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
				<li><a href="event_status.php">Event Status</a></li>
				<li class="active"><a href="donor_entry.php" >Donor Entry</a></li>
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
				<label>Donor Entry</label>
			</div>
		<div class="box">
			<h3>Donor Entry</h3>
			<div class="addinfo">
				<i class="fa fa-id-card" aria-hidden="true"></i>
				<form action="donor_entry.php" method="post">
					<input type="number" name="donor_id" placeholder="Enter Donor ID " required autocomplete="off">
					<span class="btn">
						<a><input type="submit" name="submit" value="Add"></a>
					</span>
				</form>
			</div>
				<table border="1">
				<th>Donor ID No.</th>
				<th>Donor Name</th>
				<th>Blood Group</th>
				<th>Contact Number</th>
				
			

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