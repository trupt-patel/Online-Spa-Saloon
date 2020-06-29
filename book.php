<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="slide.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body style="background-color: pink">
<nav class="navbar navbar-default">
				<div class="dropdown navbar-right" id="right" >
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	<div class="container-fluid">
			<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;background-color: green" id="mySidebar">
				<button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
				<a href="welcome.php" class="w3-bar-item w3-button" >HomePage</a>
				<a href="price.php" class="w3-bar-item w3-button" >PriceList</a>
				<a href="book.php" class="w3-bar-item w3-button" >Online Book</a>
				<a href="Conditions.php" class="w3-bar-item w3-button">Terms And Condtions</a>
				<a href="Privacy.php" class="w3-bar-item w3-button">Privacy And Policy</a>
				<a href="FeedBack.php" class="w3-bar-item w3-button">FeedBack</a>
				
		</div>		
		<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
			<h1>Saloon And Spa Price List</h1>
			<script>
				function w3_open() 
				{
					document.getElementById("mySidebar").style.display = "block";
				}
				function w3_close() 
				{
					document.getElementById("mySidebar").style.display = "none";
				}
			</script>	
		</div>
</nav>
<div id="frmRegistration" style="background-color: yellow;margin-top: 100px ">
<form class="form-horizontal" action="book_code.php" method="POST">
	<h1>Online Book Appointment</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Full Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Full Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mobile">Phone No:</label>
    <div class="col-sm-6">
      <input type="num" name="mobile" class="form-control" id="mobile" placeholder="Enter 1234567890" maxlength="10" title="Not a Proper Format in mobile number" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male" required>Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female" required>Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Address:</label>
    <div class="col-sm-6">
      <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Event:</label>
    <div class="col-sm-6">
      <input type="text" name="event" class="form-control" id="event" placeholder="Enter Activity" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary" style="margin-left: 100px">Submit</button>
    </div>
    <br><br><br><br>
  </div>
</form>
</div>

</body>
</html>