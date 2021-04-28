<?php

     session_start();

     include 'conexion_be.php';

     $user = $_POST['Usuario'];

     $password = $_POST['password'];

     $validar_login = mysqli_query($conexion, "SELECT * FROM admins WHERE user='$user' and password='$password'");

     if(mysqli_num_rows($validar_login) > 0){
         $_SESSION['admin'] = $user;
         header("location: ../TrainOfTrainers.php");
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