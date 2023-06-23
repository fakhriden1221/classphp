<?php 
 include ("db_config/connect.php");


if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    
    
    


    if ($password == $repeatpassword) {
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name','$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            header("location:additional_info.php?record=1");
            
        }
    } else {
        header("location:register.php?error=1");
    }
}
