<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard/css/additional_info.css">
    <title>Login</title>
</head>
<body>
<div class="container">
  <h2>Login Page</h2>
  <form method="POST" action="login_action.php">

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email"class="form-control" required>

    <label for="Pass">Password</label>
    <input type="password" name="password" placeholder="Password"class="form-control" required>
<br>
    <button type="submit" name="submit">Login</button>

  </form>
  <hr>
  <a href="register.php" class="create-account-link">Don't have an account? Sign-up here</a>
</div>


  
</body>
</html>
