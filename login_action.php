<?php 
include ("db_config/connect.php");
session_start();
$email =$_POST['email'];
$password=$_POST['password'];

$query="SELECT *FROM users WHERE email = '$email' AND password='$password'";
$result = mysqli_query($conn,$query);
 
if(mysqli_num_rows($result)>0){
 $row=mysqli_fetch_assoc($result);
    $_SESSION['user_info']=$row;
    
    header("location:index.php");
   
  
}else{
    header("location:login.php?error=1");
}