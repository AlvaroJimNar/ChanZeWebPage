<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="shortcut icon" href="img/Logo final.png" />
    <title> ChanZe, Inc </title>
</head>
<body>

<div class="login-box">
  <h2>Inicio de sesión</h2>
  <form class = "login-form" action="includes/login.php" method="POST">
    <div class="user-box">
      <input type="text" class = "input-login" name="nickname" id="nickname" required="">
      <label>Nombre de usuario</label>
    </div>
    <div class="user-box">
      <input type="password" class = "input-login" name="password" id="password" required="">
      <label>Contraseña</label>
    </div>
    <div class="control">
        <input type="submit" class = "input-submit" value="Iniciar sesión">
    </div>
    <a href="register.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrate!
    </a>
  </form>
</div> 
</body>
</html>

<script type="text/javascript">
document.onreadystatechange = function(){//window.addEventListener('readystatechange',function(){...}); (for Netscape) and window.attachEvent('onreadystatechange',function(){...}); (for IE and Opera) also work
    if(document.readyState=='loaded' || document.readyState=='complete')
        alert('Datos incorrectos. Vuelva a intentarlo.');
}
</script>