<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="classphp/dashboard/css/register.css">
    <title>Login</title>
</head>
<body>
<div class="container">
  <h2>Login Page</h2>
  <form method="POST" action="login_action.php">

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="Pass">Password</label>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" name="submit">Submit</button>

  </form>
  <hr>
  <a href="register.php" class="create-account-link">Don't have an account? Sign-up here</a>
</div>


    </div>
</body>
</html>
