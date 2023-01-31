<?php 

 $dbhost = "localhost";
 $dbusername = "root";
 $dbpass = "";
 $dbname = "contactus";

 if(!$conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname)){
    die("Failed to connection");
 }
?>