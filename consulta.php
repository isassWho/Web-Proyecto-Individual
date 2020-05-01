
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consulta-estilos.css">
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
        <h2>Consulta</h2>
        <div class="contenedor">
            <div class="titulo-formulario">
                <h3>Ficha de Identificación</h3>
            </div>
            
            <div class="formulario">
                <form action="" method="post">
                    <p>
                    Fecha de Elaboración: <input type="date" name="fecha-elaboracion" id="fecha-elaboracion">
                    Nombre: <input type="text" name="nombre">
                    Género: <select id="genero">
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="otro">Otro</option>
                            </select>
                    Edad: <input type="number" name="edad"  min="1" max="110">
                    Nacimiento: <input type="date" name="fecha-nacimiento">
                    Ocupación: <input type="text" name="ocupacion">
                    Lateralidad: <input type="text" name="lateralidad">
                    Nacionalidad: <input type="text" name="nacionalidad">
                    Religion: <input type="text" name="religion">
                    Teléfono: <input type="text" name="telefono">
                    Domicilio: <input type="text" name="domicilio">
                    Teléfono de emergencia: <input type="text" name="telefono-emergencia">
                    Persona a quien quiera contactar en caso de emergencia: <input type="text" name="nombre-emergencia">
                </p>
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
                <tr>
                    <td class="primera-col">1.- Neoplasias</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">2.- Tuberculosis</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">3.- Diabetes</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">4.- Artritis</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">5.- Cardiopatrias</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">6.- Enfermedades Neurológicas</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">7.- Transtornos Psiquiátricos</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">8.- Enfermedades Respiratorias</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">9.- Hepatopías</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">10.- Alergías</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">11.- Hipertensión</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">12.- Enfermedades Hematológicas</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">13.- Enfermedades Endonicrológicas</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">14.- Enfermedades Genéticas</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                <tr>
                    <td class="primera-col">Otros</td>
                    <td class="segunda-col"></td>
                    <td class="tercera-col"></td>
                    <td class="cuarta-col"></td>
                    <td class="quinta-col"></td>
                    <td class="sexta-col"></td>
                    
                </tr>
                

            </table>


        </div>
    </section>

    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados</p>
    </footer>
    

</body>
</html>
