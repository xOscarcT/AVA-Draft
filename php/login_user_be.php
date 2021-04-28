<?php

     session_start();

     include 'conexion_be.php';

     $user = $_POST['Usuario'];

     $password = $_POST['password'];

     $course = $_POST['Course'];

     $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE user='$user' and password='$password'");

     if(mysqli_num_rows($validar_login) > 0){
         $_SESSION['user'] = $user;
         switch ($course) {
             case 'AFC':
                header("location: ../User_AFC-Course.php");
                break;
             case 'BCC':
                header("location: ../User_BCC-Course.php");
                break;
             case 'BCC CD PANT':
                header("location: ../User_BCC_CD_PANT-Course.php");
                break;
         }
         exit();
     }
     else{
         echo'
         <script>
             alert("No existe el usuario, verifique los datos.");
             window.location = "../index.php";
         </script>
         ';
         exit();
     }
?>