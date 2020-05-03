
<?php

require 'conexion.php';
session_start();

$correo = $_POST['correo'];
$pass = $_POST['pass'];
$tipo = $_POST['tipo'];



$sentencia = "insert into usuarios values ('$correo', '$pass', '$tipo')";

$consulta = mysqli_query($conexion, $sentencia);

echo <<< EOT
            <p><a href="../alta-usuario.php">Regresar</a></p>
            <p>Añadido correctamente</p>
        EOT;



?>

