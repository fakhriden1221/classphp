<?php
session_start();
include ("db_config/connect.php");

// Check if the user is logged in
if (!isset($_SESSION['user_info1'])) {
    echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/login.php";</script>';

    exit();
}

$full_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE users SET full_name='$full_name', email='$email', Phone='$phone', Address='$address' WHERE id='{$_SESSION['user_info1']['id']}'";
$result = mysqli_query($conn, $sql);


    echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/index.php";</script>';

    exit();

mysqli_close($conn);
?>
