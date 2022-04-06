
<?php
require 'conexion.php';

$nickname = $_POST['nickname'];
$password = $_POST['password'];

$query = "SELECT COUNT(*) as contar from usuario where nickname = $nickname and password = $password";

$consulta = mysqli_query($conn,$query);
$array = mysqli_fetch_array($consulta);


if($array['contar'] >0 ){
    
    session_start();
    $_SESSION['nickname'] = $nickname;

    header("location: ../profile.php"); /* con esto estamos redireccionando si hay mas de 0 elementos */
    
    
} else{

    header("location: ../indexError.php");
}