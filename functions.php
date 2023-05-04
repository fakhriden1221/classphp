<?php include "db.php"; ?>

<?php



function showID()
{
    global $conn;
    $query = "SELECT * FROM user";
    $result = $conn->query($query);
    if (!$result) {
        die("Query FAILED!! ");
    }

    while ($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        echo "<option value='$id'>$id</option>";
    }
}


function insertData()
{
    global $conn;
    if (isset($_POST['submit'])) {
        $Uname = $_POST['Uname'];
        $pwd = $_POST['pwd'];

        $Uname = mysqli_real_escape_string($conn, $Uname);
        $pwd = mysqli_real_escape_string($conn, $pwd);
        $hashFormat = "$2y$10$";
        $salt = "thisismywaytosecuremypwd";
        $hashF_and_salt = $hashFormat . $salt;
        $pwd = crypt($pwd, $hashF_and_salt);
        $sql = "INSERT INTO user (name, pwd) 
                VALUES ('$Uname', '$pwd')";

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

function readAllData()
{
    global $conn;
    $query = "SELECT * FROM user";
    $result = $conn->query($query);
    if (!$result) {
        die("Query FAILED!! ");
    }

    while ($row = $result->fetch_assoc()) {
        echo "<p><b>";
        print_r($row);
        echo "</b></p>";
        echo "<br><br>";
    }
}
