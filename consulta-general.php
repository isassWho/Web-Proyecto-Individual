
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
        <h1><a href="lobby-general.php">Historia Clínica</a></h1>
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
            
                <!--contenido-->
                <form action="logica/consultar-paciente.php" method="post">
                    <p>Ingresa el nombre</p><input type="text" name="nombre" required>
                    <input type="submit" name ="buscar" value="Buscar">
                </form>
                <h3 style="border-bottom: 2px dotted black;">Antecedentes heredo-familiares</h3>
                <form action="logica/consultar-paciente-antecedentes.php" method="post">
                    <p>Ingresa el nombre</p><input type="text" name="nombre" required>
                    <input type="submit" name ="buscar" value="Buscar">
                </form>
        
            </div>
        </div>
    </section>


    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados</p>
    </footer>
    

</body>
</html>
