<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";

if(!$con = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname)){
    echo "Failed to connect";
}
?>