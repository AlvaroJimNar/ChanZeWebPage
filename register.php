<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form class = "login-form" action="includes/submitRegister.php" method="POST">
    <div class="user-box">
      <input type="text" for="nombre" class = "input-login" name="nombre" id="nombre" required="">
      <label>First name</label>
    </div>
    <div class="user-box">
      <input type="email" for="correo" class = "input-login" name="correo" id="correo" required="">
      <label>Mail</label>
    </div>
    <div class="user-box">
      <input type="username" for="nickname" class = "input-login" name="nickname" id="nickname" required="">
      <label>Nickname</label>
    </div>
    <div class="user-box">
      <input type="tel" for="tlf" class = "input-login" name="tlf" id="tlf" required="">
      <label>Phone Number</label>
    </div>
    <div class="user-box">
      <input type="text" for="direccion" class = "input-login" name="direccion" id="direccion" required="">
      <label>Address</label>
    </div>
    <div class="user-box">
      <input type="password" for="password" class = "input-login" name="password" id="password" required="">
      <label>Password</label>
    </div>
    <div class="control">
        <input type="submit" class = "input-submit" value="Submit">
    </div>
    <a href="index.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Go Back
    </a>
  </form>
</div> 
</body>
</html>