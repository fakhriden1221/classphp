<?php
  include ('db_config/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="dashboard/css/additional_info.css"></head>
  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      display: grid;
      place-items: center;
    }
    .cdiv{
      width: 600px; 
      margin: 0 auto;
    }
    .textarea-field {
      flex: 1; 
      padding: 5px;
    }
  </style>
  <?php
session_start();
?>
<body>
  <header>
    <h1>Contact Us</h1>
  </header>
  <div class="col-lg-8 cdiv">
        <div class="card mb-4">
          <div class="card-body">
               
    <form action="update_profile.php" method="POST">
    <?php
    $id=$_SESSION['user_info1']['id'];
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="full-name" class="form-label">Full Name</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" value="<?= $_SESSION['user_info1']['full_name']; ?>">
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="email" class="form-label">Email</label>
              </div>
              <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" value="<?= $_SESSION['user_info1']['email']; ?>">
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="phone" class="form-label">Subject</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="phone" class="form-control">
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="address" class="form-label">Message</label>
              </div>
              <div class="col-sm-9">
                <textarea name="message" class="textarea-field"></textarea>
            </div>
          </div>
          <hr>
         <button type="submit" class="btn btn-primary" value="Update">Submit</button>

          <?php
            }
        }
    ?>
    </form>
    </body>
</html>
