<!-- Into this file, we create a layout for registration page. -->
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
      <h1>FeedBack</h1>
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

<body style="background-color: pink">
<div id="frmRegistration" style="background-color: yellow;margin-top: 100px ">
<form class="form-horizontal" action="feedback_code.php" method="POST">
	<h1>FeedBack</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Full Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">FeedBack:</label>
    <div class="col-sm-6">
      <input type="text" name="feed" class="form-control" id="feed" placeholder="Enter FeedBack" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
    <br><br><br><br>
  </div>
</form>
</div>
</body>