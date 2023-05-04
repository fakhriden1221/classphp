<?php include "includes/header.php"; ?>


<?php
updateData();

?>
<h1>UPDATE FORM</h1>
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
    <button type="submit" name="update">Update</button>
</form>
<?PHP include "includes/footer.php"; ?>