<?php
session_start();

if(isset($_SESSION['username'])){
  header('location:welcome.php');
  exit;
}
include('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password) && !is_numeric($username)){

    $query = "select * from loginus where Username = '$username' && Password = '$password';";

    $result = mysqli_query($con,$query);
    $row = mysqli_num_rows($result);

    if($row == 1){ 
        $_SESSION['user'] = $username;
        $_SESSION['loggedin'] = true;
        header('location: welcome.php');
    }
    else{
        echo "<script> alert(' Username and Pasworrd is Incorrect') </script>";
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">I.O.P.E</a>
      </div>
      <ul class="menu-list">
      <li><a href="../iope.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li ><a href="signup.php">Sign up</a></li>
      </ul>

    </div>
    
</nav>
   
    <div class="center" style="height: 25rem;">

      <h1>Login Here</h1>
      
      <form method="post">
        <div class="txt_field">
        <img class="user" src="icons8-customer-50.png"></img><input type="text" required placeholder="Username" name="username">
          <span></span>
          
        </div>
        <div class="txt_field">
        <img class="lock" src="lock.png"></img><input type="password" required placeholder="Pasword" name = "password">
          <span></span>
          
        </div>
        
        <input type="submit" class="btn" value="Login" style="margin-top: 1rem;">
 
      </form>
    </div>

  </body>
</html>
