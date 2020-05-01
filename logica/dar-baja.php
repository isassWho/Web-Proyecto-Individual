<?php

require 'conexion.php';

session_start();

$nombre_baja = $_POST['nombre'];


$sentencia_aux = "select count(*) as CONTAR from pacientes_ficha_identificacion where nombre = '$nombre_baja'";


$consulta_aux = mysqli_query($conexion, $sentencia_aux);

//guarda todos los datos que trae en un array

$array_aux = mysqli_fetch_array($consulta_aux);

if($array_aux['CONTAR'] > 0){
    
    $sentencia = "delete from pacientes_ficha_identificacion where nombre = '$nombre_baja'";

    $consulta = mysqli_query($conexion, $sentencia);

    $_SESSION['username'] = $usuario;

    echo "Paciente: ". $nombre_baja .", eliminado";
    

    // si es valido se reedirecciona a éste archivo
    //header("location: ../lobby-administrador.html");
}else{
    echo "El Paciente: ". $nombre_baja .", no existe en la base de datos";
    
}

echo <<< EOT
<p><a href="../baja.php">Regresar</a></p>
EOT;



?>
