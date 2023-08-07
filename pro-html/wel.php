<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="descreption" content="this is a note app" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>0d.N0t3</title>
    <style>
     body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}



#main {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
}

form {
  padding: 20px;
}

.input-container {
  margin-bottom: 15px;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  transition: border-color 0.3s ease-in-out;
}

input:focus {
  border-color: #007bff;
}

button.btn {
  display: block;
  width: 100%;
  margin: 10px 0;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

button.btn:hover {
  background-color: #0056b3;
}

</style>
    
  </head>
  <body>
    <div id="header">
      <h1>0d.N0t3</h1>
    </div>
    <div id="main">
      <h1>Welcome to 0d.N0t3</h1>
      <div class="button-container">
        <a href="login.php"><button class="btn">log in</button></a>
        <a href="signup.php"><button class="btn">Sign up </button></a>
      </div>
    </div>
  </body>
</html>