<?php 
include ('connect.php');

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;
    


    if ($password == $repeatpassword) {
        $sql = "INSERT INTO users (full_name, email, password, repeatpassword, phone, address, image) VALUES ('$full_name','$email', '$password', '$repeatpassword','$phone','$address' ,'$image_up')";

        if (mysqli_query($con, $sql)) {
            header("location:index.php?record=1");
            
        }
    } else {
        header("location:signup.php?error=1");
    }
}
