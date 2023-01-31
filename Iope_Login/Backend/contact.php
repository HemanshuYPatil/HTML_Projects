<?php 
 include('connect.php');

 if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email) && !empty($message) && !empty($phone)){

        $query = "insert into contact ( Name, Email, phone_number, Message) values('$name', '$email', '$phone', '$message');";

        mysqli_query($conn,$query);

        if(!empty($name) && !empty($email) && !empty($message) && !empty($phone)){
            echo "<script>alert('Thank you for contact us')</script>";
            
        }
    }
    
}
?>