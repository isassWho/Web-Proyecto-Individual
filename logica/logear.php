
<?php
//importa lo que tiene conexion.php para usar su variable $conexion
require 'conexion.php';


//inicia la sesion
session_start();

$usuario = $_POST['correo'];
$pass = $_POST['pass'];

//setencia
$sentencia = "select count(*) as CONTAR from usuarios where correo = '$usuario' 
        and contraseña = '$pass'";

//hace la consulta
$consulta = mysqli_query($conexion, $sentencia);

//guarda todos los datos que trae en un array
$array = mysqli_fetch_array($consulta);

//verifica si hay datos en la tabla
if($array['CONTAR'] > 0){
    //
    $_SESSION['username'] = $usuario;

    $sent = "select tipo_usuario from usuarios where correo = '$usuario'";
    $cons = mysqli_query($conexion, $sent);
    $arreglo = mysqli_fetch_array($cons);
    echo "<br>";
    echo "Lo que viene de la base de datos: ".$arreglo[0];
    echo "<br>";
    if ($arreglo[0] == "admin") {
        header("location: ../lobby-administrador.php");
        
    }else{
        header("location: ../lobby-general.php");
    }

    // si es valido se reedirecciona a éste archivo
    //header("location: ../lobby-administrador.html");
}else{
    echo "Datos Incorrectos";
    header("location: ../login.php");
}

?>







