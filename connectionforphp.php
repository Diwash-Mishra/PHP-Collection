<?php
$con=mysqli_connect("localhost","root","","bca");
if(!$con){
	echo"connection not made";
}else
{
	echo "connection made";
}
?>