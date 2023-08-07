<?php
//database connection 
$host= 'localhost';
$username="sama";
$pass="smsm";
$database="users";
$connection=mysqli_connect($host,$username,$pass,$database);
if($connection)  echo "connected";
else die ("database error :" .mysqli_connect_error());

?>