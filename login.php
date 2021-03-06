<?php

$admin = password_hash("admin", PASSWORD_BCRYPT);

$verify = password_verify("admin",'$2y$10$Qv7d4EXrDPVbXzzmu/5G8ubljPzjwDdwqnoq8nJh.Spq9KLRqUg/O');

var_dump($verify);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/cafe.css" />
  <!--Google fonts -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gugi&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&family=Sofia&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
  <div class="login-container">
    <div class="container">
      <div class="logo">Cafeteria</div>
      
      <form method="post" action="submitLogin.php">
        <h1>Login</h1>
        <div>
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          <div>"<?php 
              echo $_GET["errors"]? json_decode($_GET["errors"],true)["email"]:'' ; 
          ?>"</div> <br>
        </div>
        <div
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          <div>"<?php 
              echo $_GET["errors"]? json_decode($_GET["errors"],true)["password"]:'' ; 
          ?>"</div> <br>
        </div>
        <div class="forget">
         <a href="">Forget Password!</a>
        </div>
        <button type="submit" class="submit" name="login">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>