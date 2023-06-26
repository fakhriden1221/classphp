<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/additional_info.css">
  <title>Sign_up</title>
</head>
<body>
  <div class="container">
    <h2>Sign-up Page</h2>
    <?php
    if (isset($_GET['error'])) {
      echo '<div class="error-msg">Your confirmation password isn\'t the same as your password. Please re-enter it.</div>';
    }
    if (isset($_GET['record'])) {
      echo '<div class="success-msg">New record created successfully</div>';
    }
    ?>
    <form method="POST" action="register_action.php" enctype='multipart/form-data'>
      <div class="mb-3">
        <label for="full_name" class="form-label">Full Name</label>
        <input type="text" name="full_name"  placeholder="Name"class="form-control" style="border:1px solid #ced4da;">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
      </div>

      <button type="submit" name="submit">Create Account</button>
    </form>
    <hr>
    <p><a href="login.php" class="create-account-link">Already have an account? Login here</a></p>
  </div>
</body>
</html>
