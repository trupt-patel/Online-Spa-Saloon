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
$sql = "SELECT * FROM test WHERE Email='$email' AND Password='$pwd'";
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
	header("Location: welcome.php");
}
else
{
	header("Location:login error.html ") ;
}
?>