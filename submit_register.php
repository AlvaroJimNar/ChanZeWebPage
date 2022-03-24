<?php
    try{
        require_once('includes/functions/conexion.php');
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $nickname = $_POST['username'];
        $contrasenia = $_POST['contrasenia'];
        $sql = "INSERT INTO usuario (nombre,apellido,email,nickname,psw) VALUES ('$nombre','$apellido','$email','$nickname','$contrasenia')";
        if(mysqli_query($conn,$sql)){
            echo "<p>Your comment was correctly sent</p>";
        }else{
       
        echo "<p>Your comment was not correctly sent</p>";
        }
        header("location: index.php");
    }
    catch(Exception $e){
        $error = $e->getMessage();
    }

?>