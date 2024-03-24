<?php

    include ('conexion.php');

    if (isset($_POST['contraseña_l'])){

        echo 'Mi correo: ' . $_POST['correo_l'] . "<br>";
        echo 'Mi Contraseña: ' . $_POST['contraseña_l'];    

    }

    else{

        header("Location: inicio-de-sesion.php?error=Homosexual");
        exit();

    }

    
?>
