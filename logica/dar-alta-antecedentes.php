
<?php

require 'conexion.php';

session_start();

$nombre = $_POST['nombre'];

#validar que el usuario exista en la base de datos
$sentencia_validar = "select count(*) as CONTAR from pacientes_ficha_identificacion where nombre = $nombre";

$consulta_validar = mysqli_query($conexion, $sentencia_validar);

# si el registro no existe
if ($array_aux['CONTAR'] > 0) {
    echo "<h2>El usuario no existe en la base de datos. Por eso no podemos indexar ésta información. Primero agregalo en Ficha de Identificación</h2>";

}else{

# row 1 neoplasias
$tiene_neoplasias = $_POST['tiene_neoplasias'];
$parentesco_neoplasias = $_POST['parentesco_neoplasias'];
$neoplasias_v_m = $_POST['neoplasias_v_m'];


$sentencia_de_tabla = "create table enfermedad_neoplasias_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_neoplasias_$nombre values ('$tiene_neoplasias','$parentesco_neoplasias','$neoplasias_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

# row 2 tuberculosis
$tiene_tuberculosis = $_POST['tiene_tuberculosis'];
$parentesco_tuberculosis = $_POST['parentesco_tuberculosis'];
$tuberculosis_v_m = $_POST['tuberculosis_v_m'];


$sentencia_de_tabla = "create table enfermedad_tuberculosis_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_tuberculosis_$nombre values ('$tiene_tuberculosis','$parentesco_tuberculosis','$tuberculosis_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

# row 3 diabetes
$tiene_diabetes = $_POST['tiene_diabetes'];
$parentesco_diabetes = $_POST['parentesco_diabetes'];
$diabetes_v_m = $_POST['diabetes_v_m'];


$sentencia_de_tabla = "create table enfermedad_diabetes_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_diabetes_$nombre values ('$tiene_diabetes','$parentesco_diabetes','$diabetes_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

# row 4 artritis
$tiene_artritis = $_POST['tiene_artritis'];
$parentesco_artritis = $_POST['parentesco_artritis'];
$artritis_v_m = $_POST['artritis_v_m'];


$sentencia_de_tabla = "create table enfermedad_artritis_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_artritis_$nombre values ('$tiene_artritis','$parentesco_artritis','$artritis_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

# row 5 cardiopatias
$tiene_cardiopatias = $_POST['tiene_cardiopatias'];
$parentesco_cardiopatias = $_POST['parentesco_cardiopatias'];
$cardiopatias_v_m = $_POST['cardiopatias_v_m'];


$sentencia_de_tabla = "create table enfermedad_cardiopatias_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_cardiopatias_$nombre values ('$tiene_cardiopatias','$parentesco_cardiopatias','$cardiopatias_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 6 neurologicas
$tiene_neurologicas = $_POST['tiene_neurologicas'];
$parentesco_neurologicas = $_POST['parentesco_neurologicas'];
$neurologicas_v_m = $_POST['neurologicas_v_m'];


$sentencia_de_tabla = "create table enfermedad_neurologicas_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_neurologicas_$nombre values ('$tiene_neurologicas','$parentesco_neurologicas','$neurologicas_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

# row 7 psiquiatricos
$tiene_psiquiatricos = $_POST['tiene_psiquiatricos'];
$parentesco_psiquiatricos = $_POST['parentesco_psiquiatricos'];
$psiquiatricos_v_m = $_POST['psiquiatricos_v_m'];


$sentencia_de_tabla = "create table enfermedad_psiquiatricos_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_psiquiatricos_$nombre values ('$tiene_psiquiatricos','$parentesco_psiquiatricos','$psiquiatricos_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 8 respiratorias
$tiene_respiratorias = $_POST['tiene_respiratorias'];
$parentesco_respiratorias = $_POST['parentesco_respiratorias'];
$respiratorias_v_m = $_POST['respiratorias_v_m'];


$sentencia_de_tabla = "create table enfermedad_respiratorias_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_respiratorias_$nombre values ('$tiene_respiratorias','$parentesco_respiratorias','$respiratorias_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

# row 9 hepatopias
$tiene_hepatopias = $_POST['tiene_hepatopias'];
$parentesco_hepatopias = $_POST['parentesco_hepatopias'];
$hepatopias_v_m = $_POST['hepatopias_v_m'];


$sentencia_de_tabla = "create table enfermedad_hepatopias_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_hepatopias_$nombre values ('$tiene_hepatopias','$parentesco_hepatopias','$hepatopias_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 10 alergias
$tiene_alergias = $_POST['tiene_alergias'];
$parentesco_alergias = $_POST['parentesco_alergias'];
$alergias_v_m = $_POST['alergias_v_m'];


$sentencia_de_tabla = "create table enfermedad_alergias_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_alergias_$nombre values ('$tiene_alergias','$parentesco_alergias','$alergias_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 11 hipertension
$tiene_hipertension = $_POST['tiene_hipertension'];
$parentesco_hipertension = $_POST['parentesco_hipertension'];
$hipertension_v_m = $_POST['hipertension_v_m'];


$sentencia_de_tabla = "create table enfermedad_hipertension_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_hipertension_$nombre values ('$tiene_hipertension','$parentesco_hipertension','$hipertension_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 12 hematologicas 
$tiene_hematologicas = $_POST['tiene_hematologicas'];
$parentesco_hematologicas = $_POST['parentesco_hematologicas'];
$hematologicas_v_m = $_POST['hematologicas_v_m'];


$sentencia_de_tabla = "create table enfermedad_hematologicas_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_hematologicas_$nombre values ('$tiene_hematologicas','$parentesco_hematologicas','$hematologicas_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 13 endonicrologicas
$tiene_endonicrologicas = $_POST['tiene_endonicrologicas'];
$parentesco_endonicrologicas = $_POST['parentesco_endonicrologicas'];
$endonicrologicas_v_m = $_POST['endonicrologicas_v_m'];


$sentencia_de_tabla = "create table enfermedad_endonicrologicas_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_endonicrologicas_$nombre values ('$tiene_endonicrologicas','$parentesco_endonicrologicas','$endonicrologicas_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);


# row 14 geneticas
$tiene_geneticas = $_POST['tiene_geneticas'];
$parentesco_geneticas = $_POST['parentesco_geneticas'];
$geneticas_v_m = $_POST['geneticas_v_m'];


$sentencia_de_tabla = "create table enfermedad_geneticas_$nombre(
                tiene varchar(2),
                parentesco varchar(20),
                genero varchar(10)
             );";
             
# crea la tabla de esa enfermedad
$consulta_de_tabla = mysqli_query($conexion, $sentencia_de_tabla);

$sentencia_llenar_tabla = "insert into enfermedad_geneticas_$nombre values ('$tiene_geneticas','$parentesco_geneticas','$geneticas_v_m');";

$consulta_llenar_tabla = mysqli_query($conexion, $sentencia_llenar_tabla);

echo <<< EOT
<h2>Información Registrada Correctamente</h2>
EOT;

            }# else

        echo <<< EOT
            <p><a href="../alta.php">Regresar</a></p>
        EOT;



?>

