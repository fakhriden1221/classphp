<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "finalproject";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(mysqli_connect_errno()){
       echo "Connection Error";
       mysqli_connect_error();
       exit();
    }else{
        echo "connection done";
    }
    ?>