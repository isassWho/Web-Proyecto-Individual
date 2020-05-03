
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
        <h1><a href="lobby-general.php">Historia Clínica</a></h1>
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
                <form action="logica/dar-alta.php" method="post">
                    <p>
                        Fecha de Elaboración: <input type="text" name="fecha_elaboracion" id="fecha_elaboracion" placeholder="xxxx-xx-xx"required>
                        Nombre: <input type="text" name="nombre" placeholder="Nombre" required>
                        Género: <input type="text" name="genero" placeholder="M | F" required>                                
                        Edad: <input type="number" name="edad"  min="1" max="110" required>
                        Nacimiento: <input type="text" name="fecha_nacimiento"  placeholder="xxxx-xx-xx"required>
                        Ocupación: <input type="text" name="ocupacion" placeholder="Ocupación" required>
                        Lateralidad: <input type="text" name="lateralidad" placeholder="" required>
                        Nacionalidad: <input type="text" name="nacionalidad"  placeholder="Nacionalidad" required>
                        Religion: <input type="text" name="religion"  placeholder="Religión" required>
                        Teléfono: <input type="text" name="telefono"  placeholder="Teléfono" required>
                        Domicilio: <input type="text" name="domicilio" placeholder="Domicilio" required>
                        Teléfono de emergencia: <input type="text" name="telefono_emergencia"  placeholder="Teléfono de Emergencia" required>
                        Persona a quien quiera contactar en caso de emergencia: <input type="text" name="nombre_emergencia"  placeholder="Persona para Emergencias" required>
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
                    <form action="logica/dar-alta-antecedentes.php" method="POST">
                        
                        <table>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_neoplasias" id="si" value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_neoplasias" id="no" value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_neoplasias" id="parentesco_neoplasias" size="65%"></td>
                                <td class="quinta-col"><input type="radio" name="neoplasias_v_m" id="v" value="v"></td>
                                <td class="sexta-col"><input type="radio" name="neoplasias_v_m" id="m" value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_tuberculosis" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_tuberculosis" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_tuberculosis" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="tuberculosis_v_m" id="v"  value="v"></td>
                                <td class="sexta-col"><input type="radio" name="tuberculosis_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_diabetes" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_diabetes" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_diabetes" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="diabetes_v_m" id="v"  value="v"></td>
                                <td class="sexta-col"><input type="radio" name="diabetes_v_m" id="m"  value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_artritis" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_artritis" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_artritis" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="artritis_v_m" id="v"  value="v"></td>
                                <td class="sexta-col"><input type="radio" name="artritis_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_cardiopatias" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_cardiopatias" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_cardiopatias" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="cardiopatias_v_m" id="v"  value="v"></td>
                                <td class="sexta-col"><input type="radio" name="cardiopatias_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_neurologicas" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_neurologicas" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_neurologicas" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="neurologicas_v_m" id="v"  value="v"></td>
                                <td class="sexta-col"><input type="radio" name="neurologicas_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_psiquiatricos" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_psiquiatricos" id="no" value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_psiquiatricos" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="psiquiatricos_v_m" id="v"   value="v"></td>
                                <td class="sexta-col"><input type="radio" name="psiquiatricos_v_m" id="m"  value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_respiratorias" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_respiratorias" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_respiratorias" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="respiratorias_v_m" id="v"   value="v"></td>
                                <td class="sexta-col"><input type="radio" name="respiratorias_v_m" id="m"  value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_hepatopias" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_hepatopias" id="no" value="no" ></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_hepatopias" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="hepatopias_v_m" id="v"   value="v"></td>
                                <td class="sexta-col"><input type="radio" name="hepatopias_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_alergias" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_alergias" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_alergias" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="alergias_v_m" id="v"  value="v" ></td>
                                <td class="sexta-col"><input type="radio" name="alergias_v_m" id="m"  value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_hipertension" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_hipertension" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_hipertension" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="hipertension_v_m" id="v"  value="v" ></td>
                                <td class="sexta-col"><input type="radio" name="hipertension_v_m" id="m"  value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_hematologicas" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_hematologicas" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_hematologicas" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="hematologicas_v_m" id="v"   value="v"></td>
                                <td class="sexta-col"><input type="radio" name="hematologicas_v_m" id="m"  value="m"></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_endonicrologicas" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_endonicrologicas" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_endonicrologicas" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="endonicrologicas_v_m" id="v"  value="v" ></td>
                                <td class="sexta-col"><input type="radio" name="endonicrologicas_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_geneticas" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_geneticas" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_geneticas" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="geneticas_v_m" id="v"  value="v" ></td>
                                <td class="sexta-col"><input type="radio" name="geneticas_v_m" id="m" value="m" ></td>
                                
                            </tr>
                            <tr>
                                <td class="segunda-col"><input type="radio" name="tiene_otros" id="si"  value="si"></td>
                                <td class="tercera-col"><input type="radio" name="tiene_otros" id="no"  value="no"></td>
                                <td class="cuarta-col"><input type="text" name="parentesco_otros" id="parentesco" size="65%" ></td>
                                <td class="quinta-col"><input type="radio" name="otros_v_m" id="v"  value="v" ></td>
                                <td class="sexta-col"><input type="radio" name="otros_v_m" id="m" value="m" ></td>     
                            </tr>                                                        
                        </table> 
                        Nombre:<input type="text" name="nombre" id= "nombre"required >                          
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
