<?php include("db_config/connect.php");


function showjobs()
{

    global $conn; ?>
    <!--job opportunities-->
    <div class="row tm-row">
        <?php
        $query = "select * from jobs";

        $result = mysqli_query($conn, $query);
        $nbRow = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {


            $row = mysqli_fetch_assoc($result);
            $_SESSION['jobs'] = $row;
        }

        for ($i = 0; $i < $nbRow; $i++) {

        ?>
            <article class="col-12 col-md-6 tm-post">
                <hr class="tm-hr-primary">
                <a href="index.php" class="effect-lily tm-post-link tm-pt-60">
                    
                    <span class="position-absolute tm-new-badge"><?php echo $_SESSION['jobs']['ExperienceLevel'] ?></span>
                    <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $_SESSION['jobs']['JobTitle'] ?></h2>
                </a>
                <p class="tm-pt-30">
                    About the job <br>
                    <?php echo $_SESSION['jobs']['Dis'] ?>
                    <br><br><br>
                    Responsibilities <br>
                <P> <?php echo $_SESSION['jobs']['Responsibilities'] ?></P>
                <br><br><br>
                Qualifications <br>
                <?php echo $_SESSION['jobs']['Qualifications'] ?>
                </p>
                <div class="d-flex justify-content-between tm-pt-45">
                    <span class="tm-color-primary"><?php echo $_SESSION['jobs']['JobType'] ?></span>
                    <span class="tm-color-primary"><?php echo $_SESSION['jobs']['Date'] ?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span><?php echo $_SESSION['jobs']['WorkPlaceType'] ?></span>
                    <span><?php echo $_SESSION['jobs']['Location'] ?></span>
                </div>
            </article>
        <?php $row = mysqli_fetch_assoc($result);
            $_SESSION['jobs'] = $row;
        }
        ?>

    </div>



    <?php




}



function insertData()
{
    global $conn;
    if (isset($_POST['submit'])) {
        $exp = $_POST['exp'];
        $title = $_POST['title'];
        $dis = $_POST['dis'];
        $res = $_POST['res'];
        $qua = $_POST['qua'];
        $type = $_POST['type'];
        $place = $_POST['place'];
        $location = $_POST['location'];
        $img = $_POST['img'];
        
        $sql = "INSERT INTO jobs (ExperienceLevel, JobTitle,Dis, Responsibilities,Qualifications,JobType,WorkPlace,Location,IMG,Date) 
                VALUES ('$exp', '$title')";

        $result = $conn->query($sql);
        if (!$result) {
            die('FAILED');
        }
    }
}

function updateData()
{
    global $conn;
    if (isset($_POST['update'])) {

        $Uname = $_POST['Uname'];
        $pwd = $_POST['pwd'];
        $id = $_POST['ID'];
        $query = "UPDATE user SET 
        name = '$Uname', 
        pwd = '$pwd'
        WHERE ID = $id ";
        $result = $conn->query($query);
        if (!$result) {
            die('Query FAILED');
        }
    }
}
function deleteData()
{
    global $conn;
    if (isset($_POST['delete'])) {

        $id = $_POST['ID'];
        $sql = "DELETE FROM user WHERE ID = $id";
        $result = $conn->query($sql);
        if (!$result) {
            die('Query FAILED');
        }
    }
}
?>