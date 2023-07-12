<?php
require "connectionforphp.php";

if(isset($_POST['submit'])){
$Name= $_POST['Name'];
$Address= $_POST['Address'];
$Dateofbirth= $_POST['Dateofbirth'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];
$Repassword= $_POST['Repassword'];

$sql="insert into user(Name,Address,Dateofbirth,Email,Password,Repassword) values('$Name','$Address','$Dateofbirth','$Email','$Password','$Repassword')";
$result=mysqli_query($con,$sql);
if($result==1){
	echo "Data insert";
}else{
	echo "data not insert";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
     <h1>Registration Form</h1>

     <div>
        <div>
            Name: <input type="text" name="Name" placeholder="Name" >
        </div>
        <br>
        <div>
            Address: <input type="text" name="Address" placeholder="Address" >
        </div>
         <br>
        <div>
            Date of birth: <input type="date" name="Dateofbirth" placeholder="Dateofbirth" >
         </div>
      <br>
        <div>
            Email: <input type="email" name="Email" placeholder="Email">
        </div>
        <br>
        <div>
        Password: <input type="password" name="Password" placeholder="Password">
        </div>
        <br>
        <div></div>
        Re-password: <input type="password" name="Repassword" placeholder="Re-password">
        </div>
        <br>
		 <br>
            <div>
                I agree with terms and condition: <input type="checkbox">
            </div>
            <br>
        <input type="submit" name="submit"/>   
        </form>
</body>
</html>