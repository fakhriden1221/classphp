<?php 
 include("db_config/connect.php");



        $exp = $_POST['exp'];
        $title = $_POST['title'];
        $dis = $_POST['dis'];
        $res = $_POST['res'];
        $qua = $_POST['qua'];
        $type = $_POST['type'];
        $place = $_POST['place'];
        $location=$_POST['location'];
        $date = date('Y-m-d H:i:s');
   
        
        $sql = "INSERT INTO jobs (ExperienceLevel, JobTitle,Dis, Responsibilities,Qualifications,JobType,WorkPlaceType,Location,Date) 
                VALUES ('$exp', '$title','$dis','$res','$qua','$type','$place','$location','$date')";

if (mysqli_query($conn, $sql)) {
   
    echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/index.php?add=0";</script>';

}
            echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/index.php?add=7";</script>';

    