<?php
require 'conexion.php';
session_start();

$nickname = $_POST['nickname'];
$password = $_POST['password'];

$query = "SELECT COUNT(*) as contar from usuario where nickname = '$nickname' and password = '$password'";

$consulta = mysqli_query($conn,$query);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0){
    $_SESSION['nickname'] = $nickname;
    header("location: ../home.php"); /* con esto estamos redireccionando si hay mas de 0 elementos */
} else{
    echo "INCORRECT DATA";
}

?>
xd