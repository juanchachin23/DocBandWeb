<?php

session_start();
$correo = $_SESSION['correo'];

$db = new mysqli("localhost", "root", "", "docbanddb");

require_once ("../funciones.php");
$name_error = "";
$flag = True;

$nombre =  capitalize ($_POST['nombre_r']);
$apellido = capitalize ($_POST['apellido_r']);
$cedula = $_POST['status_r'] . "-".$_POST['cedula_r'];
$genero = $_POST['genero_r'];
$religion = $_POST['religion_r'];
$nacimiento = $_POST['nacimiento_r'];
$lugar_nacimiento = capitalize($_POST['lugar_nacimiento_r']);
$num_p = $_POST['num_p_r'];
$num_f = $_POST['num_f_r'];
$ocupacion = capitalize($_POST['ocupacion_r']);
$etnia = $_POST['etnia_r'];
$tipo_s = $_POST['t_sangre_r'];
$direccion = capitalize($_POST['direccion_r']);
$direccion_h = capitalize($_POST['direccion_h_r']);
$alimentacion = $_POST['alimentacion_r'];
$alcohol = $_POST['alcohol_r'];
$fumar = $_POST['fumar_r'];
$cafe = $_POST['cafe_r'];

// Insert
if ($flag){

    $db_insert = "UPDATE docband_user SET nombre = '$nombre',apellido ='$apellido', cedula='$cedula', genero='$genero', religion ='$religion', f_nacimiento='$nacimiento', l_nacimiento='$lugar_nacimiento',telefono_p='$num_p', telefono_f = '$num_f',ocupacion='$ocupacion', etnia='$etnia',t_sangre='$tipo_s',direccion='$direccion',direccion_h='$direccion_h',alimentacion='$alimentacion',alcohol='$alcohol',fumar='$fumar',cafe='$cafe' WHERE correo = '$correo';";
    
    $sql_rest = mysqli_query($db, $db_insert);

    if($sql_rest){

        header("Location: ../informacion-personal.php?mensaje=Usuario+Registrado+Satisfactoriamente+,+Cierre+Sesión+He+Inicie+Nuevamente");
       
        exit();

    }

    else{

        header("Location: Registrarse.php?mensaje=Error:+Registro+No+Exitoso");

    exit();

    }
}

else{

    header("Location: Registrarse.php?mensaje=Error:+Registro+No+Exitoso");

    exit();

}



?>
