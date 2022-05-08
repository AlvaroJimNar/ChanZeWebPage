<?php



include '../includes/conexion.php';


$comand = "SELECT * FROM objeto s INNER JOIN inventario hp on s.id = hp.id_objeto INNER JOIN usuario h on hp.id_usuario = h.id_usuario;";

$result = mysqli_query($conn,$comand);
//$res = mysql_fetch_assoc($result);



if(!$result){
    echo json_encode($conn->error);
    exit;
}
else{  
    $res = "";    
    if($logros=mysqli_num_rows($result)){
        $res = $logros . ' logro';
        if($logros>1){
            $res = $res . 's';
        }
    }
    else{
        $res = "Error";
    }
    
    echo json_encode($res);
    exit;
}

?>