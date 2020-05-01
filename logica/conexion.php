
<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "historia_clinica_db";

$conexion = mysqli_connect($host, $usuario, $clave, $bd);

//Para verificar que la conexion alla sido exitosa

if($conexion){
    echo"Conectado correctamente a: '$bd'";
}else{
    echo "No se pudo conectar a: '$bd'";
}



?>
