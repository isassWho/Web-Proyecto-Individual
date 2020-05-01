
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modificar-estilos.css">
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
        <h1><a href="lobby-administrador.html">Historia Clínica</a></h1>
        <img src="imagenes/simbolo-salud.png" alt="">
        <div>
            <p>Usuario: Administrador</p>
            <a href="logica/salir.php">Cerrar Sesión</a>
        </div>
        
    </header>
    <section id="ficha-identificacion">
        <h2>Modificar</h2>
        <div class="contenedor">
            <!--contenido-->
            <form action="" method="post">
                <p>Nombre</p><input type="text" name="nombre" placeholder="Ingresa el Nombre" required>
                <p>Campo a modificar: </p>
                <select name="campo-a-modificar" id="campo-a-modificar" required>
                    <option value="fecha-elaboracion">Fecha de Elaboración</option>
                    <option value="nombre">Nombre</option>
                    <option value="genero">Genero</option>
                    <option value="edad">Edad</option>
                    <option value="fecha-nacimiento">Fecha de Nacimiento</option>
                    <option value="nacionalidad">Nacionalidad</option>
                    <option value="religion">Teléfono</option>
                    <option value="domicilio">Domicilio</option>
                    <option value="telefono-emergencia">Telefono de Emergencia</option>
                    <option value="nombre-emergencia">Nombre de Emergencia</option>
                </select>
                <p>Nuevo valor</p><input type="text" name="nombre" placeholder="Ingresa el nuevo calor" required>
                <input type="submit" name ="actualizar" value="Actualizar">
            </form>
        </div>
    </section>

    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados ©</p>
    </footer>
    

</body>
</html>
