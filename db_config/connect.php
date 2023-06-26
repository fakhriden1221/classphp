<?php

$dbServername = "localhost";
$dbUsername = "id20900153_root";
$dbPassword = "Fn@1234567";
$dbName = "id20900153_finalproject";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(mysqli_connect_errno()){
       echo "Connection Error";
       mysqli_connect_error();
       exit();
    }else{
        echo "connection done";
    }
    ?>