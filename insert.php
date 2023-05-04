<?php include "includes/header.php"; ?>


<?php
insertData();

?>
<h1>INSERT FORM</h1>
<form action="" method="POST">
    <label for="Uname">UserName</label>
    <input type="text" name="Uname">
    <label for="pwd">Password</label>
    <input type="password" name="pwd">
    <button type="submit" name="submit">Submit</button>
</form>


<?PHP include "includes/footer.php"; ?>