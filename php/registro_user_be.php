<?php

     include 'conexion_be.php';

     $user = $_POST['Usuario'];
     $password = $_POST['password'];

     $query = "INSERT INTO users(user, password)
               VALUES('$user', '$password')";
    
    //VERIFICACION DE DATOS REPETIDOS
    $verificar_user = mysqli_query($conexion, "SELECT * FROM users WHERE user='$user' ");

    if(mysqli_num_rows($verificar_user)> 0){
        echo '
        <script>
             alert("El nombre de usuario ya se encuentra registrado.");
             window.location = "../index.php";
        </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert ("Usuario registrado.");
        window.location = "../index.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert ("Intente nuevamente.");
        window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);

?>