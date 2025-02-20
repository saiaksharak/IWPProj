<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleupdateevent.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

		<div class="header fix">
			<img src="Image\logo.png">
			<form>
				<div class="navbtn">
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="openNav()"></i>
				</div>
			</form>
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
  			<a  class="closebtn" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true" style="font-size: 25px;"></i></a>
			<a href="update_event.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  			<a href="delete_event.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder</i>
			<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder</i>
			<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder</i>
			<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder</i>
			<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder</i>
			<i class="fa fa-clock-o" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder &nbsp; to &nbsp; Placeholder</i>
			<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder</i>
			<div class="btn1" >
				<a href="signout_event.php"><input type="button" name="Signout" value="Sign Out"></a>
			</div>
		</div>
			<div class="heading fix">	
				<label>Update Details</label>
			</div>
		<div class="outerbox">
			<div class="fixedbox">
				<span class="content">
					<h4>Important Note..!!</h4>
					<p><i class="fa fa-times" aria-hidden="true"></i>Password can not Change.</p>
					<p><i class="fa fa-times" aria-hidden="true"></i>Confirm Password can not Change.</p>
					<p><i class="fa fa-times" aria-hidden="true"></i>City can not Change.</p>
					<p><i class="fa fa-times" aria-hidden="true"></i>State can not Change.</p>
					
				</span>
			</div>
			<div class="scrollbox">
				<div class="registerdonor">
					<form action="update_event.php" method="post">
						<div class="login">
							<h3>Login Details</h3>
							<table>
								<tr>
									<td>
										<label>Full Name:-</label>
										<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace" value="Placeholder">
									</td>	
									<td>
										<label>Email Id:-</label>
										<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid" value="Placeholder">
									</td>
								</tr>
								<tr>
									<td>
										<label>Password:-</label>
										<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="Placeholder" readonly>
									</td>
									<td>
										<label>Confirm Password:-</label>
										<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="Placeholder" readonly>
									</td>
								</tr>
							</table>
						</div>
						<div class="event">
							<h3>Event Details</h3>
							<table>
								<tr>
									<td>
										<label>Mobile Number:-</label>
										<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" value="Placeholder">
									</td>
									<td rowspan="2">
										<label>Event Address:-</label>
										<textarea name="event_address" placeholder="---Type---" required>Placeholder</textarea>
									</td>
								</tr>
								<tr>
									<td>
										<label>Event Date:-</label>
										<input type="date" name="event_date" required value="Placeholder">
									</td>
								</tr>
								<tr>
									<td>
										<label>Event Time:-</label>
										<input type="time" name="start_time" class="time" required value="Placeholder"><label class="timelabel">To</label>
										<input type="time" name="end_time" class="time" required value="Placeholder">
									</td>
									<td>
										<label>Pincode:-</label>
										<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid" value="Placeholder">
									</td>	
								</tr>
								<tr>
									<td>
										<label>City:-</label>
										<input type="text" name="city" value="Ahmedabad" readonly value="Placeholder">
									</td>
									<td>
										<label>State:-</label>
										<input type="text" name="state" value="Gujarat" readonly value="Placeholder">
									</td>
								</tr>
							</table>
						</div>
							<div class="other">
							<h3>Other Details(Optional)</h3>
							<table>
								<tr>
									<td>
										<label>Which one is more required ?:-</label>
										<input type="text" list="need" name="need" placeholder="----Select----" value="Placeholder">
										<datalist id="need">
											<option value="Plasama"></option>
											<option value="Blood"></option>
											<option value="Platelates"></option>	
										</datalist>
										<td rowspan="2">
											<label>Why are you plan this Event ?:-</label>
												<textarea name="other_message" placeholder="---Type---">Placeholder</textarea>
										</td>
									</td>	
								</tr>
								<tr>
									<td>
										<label>Event Poster:-</label>
										<input type="file" name="event_poster">
									</td>
								</tr>
							</table>
						</div>
						<span>
							<input type="checkbox" name="terms" id="checkbox" required>
						</span><p>I agree to have my contact details broadcasted to the of B24U.net</p>
						
						<div class="btnn">
							<input type="submit" name="submit" value="Update">
							<input type="reset" name="reset" value="Reset">
						</div>
						</form>
				</div>
			</div>
		</div>
				<!-- Responsive Table-->
			<div class="rregisterdonor">
				<form action="update_event.php" method="post" >
				<div class="rlogin">
					<h3>Login Details</h3>
					<table>
						<tr>
							<td>
								<label>Full Name:-</label>
								<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace" value="Placeholder">
							</td>	
						</tr>
						<tr>
							<td>
								<label>Email Id:-</label>
								<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid" value="Placeholder">
							</td>
						</tr>
						<tr>
							<td>
								<label>Password:-</label>
								<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="Placeholder" readonly>
							</td>
						</tr>
						<tr>	
							<td>
								<label>Confirm Password:-</label>
								<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="Placeholder" readonly>
							</td>
						</tr>
					</table>
				</div>
				<div class="revent">
					<h3>Event Details</h3>
					<table>
						<tr>
							<td>
								<label>Mobile Number:-</label>
								<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" value="Placeholder">
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Address:-</label>
								<textarea name="event_address" placeholder="---Type---" required>
									Placeholder
								</textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Date:-</label>
								<input type="date" name="event_date" required value="Placeholder">
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Time:-</label>
								<input type="time" name="start_time" class="time" required><label class="timelable" value="Placeholder">To</label>
								<input type="time" name="end_time" class="time" required value="Placeholder">
							</td>
						</tr>
						<tr>
							<td>
								<label>Pincode:-</label>
								<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid" value="Placeholder">
							</td>	
						</tr>
						<tr>
							<td>
								<label>City:-</label>
								<input type="text" name="city" value="Vellore" readonly value="Placeholder">
							</td>
						</tr>
						<tr>
							<td>
								<label>State:-</label>
								<input type="text" name="state" value="Tamil Nadu" readonly value="Placeholder">
							</td>
						</tr>
					</table>
				</div>
					<div class="rother">
					<h3>Other Details(Optional)</h3>
					<table>
						<tr>
							<td>
								<label>Which one is more required ?:-</label>
								<input type="text" list="need" name="need" placeholder="----Select----" value="Placeholder">
								<datalist id="need">
									<option value="Plasama"></option>
									<option value="Blood"></option>
									<option value="Platelates"></option>	
								</datalist>
							</td>
						</tr>
						<tr>
							<td >
								<label>Why are you plan this Event ?:-</label>
								<textarea name="other_message" placeholder="---Type---">Placeholder</textarea>
							</td>	
						</tr>
						<tr>
							<td>
								<label>Event Poster:-</label>
								<input type="file" name="event_poster">
							</td>
						</tr>
					</table>
				</div>
				<span>
					<input type="checkbox" name="terms" id="checkbox" required>
				</span><p>I agree to have my contact details broadcasted to the B24U.net</p>
				
				<div class="btnn">
					<input type="submit" name="submit" value="Update">
					<input type="reset" name="reset" value="Reset">
				</div>
				</form>
		</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
jQuery.validator.addMethod("checkemail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
}, 'Please enter a valid email address.');






$(document).ready(function () {

    $('#myform').validate({ 
        rules: {
            fname: {
                required: true,
             	lettersonly:true,
               
            },
            lname:{
            	  required: true,
            	  lettersonly:true,

            },
            email:{
            	required:true,
            	email:true,
            	checkemail:true,
            },
            password:{
            	required:true,
            	minlength:7,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:7,
            	maxlength:15,
            	equalTo: "#password",


            },
            contect_no:{
            	required:true,
            	minlength:10,
            	maxlength:10,
            	digits:true,
            },
            img:{
            	required:true,
            	// uploadfile:true,
            	accept: "jpg,png,jpeg,gif",
            },
        
        },
        messages:{
        	fname:{
        		required:"firstname is required",
        		lettersonly:"enter letters only",
        	},
        	
        	lname:{
        		required:"last name is required",
        		lettersonly:"enter letters only",
        	},
        	email:{
        		required:"email required",
        		email:"enter valid email",
        		checkemail:"enter proper email",

        	},
			password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
			},
			confirm_password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
				equalTo:"password must be same",


			},
			contect_no:{
				required:"contect no is required",
				minlength:"enter contect number 10digits",
				maxlength:"enter contect number 10digits",
				digits:"enter 10 digits",


			},
        	img:{
        		required:"upload image",
        		// uploadfile:"upload image",
        		accept:"upload image only jpg,jpeg,png ",


        	},
        },
    });

});
</script>
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
	function openNav()
		{
  			document.getElementById("mySidenav").style.display = "block";
		}
		function closeNav()
		{
  			document.getElementById("mySidenav").style.display = "none";
		}
</script>
</html>
		