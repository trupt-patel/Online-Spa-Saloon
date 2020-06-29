	<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$email = $pwd = '';
if(isset($_POST['email'])||isset($_POST['pwd'])){
$email = $_POST['email'];
$pwd = $_POST['password'];}
//$password = MD5($pwd);
$sql = "UPDATE test SET  Password='$pwd' WHERE Email='$email'";
$result = mysqli_query($conn, $sql);
if($result==true)
{
	header("Location: password_thanks.html");
}
else
{
	header("Location: password_error.html");
}
?>