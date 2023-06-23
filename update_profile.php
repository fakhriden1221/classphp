<?php
session_start();
include ("db_config/connect.php");

// Check if the user is logged in
if (!isset($_SESSION['user_info1'])) {
    header("Location: login.php");
    exit();
}

$full_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE users SET full_name='$full_name', email='$email', Phone='$phone', Address='$address' WHERE id='{$_SESSION['user_info1']['id']}'";
$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    header("Location:index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($con);
?>
