<?php
  include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Example</title>
</head>
<body>
<?php
session_start();
?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>
    <?php
    $id=$_SESSION['user_info1']['id'];
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) {
          ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= $row['full_name']; ?></h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php
            }
        }
    ?>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
               
    <form action="update_profile.php" method="POST">
    <?php
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($con, $sql);

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
                  <label for="phone" class="form-label">Phone</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="phone" class="form-control" value="<?= $_SESSION['user_info1']['Phone']; ?>">
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="address" class="form-label">Address</label>
              </div>
              <div class="col-sm-9">
              <input type="text" class="form-control" id="address" name="address" value="<?=$_SESSION['user_info1']['Address']; ?>">
              </div>
          </div>
          <?php
            }
        }
    ?>
               
              <button type="submit" class="btn btn-primary" value="Update">Submit</button>
             
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <!-- Progress bars or any other content you want to add here -->
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <!-- Progress bars or any other content you want to add here -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
