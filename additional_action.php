<?php
include ("db_config/connect.php");

if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $jobPosition = $_POST['job_position'];

    // Profile photo upload
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "img/" . $image_name;
    move_uploaded_file($profilePhotoLocation, $profilePhotoPath);

    $sql = "INSERT INTO users (phone, address, job_position, profile_photo) VALUES ('$phone', '$address', '$jobPosition', '$image_up')";

    if (mysqli_query($conn, $sql)) {
        header("location:index.php?record=1");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
