<?php

require 'conexion.php';

session_start();

$nombre_consultar = $_POST['nombre'];

$sentencia_aux = "select count(*) as CONTAR from pacientes_ficha_identificacion where nombre = '$nombre_consultar'";

$consulta_aux = mysqli_query($conexion, $sentencia_aux);

$array_aux = mysqli_fetch_array($consulta_aux);

echo <<< EOT
<p><a href="../consulta.php">Regresar</a></p>
<p><a href="../alta.php">Dar de Alta</a></p>
EOT;

if($array_aux['CONTAR'] > 0){
    
    
    $sentencia = "select * from pacientes_ficha_identificacion where nombre = '$nombre_consultar'";
    $consulta = mysqli_query($conexion, $sentencia);
    $array = mysqli_fetch_array($consulta);
    
    /*
    for ($i = 0; $i <= (sizeof($array)/2)-1; $i++) {
        echo "<br> &nbsp;&nbsp;&nbsp;&nbsp;";
        echo $array_columnas[$i]."<br> &nbsp;&nbsp;&nbsp;&nbsp;";
        echo $array[$i]."<br>";
    }
    */
    echo 
    "
    <style media='screen'>
        th{
            background: rgb(111, 191, 109);
        }
        td, th{
            border: 1px solid black;
        } 
        table{
            background: rgb(171, 191, 199);
        }                     
    </style>
    <table>
    <tr>
        <th>Fecha Elaboración</th>
        <th>Nombre</th>
        <th>Género</th>
        <th>Edad</th>
        <th>Nacimiento</th>
        <th>Ocupación</th>
        <th>Lateralidad</th>
        <th>Nacionalidad</th>
        <th>Religión</th>
        <th>Teléfono</th>
        <th>Domicilio</th>
        <th>Tel Emergencia</th>
        <th>Persona Emergencia</th>
    </tr>
    <tr>
        <td>$array[0]</td>
        <td>$array[1]</td>
        <td>$array[2]</td>
        <td>$array[3]</td>
        <td>$array[4]</td>
        <td>$array[5]</td>
        <td>$array[6]</td>
        <td>$array[7]</td>
        <td>$array[8]</td>
        <td>$array[9]</td>
        <td>$array[10]</td>
        <td>$array[11]</td>
        <td>$array[12]</td>
    </tr>
</table>";
    


}else{
    echo "No se encontró: ".$nombre_consultar;
    
}


?>
