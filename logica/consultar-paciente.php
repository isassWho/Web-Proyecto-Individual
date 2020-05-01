<?php

require 'conexion.php';

$nombre_consultar = $_POST['nombre'];



$sentencia_aux = "select count(*) as CONTAR from pacientes_ficha_identificacion where nombre = '$nombre_consultar'";

$consulta_aux = mysqli_query($conexion, $sentencia_aux);

$array_aux = mysqli_fetch_array($consulta_aux);

echo <<< EOT
<p><a href="../consulta.php">Regresar</a></p>
<p><a href="../alta.php">Dar de Alta</a></p>
EOT;

if($array_aux['CONTAR'] > 0){
    
    $array_columnas = array("Fecha de Elaboracion", "Nombre", "Genero", "Edad","Nacimiento","Ocupacion","Lateralidad","Nacionalidad","Religion","Telefono","Domicilio","Telefono Emergencia","Persona emergencia");

    $sentencia = "select * from pacientes_ficha_identificacion where nombre = '$nombre_consultar'";
    $consulta = mysqli_query($conexion, $sentencia);
    $array = mysqli_fetch_array($consulta);
    
    for ($i = 0; $i <= (sizeof($array)/2)-1; $i++) {
        echo "<br> &nbsp;&nbsp;&nbsp;&nbsp;";
        echo $array_columnas[$i]."<br> &nbsp;&nbsp;&nbsp;&nbsp;";
        echo $array[$i]."<br>";
    }

}else{
    echo "No se encontró: ".$nombre_consultar;
    
}











?>
