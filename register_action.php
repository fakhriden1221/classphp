<?php 
 include ("db_config/connect.php");


if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['confirm_password'];
    
    
    


    if ($password == $repeatpassword) {
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name','$email', '$password')";

        if (mysqli_query($conn, $sql)) {
                echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/additional_info.php?record=1";</script>';

            
        }
    } else {
            echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/register.php?error=1";</script>';

    }
}
