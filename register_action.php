<?php 
 include ("db_config/connect.php");


if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $jobPosition = $_POST['job_position'];

    // Profile photo upload
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "img/" . $image_name;
   move_uploaded_file($image_location, $image_up);
    
    


    if ($password == $repeatpassword) {
        $sql = "INSERT INTO users (full_name, email, password, Phone, Address, job, image) VALUES ('$full_name','$email', '$password','$phone', '$address', '$jobPosition', '$image_up')";


        if (mysqli_query($conn, $sql)) {
                echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/login.php";</script>';

            
        }
    } else {
            echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/register.php?error=1";</script>';

    }
}
