<?php
    try{
        require_once('conexion.php');
        $nombre = $_POST['nombre'];

        $correo = $_POST['correo'];
        $nickname = $_POST['nickname'];
        $tlf = $_POST['tlf'];
        $password = $_POST['password'];
        $direccion = $_POST['direccion'];
        $sql = "INSERT INTO usuario (nombre,nickname,correo,tlf,direccion,password) VALUES ('$nombre','$nickname','$correo','$tlf','$direccion','$password');";
        
        if(mysqli_query($conn,$sql)){
            header("location: index.php");
        }else{
            
            header("location:indexError.php");
        }
        
    }
    catch(Exception $e){
        $error = $e->getMessage();
    }

?>