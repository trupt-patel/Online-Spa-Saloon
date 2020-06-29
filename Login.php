<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>
<body style="background-color: pink">
<div id="frmRegistration"  style="background-color: yellow;margin-top: 100px">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>User Login</h1>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
      <a href="Password.php" style="font-size: 15px">Lost Your Password?</a>
    </div>
    <br><br><br><br>
  </div>
</form>
</div>
</body>