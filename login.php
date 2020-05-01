
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-estilos.css">
    <title>Hospital</title>
</head>
<body>
    <header>
        <h1>Historia Clínica</h1>
        <img src="imagenes/simbolo-salud.png" alt="">
    </header>
    
    <section id ="iniciar-sesion">
        <!-- Tab links -->
        <div class="panel-tab">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'iniciar-cuenta')">Iniciar Sesión</button>
            </div>

            <!-- Tab content -->
            <div>
                <div id="iniciar-cuenta" class="tabcontent">
                    <form action="logica/logear.php" method="POST">

                        <input type="email" name = "correo" placeholder = "Correo" required>
                        <input type="password" name = "pass" placeholder = "Contraseña" required>
                        <input type="submit" name="Ingresar" value="Ingresar">
                    </form>
                </div>   
            </div>
        </div>
    </section>
    
    <footer>
        <p>Gustavo Isaí Vázquez Lugo</p>
        <p>Todos los derechos reservados</p>
    </footer>







    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script>
        function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>


