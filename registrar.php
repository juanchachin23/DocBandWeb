<?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estatus = $_POST['estatus'];
    $cedula = $_POST['cedula'];
    $genero = $_POST['genero'];
    $religion = $_POST['religion'];
    $nacimiento = $_POST['nacimiento'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $num_p = $_POST['num_p'];
    $num_f = $_POST['num_f'];
    $ocupacion = $_POST['ocupacion'];
    $etnia = $_POST['etnia'];
    $tipo_s = $_POST['t_sangre'];
    $direccion = $_POST['direccion'];
    $direccion_h = $_POST['direccion_h'];
    $alimentacion = $_POST['alimentacion'];
    $alcohol = $_POST['alcohol'];
    $fumar = $_POST['fumar'];
    $cafe = $_POST['cafe'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $contraseña_r = $_POST['contraseña_r'];
    $medico = $_POST['medico'];

    echo "<h1>Nombre: " . $nombre."</h1><br>";
    echo "Apelldo: " . $apellido."<br>";
    echo "Estatus: " .$estatus."<br>";
    echo "Cedula: " . $cedula."<br>";
    echo "Genero: " . $genero."<br>";
    echo "Religion: " . $religion."<br>";
    echo "Fecha Nacimiento: " . $nacimiento."<br>";
    echo "Lugar Nacimiento: " . $lugar_nacimiento."<br>";
    echo "Telefono Personal: " . $num_p."<br>";
    echo "Telefono Familiar: " . $num_f."<br>";
    echo "Ocupacion: " . $ocupacion."<br>";
    echo "Etnia: " . $etnia."<br>";
    echo "Tipo De Sangre: " . $tipo_s."<br>";
    echo "Dirección: " . $direccion."<br>";
    echo "Direccion Habitual: " . $direccion_h."<br>";
    echo "Alimentacion: " .  $alimentacion."<br>";
    echo "Alcohol: " . $alcohol."<br>";
    echo "Fumar: " . $fumar."<br>";
    echo "Cafe: " . $cafe."<br>";
    echo "Correo: " . $correo."<br>";
    echo "Contraseña: " . $contraseña."<br>";
    echo "Contraseña r: " . $contraseña_r ."<br>";
    echo "Doctor: " . $medico ."<br>";



?>