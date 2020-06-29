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
		</div>	<div>	
		<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button></div>
			<h1>Privacy And Policy</h1>
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
			<text style="color: #cc33ff;font-size: 30px">Disclaimer:<br>
				<text style="color:red;font-size:20px">This document was created as a template for informational purposes only. By using it, you agree to this disclaimer and take into account that Webnode is not responsible for any actions taken or use based on the content of this website. We strongly recommend you to seek legal advice and adjust this document to suit the needs of your business.The online store [….] on the website [….] company ID […] based in […] processes personal data provided by Customer to fulfill, and in addition to confirm Terms and Conditions, to process electronic orders and shipments and for the necessary communication during a period required by law.</text>
			<text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">General provisions:<br>
				<text style="color:red;font-size:20px">1. Personal data controller, in compliance with GDPR (hereinafter referred to as „Regulation“) is […..], company ID [….], based in [….] (hereinafter referred to as „Controller“);<br>2. The contact details of the Controller are: email: [……], tel.: [………];<br>3. Personal data is any information that relates to an identified or identifiable natural person.</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">The source of personal data:<br>
				<text style="color:red;font-size:20px">1. Controller processes personal data obtained with consent from Customer and collected through the contract to purchase and fulfillment of the electronic order created in the online store […].;<br>2. Controller processes only the identifying and contact details of Customer which are necessary for the fulfillment of the contract to purchase;<br>3. Controller processes personal data for the shipping and accounting purposes and for the necessary communication between the contracting parties for the duration required by law. Personal data will not be made public and will not be transferred to other countries. </text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Purpose of data processing:<br>
				<text style="color:red;font-size:20px">Controller processes personal data of the Customer for following purposes:<br>&nbsp;1. Registration on the website [….] in compliance with Chapter 4, Section 2 of GDPR;<br>&nbsp;2. For fulfillment of the electronic order created by Customer (name, address, email, telephone number);<br>&nbsp;3. To observe law and regulations arising from the the contractual relationship between Customer and Controller;<br>&nbsp;4. Personal data is necessary for the fulfillment of contract to purchase. Contract cannot be concluded without the personal data.</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Duration of personal data storage:<br>
				<text style="color:red;font-size:20px">1. Controller stores personal data for the period necessary for fulfillment of rights and obligations arising from the contractual relationship between Controller and Customer and for the duration of 3 years following the conclusion of contractual relationship;<br>2. Controller must delete all personal data after the expiration of the period required for the storage of personal data.</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Recipients and processors of personal data:<br>
				<text style="color:red;font-size:20px">Third parties processing personal data of the Customer are subcontractors of the Controller. Services of these subcontractors are indispensable for the successful fulfillment of the contract to purchase and processing of the electronic order between Controller and Customer.<br>Subcontractors of the Controller are:<br>&nbsp;1) Webnode AG (online store system);<br>&nbsp;2) Shipping company;;<br>&nbsp;3) Google Analytics (website analytics);;</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Rights of Customer:<br>
				<text style="color:red;font-size:20px">In compliance with the Regulation, Customer is entitled to:<br>&nbsp;1. The right of access to personal data;<br>&nbsp;2. The right to rectification of personal data;<br>&nbsp;3. The right to erasure of personal data;<br>&nbsp;4. The right to object to processing of personal data;<br>&nbsp;5. The right to data portability;<br>&nbsp;6. The right to withdraw consent to the processing of personal data in writing or by e-mail sent to: [….];<br>&nbsp;7. the right to lodge a complaint with the supervisory authority in case of suspected breach of the Regulation.</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Security of personal data:<br>
				<text style="color:red;font-size:20px">1. Controller declares to take all technical and organizational precautions necessary for the protection of personal data;<br>2. Controller has taken technical precautions to secure data storage spaces, in particular securing access to the computer with a password, using antivirus software and performing regular maintenance of the computers.</text>
			</text>
			<br><br>
			<text style="color: #cc33ff;font-size: 30px">Final provisions:<br>
				<text style="color:red;font-size:20px">1. By placing an electronic order on the website [….] Customer confirms to be informed about all the conditions of personal data protection and accepts them to the full extent;<br>2. Customer accepts these rules by ticking the checkbox in the order purchase form;<br>3. Controller can update these Rules at any time. New, updated version has to be published on his website.</text>
			</text>
		</div>
</body>
</html>
