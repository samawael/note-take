<?php
//insert data
require("connection.php");
if ($_POST['add']){
$user=$_POST['name'];
$pass=md5($_POST['pass']) ;
$query="INSERT INTO `accounts`(`id`, `username` , `pass` ) VALUES (NULL , '$user' , '$pass') ";
if(mysqli_query($connection , $query))   echo "data added".mysqli_insert_id($connection);
else "error" ;
}
?> 
<html>
    <head>
        <body>
            <form method="post">
             User Name :    <input name="name"> <br>
             Password :    <input name ="pass" type="password">
             <br>
             <input type="submit" value="add user" name="add">


            </form>



        </body>


    </head>


</html>