<?php

require 'conexion.php';

session_start();

$nombre = $_POST['nombre'];
$campo_a_modificar = $_POST['campo_a_modificar'];
$nuevo_valor = $_POST['nuevo_valor'];

$sentencia = "update pacientes_ficha_identificacion set $campo_a_modificar='$nuevo_valor' Where nombre = '$nombre'";
$consulta = mysqli_query($conexion, $sentencia);

echo <<< EOT
<p><a href="../modificar.php">Regresar</a></p>
<p><a href="../consulta.php">Consulta el nuevo paciente aquí</a></p>
<p>Asignación actualizada correctamente</p>
EOT;







?>

