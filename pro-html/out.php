<?php
session_start();
//if(empty($_SESSION['usernmae'])){
    //header('location:login.php?err=Please login first ');
//}
  echo "Thanks , your note saved ^^ " . $_SESSION['username'];
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_destroy();
    header('location:login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Page</title>
  <!-- Add your CSS styles here if needed -->
  <style>
    /* Example CSS styles */
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }
    .logout-btn {
      background-color: #007bff; /* Blue color (you can change this to any shade of blue you prefer) */
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
      background-color: white;
      margin: 25% auto;
      padding: 20px;
      width: 80%;
    }
    .modal-btns {
      text-align: right;
    }
  </style>
</head>
<body>
  <form class="container" method="post">
    <h1>Logout Page</h1>
    <p>Click the button below to logout:</p>
    <button class="logout-btn" onclick="showModal()">Logout</button>
  </form>

  <!-- Logout Confirmation Modal -->
  <div class="modal" id="confirmationModal">
    <div class="modal-content">
      <p>Are you sure you want to logout?</p>
      <div class="modal-btns">
        <button class="logout-btn" onclick="logout()">Logout</button>
        <button onclick="hideModal()">Cancel</button>
      </div>
    </div>
  </div>

  <script>
    // Show the logout confirmation modal
    function showModal() {
      var modal = document.getElementById('confirmationModal');
      modal.style.display = 'block';
    }

    // Hide the logout confirmation modal
    function hideModal() {
      var modal = document.getElementById('confirmationModal');
      modal.style.display = 'none';
    }

    // Logout function (you can customize this function according to your backend implementation)
    function logout() {
      // Add your logout logic here, e.g., redirecting the user to the login page
      alert('You have been successfully logged out.');
      hideModal();
    }
  </script>
</body>
</html>
