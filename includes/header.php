<!DOCTYPE html>
<html lang="en">
  <?php session_start();?>
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/00154b0b1a.js" crossorigin="anonymous"></script>
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Logo final.png" />
    <title> ChanZe, Inc </title>
  </head>
  <body>
    <header>
      <div class="container">
        <a href='index.php' ><img src='https://i.postimg.cc/hXxjZQtL/Logo-final-1.png' width="120px " alt='Logo-final-1'/></a>
        <!--<a href="index.php">
           <img href="https://postimg.cc/zHJzpPRR" width="60px" heigth="60" alt="logo" class="logo">
        
        </a>-->
        <nav>
          <ul>
            <!--<li><a class="button outline" href="index.php">Sobre nosotros</a></li>-->
            <li><a class="button outline" href="boxes.php">Cajas</a></li>
            <?php if($_SESSION['nickname']){?>
            <li><a class="button outline" href="profile.php">Perfil</a></li>
            <?php }else{?>
            <li><a class="button outline" href="login.php">Perfil</a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </header>
    