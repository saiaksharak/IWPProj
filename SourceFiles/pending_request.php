<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylependingrequest.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.nav > ul > li:nth-child(4)
		{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
		
			<div class="heading fix">	
				<label>Show Pending Request</label>
			</div>
		<div class="box">
			<h3>Pending  Request</h3>
			<table border="1">
				<th>Patient Id.</th>
				<th>Patient Name</th>
				<th>Blood Group</th>
				<th>Required Date</th>
				<th>Hospital Name</th>
				<th>Hospital Address</th>
				<th>Contact Name</th>
				<th>Contact Number</th>
				<th>City</th>
				
			</table>
   		</div>
   		
	</body>
	<script type="text/javascript">
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