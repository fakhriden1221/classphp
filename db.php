<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("connection error ") . $conn->connect_error;
}
