<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylerequestblood.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
				<label>Request Blood</label>	
			</div>
			
		<div class="outerbox">
			<div class="fixedbox">
				<span class="content">
					<h4>Hello, Friend!</h4>
					<p>Enter your personal details and start your journey with us</p>
				</span>
			</div>
			<div class="scrollbox">
				<div class="requestblood">
					<form id="myform" action="request_blood.php" method="post">
						<div class="patient">
							<h3>Patient Details</h3>
							<table>
								<tr>
									<td>
										<label>Patient Name:-</label>
										<input type="text" name="patient_name" pattern="[A-z ]+$" title="Use only character & white space" required>
									</td>	
									<td>
										<label>Hospital Name:-</label>
										<input type="text" name="hospital_name" pattern="[A-z ]+$" title="Use only character" required>
									</td>
								</tr>
								<tr>
									<td rowspan="3">
										<label>Hospital Adddress:-</label>
										<textarea name="hospital_address" placeholder="---Type---" required class="hospital"></textarea>
									</td>
									<td>
										<label>Doctor Name:-</label>
										<input type="text" name="doctor_name" pattern="[A-z ]+$" title="Use only character" required>
									</td>
								</tr>
								<tr>
									<td>
										<label>Blood Group:-</label>
										<input type="text" list="bloodgroup" name="blood_group" placeholder="----Select----" required>
										<datalist id="bloodgroup">
											<option value="A+"></option>
											<option value="A-"></option>
											<option value="AB+"></option>
											<option value="B+"></option>
											<option value="B-"></option>
											<option value="O+"></option>
											<option value="O-"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>
										<label>City:-</label>
										<input type="text" name="city" value="Ahmedabad" readonly>
									</td>
								</tr>
							</table>
						</div>
						<div class="contact">
							<h3>Contact Details</h3>
							<table>
								<tr>
									<td>
										<label>Contact Name:-</label>
										<input type="text" name="contact_name" pattern="[A-z ]+$" title="Use only character" required>
									</td>	
									<td>
										<label>Contact Number:-</label>
										<input type="text" name="contact_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid">
									</td>
								</tr>
								<tr>
									<td>
										<label>Contact Mail-Id:-</label>
										<input type="email" name="contact_mail_id" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid">
									</td>
									<td rowspan="2">
										<label>Other Message:-</label>
										<textarea name="other_message" placeholder="---Type---"></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<label>When Required ?</label>
										<input type="date" name="required_date" required>
									</td>
								</tr>
							</table>
						</div>
						<span>
							<input type="checkbox" name="terms" id="checkbox" required>
						</span><p>I agree to have my contact details broadcasted</p>
						
						<div class="btn">
							<input type="submit" name="submit" value="Submit Request">
							<input type="reset" name="reset" value="Reset Request">
						</div>
						</form>
					</div>
			</div>
		</div>			

				<!--Responsive Table-->
				<div class="rrequestblood">
				<form id="myform" action="request_blood.php" method="post">
				<div class="rpatient">
					<h3>Patient Details</h3>
					<table>
						<tr>
							<td>
								<label>Patient Name:-</label>
								<input type="text" name="patient_name" required pattern="[A-z ]+$" title="Use only character & whitespace">
							</td>	
						</tr>
						<tr>
							<td>
								<label>Hospiatal Name:-</label>
								<input type="text" name="hospital_name" required pattern="[A-z ]+$" title="Use only character & whitespace">
							</td>
						</tr>
						<tr>
							<td>
								<label>Hospital Adddress:-</label>
								<textarea name="hospital_address" placeholder="---Type---" required></textarea>
							</td>
						</tr>
						<tr>	
							<td>
								<label>Doctor Name:-</label>
								<input type="text" name="doctor_name" required pattern="[A-z ]+$" title="Use only character & whitespace">
							</td>
						</tr>
						<tr>
							<td>
								<label>Blood Group:-</label>
								<input type="text" list="bloodgroup" name="blood_group" placeholder="----Select----" required>
								<datalist id="bloodgroup">
									<option value="A+"></option>
									<option value="A-"></option>
									<option value="AB+"></option>
									<option value="B+"></option>
									<option value="B-"></option>
									<option value="O+"></option>
									<option value="O-"></option>
								</datalist>
							</td>
						</tr>
						<tr>
							<td>
								<label>City:-</label>
								<input type="text" name="city" value="Ahmedabad" readonly>
							</td>
						</tr>
					</table>
				</div>
				<div class="rcontact">
					<h3>Contact Details</h3>
					<table>
						<tr>
							<td>
								<label>Contact Name:-</label>
								<input type="text" name="contact_name" required pattern="[A-z ]+$" title="Use only character & whitespace">
							</td>	
						</tr>
						<tr>
							<td>
								<label>Contact Number:-</label>
								<input type="text" name="contact_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid">
							</td>
						</tr>
						<tr>
							<td>
								<label>Contact Mail-Id:-</label>
								<input type="email" name="contact_mail_id" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid">
							</td>
						</tr>
						<tr>
							<td>
								<label>Other Message:-</label>
								<textarea name="other_message" placeholder="---Type---"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Whem Required ?</label>
								<input type="date" name="required_date" required>
							</td>
						</tr>
					</table>
				</div>

				<span>
					<input type="checkbox" name="terms" id="checkbox" required>
				</span><p>I agree to have my contact details saved</p>
				
				<div class="btn">
					<input type="submit" name="submit" value="Submit Request">
					<input type="reset" name="reset" value="Reset Request">
				</div>
				</form>
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
