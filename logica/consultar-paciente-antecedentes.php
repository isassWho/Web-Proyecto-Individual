
<?php

require 'conexion.php';

session_start();

echo <<< EOT
<p><a href="../consulta.php">Regresar</a></p>
EOT;

$nombre = $_POST['nombre'];

//verifica si existe la tabla
if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_neoplasias_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #1 neoplasias
        $sentencia = "select * FROM enfermedad_neoplasias_$nombre";
        $consulta = mysqli_query($conexion, $sentencia);
        $array_neoplasias = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_tuberculosis_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #2 tuberculosis
        $sentencia = "select * FROM enfermedad_tuberculosis_$nombre";
        $consulta = mysqli_query($conexion, $sentencia);
        $array_tuberculosis = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_diabetes_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #3 diabetes
    $sentencia = "select * FROM enfermedad_diabetes_$nombre";
    $consulta = mysqli_query($conexion, $sentencia);
    $array_diabetes = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_diabetes_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #4 artritis
    $sentencia = "select * FROM enfermedad_diabetes_$nombre";
    $consulta = mysqli_query($conexion, $sentencia);
    $array_artritis = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_cardiopatias_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #5 cardiopatias
    $sentencia = "select * FROM enfermedad_cardiopatias_$nombre";
    $consulta = mysqli_query($conexion, $sentencia);
    $array_cardiopatias = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}


if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_neurologicas_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #6 neurologicas
        $sentencia = "select * FROM enfermedad_neurologicas_$nombre";
        $consulta = mysqli_query($conexion, $sentencia);
        $array_neurologicas = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_psiquiatricos_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #7 psiquiatricos
$sentencia = "select * FROM enfermedad_psiquiatricos_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_psiquiatricos = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_respiratorias_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #8 respiratorias
$sentencia = "select * FROM enfermedad_respiratorias_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_respiratorias = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_hepatopias_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #9 hepatopias
$sentencia = "select * FROM enfermedad_hepatopias_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_hepatopias = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_alergias_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
        #10 alergias
$sentencia = "select * FROM enfermedad_alergias_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_alergias = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_hipertension_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
#11 hipertension
$sentencia = "select * FROM enfermedad_hipertension_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_hipertension = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_hematologicas_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
#12 hematologicas
$sentencia = "select * FROM enfermedad_hematologicas_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_hematologicas = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_endonicrologicas_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
#13 endonicrologicas
$sentencia = "select * FROM enfermedad_endonicrologicas_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_endonicrologicas = mysqli_fetch_array($consulta);

    }
}
else {
    echo "La tabla no existe";
}

if ($result = mysqli_query($conexion, "SHOW TABLES LIKE 'enfermedad_geneticas_$nombre'")) {
    if($result->num_rows == 1) {
        //La tabla existe
#14 geneticas
$sentencia = "select * FROM enfermedad_geneticas_$nombre";
$consulta = mysqli_query($conexion, $sentencia);
$array_geneticas = mysqli_fetch_array($consulta);

echo "
<head>
    <title>Document</title>
    <style>
        .contenedor{
            width: 70%;
            height: 400px;
            background: crimson;
            margin: auto;
            display: flex;
        }
        .title-row{
            background: cyan;
            width: 400px;
            height: 100%;
        }
        .valores{
            background:cyan;
            width: 100%;
            height: 100%;
        }
        td{
            border: 1px solid black;
        }

        
        

    </style>
</head>
<body>
    <div class='contenedor'>
        <table class='title-row'>
            <tr>
                <td>Enfermedades</td>
            </tr>
            <tr>
                <td>1.-Neoplasias</td>
            </tr>
            <tr>
                <td>2.-Tuberculosis</td>
            </tr>
            <tr>
                <td>3.-Diabetes</td>
            </tr>
            <tr>
                <td>4.-Artritis</td>
            </tr>
            <tr>
                <td>5.-Cardiopatrias</td>
            </tr>
            <tr>
                <td>6.-Enfermedades Neurológicas</td>
            </tr>
            <tr>
                <td>7.-Transtornos Psiquiátricos</td>
            </tr>
            <tr>
                <td>8.-Enfermedades Respiratorias</td>
            </tr>
            <tr>
                <td>9.-Hepatopías</td>
            </tr>
            <tr>
                <td>10.-Alergías</td>
            </tr>
            <tr>
                <td>11.-Hipertensión</td>
            </tr>
            <tr>
                <td>12.-Enfermedades Hematológicas</td>
            </tr>
            <tr>
                <td>13.-Enfermedades Endonicrológicas</td>
            </tr>
            <tr>
                <td>14.-Enfermedades Genéticas</td>
            </tr>
            <tr>
                <td>Otros</td>
            </tr>


        </table>
            <table class='valores'>
                <tr>
                    <td>Tiene</td>
                    <td>Parentesco</td>
                    <td>Genero</td>
                </tr>
                <tr>
                
                    <td>$array_neoplasias[0]</td>
                    <td>$array_neoplasias[1]</td>
                    <td>$array_neoplasias[2]</td>
                </tr>
                <tr>
                    <td>$array_tuberculosis[0]</td>
                    <td>$array_tuberculosis[1]</td>
                    <td>$array_tuberculosis[2]</td>
                </tr>
                <tr>
                    <td>$array_diabetes[0]</td>
                    <td>$array_diabetes[1]</td>
                    <td>$array_diabetes[2]</td>
                </tr>
                <tr>
                    <td>$array_artritis[0]</td>
                    <td>$array_artritis[1]</td>
                    <td>$array_artritis[2]</td>
                </tr>
                <tr>
                    <td>$array_cardiopatias[0]</td>
                    <td>$array_cardiopatias[1]</td>
                    <td>$array_cardiopatias[2]</td>
                </tr>
                <tr>
                    <td>$array_neurologicas[0]</td>
                    <td>$array_neurologicas[1]</td>
                    <td>$array_neurologicas[2]</td>
                </tr>
                <tr>
                    <td>$array_psiquiatricos[0]</td>
                    <td>$array_psiquiatricos[1]</td>
                    <td>$array_psiquiatricos[2]</td>
                </tr>
                <tr>
                    <td>$array_respiratorias[0]</td>
                    <td>$array_respiratorias[1]</td>
                    <td>$array_respiratorias[2]</td>
                </tr>
                <tr>
                    <td>$array_hepatopias[0]</td>
                    <td>$array_hepatopias[1]</td>
                    <td>$array_hepatopias[2]</td>
                </tr>
                <tr>
                    <td>$array_alergias[0]</td>
                    <td>$array_alergias[1]</td>
                    <td>$array_alergias[2]</td>
                </tr>
                <tr>
                    <td>$array_hipertension[0]</td>
                    <td>$array_hipertension[1]</td>
                    <td>$array_hipertension[2]</td>
                </tr>
                <tr>
                    <td>$array_hematologicas[0]</td>
                    <td>$array_hematologicas[1]</td>
                    <td>$array_hematologicas[2]</td>
                </tr>
                <tr>
                    <td>$array_endonicrologicas[0]</td>
                    <td>$array_endonicrologicas[1]</td>
                    <td>$array_endonicrologicas[2]</td>
                </tr>
                <tr>
                    <td>$array_geneticas[0]</td>
                    <td>$array_geneticas[1]</td>
                    <td>$array_geneticas[2]</td>
                </tr>
                <tr>
                    <td>no</td>
                    <td>Hermano</td>
                    <td>v</td>
                </tr>
            </table>
        

        
    </div>
</body>

";

    }else{
        echo "Ese usuario aún no tiene Antecedentes Heredo-Familiares <br>";
        echo <<< EOT
        <p><a href="../alta.php">Registralo aquí</a></p>
EOT;
    }
}


?>
