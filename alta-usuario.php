
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
                <form action="logica/dar-alta-usuario.php" method="post">
                    <p>
                        Correo: <input type="text" name="correo" placeholder="Correo" required>
                        Género: <input type="text" name="pass" placeholder="Contraseña" required>
                        Tipo: <select name="tipo" id="tipo">
                            <option value="admin">Administrador</option>
                            <option value="general">General</option>
                        </select>                               
                    </p>
                    <input type="submit" name="guardas" value="Guardar" style="float: right;">
                </form>
            </div>
        </div>
    </section>


    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados ©</p>
    </footer>
    

</body>
</html>
