<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_log_reg/style.css">
    <title>chanZe</title>
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form class = "login-form" action="includes/login.php" method="POST">
    <div class="user-box">
      <input type="text" class = "input-login" name="nickname" id="nickname" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" class = "input-login" name="password" id="password" required="">
      <label>Password</label>
    </div>
    <div class="control">
        <input type="submit" class = "input-submit" value="Login">
    </div>
    <a href="register.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Register
    </a>
  </form>
</div> 
</body>
</html>