<?php
session_start();
require("connection.php");
//check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
  
	// Retrieve user's hashed password from the database
	$sql = "SELECT pass FROM accounts WHERE username = ?";
	$stmt = $connection->prepare($sql);
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$result = $stmt->get_result();
  
	if ($result->num_rows == 1) {
	  $row = $result->fetch_assoc();
	  $hashedPassword = $row["pass"];
  
	  // Verify the password
	  if (password_verify($password, $hashedPassword)) {
		// Set a session variable to mark the user as logged in
		$_SESSION["loggedin"] = true;
		$_SESSION["username"] = $username;
  
		// Redirect to a protected page
		header("Location: ./note.php?g=H3ll0 ");
		exit;
	  } else {
		

		$loginError = "Invalid username or password.";
		
	  }
	} else {
		
		$loginError = "Invalid username or password.";
	}
  }
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="descreption" content="this is a note app" />
    <title>0d.N0t3</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Welcome back to 0d.N0t3</h1>
	  
    </header>

    <section class="container" >
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<form id="my-form" method="post"  >
        <h10>insert your username and password please</h10> 
        <div class="msg"></div>
        <div>
        <input class="text" type="text" placeholder="username" name="username" required >
        <br>
        

        <input class="text" type ="password" placeholder="password" name="password" required>
        
        <input class="btn" type="submit" value="submit" name="add">
        <p class="text-center">Don't have an account? Please <a href="signup.php">Sign Up</a></p>

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