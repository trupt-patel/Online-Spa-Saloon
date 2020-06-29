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
				<div class="dropdown navbar-right" id="right">
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
			<h1>Terms And Conditions</h1>
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
			<div style="background-color: pink">
			<text style="color: #cc33ff;font-size: 30px">Disclaimer:
				<text style="color:red;font-size:20px">As an e-shop owner you should publish Terms and Conditions on your website. The document should specify the relationship between you and your customer, explain your refund and withdrawal policy. There are many sample templates for Terms and Conditions to be found online, just search for „Terms and Conditions generator“. In any case, we strongly recommend you to seek legal advice and adjust the template to suit the needs of your business.</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Password Requirements:
				<text style="color:red;font-size:20px">Password Length 6 to 20 then Atleast one Capital Letter,Small Letter,Numeric" <br>
					<text style="color:blue;font-size:26px">like Abcabc1234, QkdnvdkvnR12 etc...</text>
				</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Lost or Forgot Password:
				<text style="color:red;font-size:20px">You have don't konwn your password then fill the feedback form in feedback in write lost your password or go to the Details Of Admin in my mobile number or my mail please contact me.</text>
			</text>
			<br><br>
		</div>
</text>
</body>
</html>