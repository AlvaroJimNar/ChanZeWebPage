<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="css/profile.css">
<?php include_once 'includes/header.php';
require_once('includes/conexion.php');


$nickname = $_SESSION['nickname'];

$sql = "SELECT * FROM usuario WHERE nickname = $nickname;";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $nombre = $row['nombre'];
    $correo = $row['correo'];
    $direccion = $row['direccion'];
    $objetos_conseguidos = $row['cartera'];
    $telefono = $row['tlf'];
}

$comand = "SELECT * FROM objeto s INNER JOIN inventario hp on s.id = hp.id_objeto INNER JOIN usuario h on hp.id_usuario = h.id_usuario;";

$result = $conn->query($comand);
while ($t = $result->fetch_assoc()) {
    $nombreObj = $t['nombreObj'];
    $precio = $t['precio'];
    $rareza = $t['rareza'];
    $precio = $t['precio'];
}


?>
    <meta charset="UTF-8">
    <title>ChanZe</title>
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet' href='css/profile.css'>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="row m-sm-0 px-3">
                <div class="col-lg-4 card-profile">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="profile-img position-relative">
                                    <img src="https://i.postimg.cc/z3S18Yx3/Profilepic.png" class="img-fluid rounded avatar-110" alt="profile-image">
                                </div>
                                <div class="ml-3">
                                    <h4 class="mb-1"> <?php echo $nickname; ?></h4>
                                    
                                   
                                        <?php 
                                            if($objetos_conseguidos < 3){
                                                echo '<a href="#" class="btn btn-primary font-size-14">Noob</a>';
                                            }else if($objetos_conseguidos <= 5){
                                                echo '<a href="#" class="btn btn-primary font-size-14">Young Promise</a>';
                                            }else{
                                                echo '<a href="#" class="btn btn-primary font-size-14">Master Chief</a>';
                                            }

                                        ?>
                                        
                                </div>
                            </div>
                            <p>I’m a Ux/UI designer. I spend my whole day, practically every day,<br>
                                 experimenting with new designs, making illustartion, and animation.</p>
                            <ul class="list-inline p-0 m-0">
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-map-marker mr-3"></i>
                                        <p class="mb-0"><?php  echo $nombre;  ?></p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-map-marker mr-3"></i>
                                        <p class="mb-0"> <?php echo $correo; ?> </p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-map-marker svg-icon mr-3"></i>
                                        <p class="mb-0"> <?php echo $direccion; ?> </p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-map-marker svg-icon mr-3"></i>
                                        <p class="mb-0"> <?php echo $telefono; ?> </p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-map-marker svg-icon mr-3"></i>
                                        <p class="mb-0"> <?php echo 'Objetos conseguidos:'. $objetos_conseguidos; ?> </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class=Cart-Container>
                <div class=Header>
                    <h3 class=Heading>Inventario</h3>
                    <?php
                    echo $nombreObj;
                    echo $precio;
                    echo $rareza;
                    echo $precio;
                    ?>
                </div>
            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>