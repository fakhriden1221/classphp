<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="classphp/dashboard/css/register.css">
    <title>Sign_up</title>
</head>
<body>
<div class="container">
  <h2>Sign-up Page</h2>
  <?php
 
  if (isset($_GET['error'])) {
    echo "Your confirmation password isn't the same as your password. Please re-enter it.";
  }
  if (isset($_GET['record'])) {
    echo "New record created successfully";
  }
  ?>
  <form method="POST" action="register_action.php" enctype='multipart/form-data'>
    <label for="full_name">Full Name</label>
    <input type="text" name="full_name" placeholder="Name" required>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="Pass">Password</label>
    <input type="password" name="password" placeholder="Password" required>

    <label for="confirmPass">Confirm Password</label>
    <input type="password" name="repeatpassword" placeholder="Confirm Password" required>

    <label for="phone">Phone</label>
    <input type="text" name="phone" placeholder="Phone Number" required>

    <label for="address">Address</label>
    <input type="text" name="address" placeholder="Address" required>

    <label for="file" class="file-input-label">Profile Photo</label>
    <input type="file" id="file" name='image' style='display:none'>
    <button type="button" class="button" onclick="document.getElementById('file').click()">Insert Image</button>
<br><br>
    <button type="submit" name="submit">Create Account</button>

  </form>
  <hr>
  <a href="login.php" class="create-account-link">Already have an account? Login here</a></p>
</div>


    </div>
</body>
</html>
