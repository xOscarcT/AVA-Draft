<?php

     session_start();

     if(!isset($_SESSION['user'])){
         echo '
            <script>
                alert("Debe iniciar sesion primero.");
                window.location = "index.php";
            </script>
         ';
         session_destroy();
         die();
     }
     session_destroy();
?>

<!DOCTYPE html>
<html lang=”es”>
<head>
    <meta charset=”UTF-8″ />
    <title>Curso BCC</title>
</head>
<body> 
    <h1> B I E N V E N I D O </h1>
    <h2> Curso BCC </h2>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>