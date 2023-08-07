<?php
//insert data
require("connection.php");
//if ($_SERVER['REQUEST_METHOD']== "POST"){
  //$pss=$_POST['pass'];
  //if ($user=="username" && $pass=="pass")
 // header('location:note.php');
  //else header("location:signup.php?err=invalid data");}
session_start();

if (isset($_POST['add'])) {  
  $user=$_POST['username'];
  $_SESSION['username']=$user;

  $user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $pass = password_hash(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
  header('location:note.php?g= H3ll0 ');


  // Perform input validation
  if (empty($user)) {
      echo "Error: Username cannot be empty.";
  } elseif (!$email) {
      echo "Error: Invalid email address.";
  } elseif (empty($pass)) {
      echo "Error: Password cannot be empty.";
  } elseif (empty($phone)) {
      echo "Error: Phone number cannot be empty.";
  } else {
    $query = "INSERT INTO `accounts`(`id`, `username`, `pass`, `email`, `phone`) 
    VALUES (NULL, '$user', '$pass', '$email', '$phone')";

if (mysqli_query($connection, $query)) {
            echo "Data added. ID: " . mysqli_insert_id($connection);
        } else {
            echo "Error: " . mysqli_error($connection);
        }
  }
}




?>

   





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="descreption" content="this is a note app" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>0d.N0t3</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <header>
      <h1>0d.N0t3</h1>
    </header>

    <section class="container">
      <form id="my-form" method="POST">
        <h1>Add User </h1>
        <div class="msg"></div>
        <div>
          <label>Username</label>
        <input type="text" required placeholder="Username" name="username">
        </div>
        <br>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" placeholder="email" name="email">
        </div>
        <br>
        <div>
          <label>Password</label>
        <input type="password" required placeholder="Write A Complex Password" name="pass">
        </div>
        <br>
        <div>
          <label>Phone number</label>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="phone number" required>

        <br>
          <input class="btn" type="submit" value="submit" name="add">
        <p class="text-center">Already have an account? Please <a href="login.php">Sign In</a></p>
          
      </form>
      

      <ul id="users"></ul>

      <!-- <ul class="items">
        <li class="item">Item 1</li>
        <li class="item">Item 2</li>
        <li class="item">Item 3</li>
      </ul> -->
    </section>
    

  </body>
</html>
