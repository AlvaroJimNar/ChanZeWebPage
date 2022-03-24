<?php
$conn = new mysqli('localhost','root','','chanze'); /* usuario,contrasenya,nombre_base_datos */
if($conn->connect_error)
{
    echo "Lo sentimos la pagina no está disponible en estos instantes";
    echo "Error: " . $conn->connect_error . "\n";
}
?>