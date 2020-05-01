
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alta-estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Historia Clínica</title>
</head>

<body>
    <?php
        session_start(); 
        $usuario = $_SESSION['username'];
        //si no hay variable de sesion se reedirige a el login
        if(!isset($usuario)){
            header("location: login.php");
        }
    ?>

    <header>
        <h1><a href="lobby-administrador.php">Historia Clínica</a></h1>
        <img src="imagenes/simbolo-salud.png" alt="">
        <div>
            <a href="logica/salir.php">Cerrar Sesión</a>
        </div>
        
    </header>
    <section id="ficha-identificacion">
        <h2>Alta</h2>
        <div class="contenedor">
            <div class="titulo-formulario">
                <h3>Ficha de Identificación</h3>
            </div>
            
            <div class="formulario">
                <form action="" method="post">
                    <p>
                        Fecha de Elaboración: <input type="date" name="fecha-elaboracion" id="fecha-elaboracion">
                        Nombre: <input type="text" name="nombre" placeholder="Nombre">
                        Género: <select id="genero">
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                        Edad: <input type="number" name="edad"  min="1" max="110">
                        Nacimiento: <input type="date" name="fecha-nacimiento">
                        Ocupación: <input type="text" name="ocupacion" placeholder="Ocupación">
                        Lateralidad: <select id="lateralidad">
                            <option value="diestro">Diestro</option>
                            <option value="zurdo">Zurdo</option>
                            <option value="ambidiestro">Ambidiestro</option>
                        </select>Nacionalidad: <input type="text" name="nacionalidad"  placeholder="Nacionalidad">
                        Religion: <input type="text" name="religion"  placeholder="Religión">
                        Teléfono: <input type="text" name="telefono"  placeholder="Teléfono">
                        Domicilio: <input type="text" name="domicilio" placeholder="Domicilio">
                        Teléfono de emergencia: <input type="text" name="telefono-emergencia"  placeholder="Teléfono de Emergencia">
                        Persona a quien quiera contactar en caso de emergencia: <input type="text" name="nombre-emergencia"  placeholder="Persona para Emergencias">
                    </p>
                    <input type="submit" name="guardas" value="Guardar" style="float: right;">
                </form>
            </div>
        </div>
    </section>

    <section id="antecedentes">
        <div class="contenedor">
            <table>
                <h3>Antecedentes Heredo-familiares</h3>
                
                <tr>
                    <th class="primera-col">Enfermedades</th>
                    <th class="segunda-col">Si</th>
                    <th class="tercera-col">No</th>
                    <th class="cuarta-col">Parentesco</th>
                    <th class="quinta-col">V</th>
                    <th class="sexta-col">M</th>
                </tr>             

            </table>
            <div class="contenido">
                <div class="columna">
                    <table>

                        <tr>
                            <td>1.- Neoplasias</td>
                        </tr>
                        <tr>
                            <td>2.- Tuberculosis</td>
                        </tr>
                        <tr>
                            <td>3.- Diabetes</td>
                        </tr>
                        <tr>
                            <td>4.- Artritis</td>
                        </tr>
                        <tr>
                            <td>5.- Cardiopatrias</td>
                        </tr>
                        <tr>
                            <td>6.- Enfermedades Neurológicas</td>
                        </tr>
                        <tr>
                            <td>7.- Transtornos Psiquiátricos</td>
                        </tr>
                        <tr>
                            <td>8.- Enfermedades Respiratorias</td>
                        </tr>
                        <tr>
                            <td>9.- Hepatopías</td>
                        </tr>
                        <tr>
                            <td>10.- Alergías</td>
                        </tr>
                        <tr>
                            <td>11.- Hipertensión</td>
                        </tr>
                        <tr>
                            <td>12.- Enfermedades Hematológicas</td>
                        </tr>
                        <tr>
                            <td>13.- Enfermedades Endonicrológicas</td>
                        </tr>
                        <tr>
                            <td>14.- Enfermedades Genéticas</td>
                        </tr>
                        <tr>
                            <td>Otros</td>
                        </tr>
                        
                    </table>
                </div>
                <div class="form">
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-neoplasias" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-neoplasias" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="neoplasias-v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="neoplasias-v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-tuberculosis" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-tuberculosis" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="tuberculosis-v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="tuberculosis-v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-diabetes" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-diabetes" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-artritis" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-artritis" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-cardiopatrias" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-cardiopatrias" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-neurologicas" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-neurologicas" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-psiquiatricos" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-psiquiatricos" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-respiratorias" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-respiratorias" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-hepatopias" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-hepatopias" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-alergias" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-alergias" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-hipertension" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-hipertension" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-hematologicas" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-hematologicas" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-endonicrologicas" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-endonicrologicas" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-geneticas" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-geneticas" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene-otros" id="si" required></td>
                                <td class="tercera-col"><input type="radio" name="tiene-otros" id="no" required></td>
                                <td class="cuarta-col"><input type="text" name="neoplasias" id="parentesco" size="65%" required></td>
                                <td class="quinta-col"><input type="radio" name="v-m" id="v" required></td>
                                <td class="sexta-col"><input type="radio" name="v-m" id="m" required></td>     
                            </tr>                                                        
                        </table>                           
                    <input type="submit" name="guardas" value="Guardar" style="float: right;"> 
                    </form>
                </div>
            </div>


        </div>
    </section>

    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados ©</p>
    </footer>
    

</body>
</html>
