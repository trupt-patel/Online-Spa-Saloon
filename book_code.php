<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $mobile = $gender = $email = $address = $event = '';

$fname = $_POST['firstname'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$event = $_POST['event'];
//$password = MD5($pwd);

$sql = "INSERT INTO booking (Name,Phone,Gender,Email,Address,Event) VALUES ('$fname','$mobile','$gender','$email','$address','$event')";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	header("Location: book_thanks.html");
}
else
{
	header("Location: book error.html ");
}
?>