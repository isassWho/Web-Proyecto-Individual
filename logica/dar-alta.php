<?php

require 'conexion.php';

session_start();

$fecha_elaboracion = $_POST['fecha_elaboracion'];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$lateralidad = $_POST['lateralidad'];
$nacionalidad = $_POST['nacionalidad'];
$religion = $_POST['religion'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];
$telefono_emergencia = $_POST['telefono_emergencia'];
$nombre_emergencia = $_POST['nombre_emergencia'];


$sentencia_aux = "select count(*) as CONTAR from pacientes_ficha_identificacion where nombre = '$nombre'";

$consulta_aux = mysqli_query($conexion, $sentencia_aux);

//guarda todos los datos que trae en un array
$array_aux = mysqli_fetch_array($consulta_aux);

if($array_aux['CONTAR'] > 0){
    
    echo "Paciente: ". $nombre ." duplicado, no se puede añadir.";

}else{
    $sentencia = "insert into pacientes_ficha_identificacion values (
        '$fecha_elaboracion','$nombre', '$genero', '$edad', '$fecha_nacimiento', '$ocupacion', '$lateralidad', '$nacionalidad','$religion','$telefono', '$domicilio','$telefono_emergencia','$nombre_emergencia')";
    
    $consulta = mysqli_query($conexion, $sentencia);
    echo "El Paciente: ". $nombre .", añadido correctamente.";
    
}
echo <<< EOT
<p><a href="../alta.php">Regresar</a></p>
EOT;







?>
