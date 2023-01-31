<?php 
session_start();
include('connection.php');
header('login.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if(!empty($username) && !empty($password) && !is_numeric($username)){

    $query = "insert into loginus (Username, Password, Cpassword) values ('$username', '$password', '$cpassword');";
    $result = mysqli_query($con,$query);

    if($result == 1)
    {
      header('location:login.php');
    }
    else{
      echo "<script> alert('Please enter valid details')</script>";
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
    <div class="center" style="top:53%;">
      
      <h1>Sign Up Here</h1>
      
      <form method="post">
        <div class="txt_field">
        <img class="user" src="icons8-customer-50.png"></img><input type="text" required placeholder="Username" name="username">
          <span></span>
          
        </div>
        <div class="txt_field">
        <img class="lock" src="lock.png"><input type="password" required placeholder="Pasword" name = "password">
          <span></span>
          
        </div>

        <div class="txt_field">
        <img class="lock" src="lock.png"><input type="password" required placeholder="Confirm Pasword" name ="cpassword">
          <span></span>
          
        </div>
        
        <input type="submit" class="btn" value="Sign Up">
        
      </form>
    </div>

  </body>
</html>
