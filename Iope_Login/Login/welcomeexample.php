<!-- <?php 
session_start();
include('connection.php');
if(true){
    echo "<script> alert(' Login Sucessfully') </script>";
}

if(!isset($_SESSION['user'])){
    header('loaction: login.php');
}
?> -->

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
      <img class="icon" src="icons8-user-50.png"></img> 
      <a class="username" style="font-size: 16.8px;"><?php echo $_SESSION['user']; ?></a>
      </div>
      <ul class="menu-list">
 
        <li><a href="welcome.php">Home</a></li>
        <li ><a href="logout.php">Log-out</a></li>
      </ul>

    </div>
    
</nav>
</body>
</html>
