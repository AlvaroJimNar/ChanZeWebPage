<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="register-page">
        <div class="wrap-register">
            <h2 class="signup-here">Sign Up Here!</h2>
            <form class="register-form" action="submit_register.php" method = "POST">
                <input type="text" for="nombre" class="input-edit" name = "nombre" id = "nombre" placeholder="First Name..." required>
                <input type="text" for="correo" class="input-edit" name = "correo" id = "correo" placeholder="Email..." required>
                <input type="username" for="nickname" class="input-edit" name = "nickname" id = "nickname" placeholder="Username..." required>
                <input type="text" for="tlf" class="input-edit" name = "tlf" id = "tlf" placeholder="Phone number..." required>
                <input type="text" for="direccion" class="input-edit" name = "direccion" id = "direccion" placeholder="Address..." required>
                <input type="password" for="password" class="input-edit" class="password" name = "password" id = "password" placeholder="Password..." required>
                <input type="submit" class="submit-edit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>