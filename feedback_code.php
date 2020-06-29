<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $email =$feed = '';

$fname = $_POST['firstname'];
$email = $_POST['email'];
$feed = $_POST['feed'];

//$password = MD5($pwd);

$sql = "INSERT INTO feedback (Name,Email,FeedBack) VALUES ('$fname','$email','$feed')";
$result = mysqli_query($conn, $sql);
if($sql == true)
{
	header("Location: feedback_thanks.html");
}

?>