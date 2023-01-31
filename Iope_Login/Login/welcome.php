<?php 
session_start();
include('connection.php');
if(true){
    echo "<script> alert(' Login Sucessfully') </script>";
}


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> -->
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="wrapper">
	<div class="navbar">
		<div class="logo">
			<a href="#">I.O.P.E</a>
		</div>
		<div class ="contents" style="text-decoration:none;cursor:pointer;display: inline-flex;justify-content: space-between;align-items: center;margin-right: 42rem;font-size: 19px;margin-left: -8rem;padding: 5px;">
			<a href="#"style="text-decoration: none; color:white" onMouseOver = "this.style.color = 'cyan'"onMouseOut = "this.style.color = 'white'">Home&nbsp;&nbsp;&nbsp;</a>
			<a href="#"style="text-decoration: none; color:white" onMouseOver = "this.style.color = 'cyan'"onMouseOut = "this.style.color = 'white'">About&nbsp;&nbsp;&nbsp;</a>
			<a href="#"style="text-decoration: none; color:white" onMouseOver = "this.style.color = 'cyan'"onMouseOut = "this.style.color = 'white'">Contact&nbsp;&nbsp;</a>
		</div>

		<div class="nav_right">
			
			<ul>
				
				<li class="nr_li dd_main">
					<img src="icons8-user-50.png" style="margin-left: -33px;margin-bottom: -24px;"></img>
                    <p style="word-spacing:3px;"><?php echo $_SESSION['user']; ?>&nbsp;<i class="arrow down"></i></p>
					<div class="dd_menu">
						
						<div class="dd_right">
							<ul>
								<li style="color: white;"><a href="user.php">User</a></li>
								<li style="color: white;"><a href="logout.php">Logout</a></li>
								
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>	
<script>
    var dd_main = document.querySelector(".dd_main");

dd_main.addEventListener("click", function(){
    this.classList.toggle("active");
})
</script>
</body>
</html>