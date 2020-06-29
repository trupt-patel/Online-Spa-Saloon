<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$sql = "SELECT * FROM test WHERE Email='$email'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: register error.html");
}
else
{
	$sql = "INSERT INTO test (Fistname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$pwd')";
	$result = mysqli_query($conn, $sql);
	if($sql == true)
	{
		header("Location: Login.php");
	}
}
?>