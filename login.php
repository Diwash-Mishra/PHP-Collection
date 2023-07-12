<?php
require "connectionforphp.php";
if(isset($_POST['submit'])){
	$Email=$_POST['Email'];
	$password=$_POST['password'];
	$sql="select * from user where Email='$Email' and Password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_num_rows($result);
	if($row==1){
		header("location: home.php");
	}
	else
	{
		echo"Username password doesnot match";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post" accept-charset="">
	<input type="Email" name="Email" placeholder="Email">
	<br>
	<input type="password" name="password" placeholder="password">
	<br>
	<input type="submit" name="submit">
	
</form>
</body>
</html>