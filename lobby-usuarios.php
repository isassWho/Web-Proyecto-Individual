
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lobby-administrador-estilos.css">
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
            <p>Usuario: Administrador</p>
            <a href="logica/salir.php">Cerrar Sesión</a>
            <a href="">Usuarios</a>
        </div>
        
    </header>
    <section id="ficha-identificacion">
        <h2>Administraión de usuarios</h2>
        <div class="contenedor">
            <!--contenido-->
            <p><a href="">Consulta</a></p>
            <p><a href="alta-usuario.php">Alta</a></p>
            <p><a href="">Dar de Baja</a></p>
            <p><a href="">Editar</a></p>
        </div>
    </section>

    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados ©</p>
    </footer>
    

</body>
</html>
