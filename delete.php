<?php include "includes/header.php"; ?>


<?php
deleteData();

?>
<h1>DELETE FORM</h1>
<form action="" method="POST">
    <label for="Uname">UserName</label>
    <input type="text" name="Uname">
    <label for="pwd">Password</label>
    <input type="password" name="pwd">
    <select name="ID" id="">
        <?php
        showID();
        ?>
    </select>
    <button type="submit" name="delete">Delete</button>
</form>
<?PHP include "includes/footer.php"; ?>