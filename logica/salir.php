
<?php
session_start();

//se destruye la sesion
session_destroy();
//se reedirige a pagina de login
header("location: ../login.php");
//sale de la sesion
exit();

?>
