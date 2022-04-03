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
    <div class = "login-page">
        <section class = "section-login">
            <div class="form-container">
                <h1 class = "login-h1">Login</h1>
                <form class = "login-form" action="includes/functions/login.php" method="POST">
                    <div class="control">
                        <label for="name" class="login-name">Name</label>
                        <input type="text" class = "input-login" name="nickname" id="nickname" placeholder="Enter your username">
                    </div>
                    <div class="control">
                        <label for="psw" class="login-psw">Password</label>
                        <input type="password" class = "input-login" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="control">
                        <input type="submit" class = "input-submit" value="Login">
                    </div>
                </form>
                <div class="link2">
                    <a href="register.php">Sign Up Now!</a>
                </div>
            </div>
        </section>
    </div>  
</body>
</html>