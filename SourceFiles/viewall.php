<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS\viewall.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
    <div class="header fix">
      <img src="Image\logo.png">
      <form>
        <div class="navbtn">
          <a href="login_donor.php"><input type="button" name="submit" value="Login"></a>
          <a href="registar_donor.php"><input type="button" name="reset" value="Become Donor"></a>
          <i class="fa fa-bars fa-2x " aria-hidden="true" ></i>
        </div>
      </form>
    </div>
      <div class="nav fix">
        <ul>
        <li class="active"><a href="index.php" >Home</a></li>
        <li><a href="blood_tips.php">Blood Tips</a></li>
        <li><a href="">Request Portal &nabla;</a>
          <ul>
            <li><a href="request_blood.php">Request Blood</a></li>
            <li><a href="request_blood.php">Show Pending Request</a></li>
          </ul>
        </li>
        <li><a href="">Event Portal &nabla;</a>
          <ul>
            <li><a href="registar_event.php">Register as a Event</a></li>
            <li><a href="login_event.php">Login as a Event</a></li>
          </ul>
        </li>
        <li><a href="contribute.php">Contribute</a></li>
        <li><a href="">More &nabla;</a>
          <ul>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="get_in_touch.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="heading fix"> 
      <label>Recent Event</label>
    </div>
    <div class="eventobox">
 
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
