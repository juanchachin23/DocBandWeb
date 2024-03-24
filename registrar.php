 <?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['estatus'] . $_POST['cedula'];
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
    $palabra_s = $_POST['palabraSecreta'];
    $medico = $_POST['medico'];

    $db = new mysqli("localhost", "root", "", "docbanddb");

    $db_insert = "insert into docband_user (nombre, apellido, cedula, genero, religion, f_nacimiento, l_nacimiento, telefono_p, telefono_f, ocupacion, etnia, t_sangre, direccion, direccion_h, alimentacion, alcohol, fumar, cafe, correo, contraseña, contraseña_f, medico) VALUES ('$nombre', '$apellido', '$cedula', '$genero', '$religion', '$nacimiento', '$lugar_nacimiento', '$num_p', '$num_f', '$ocupacion', '$etnia', '$tipo_s', '$direccion', '$direccion_h', '$alimentacion', '$alcohol', '$fumar', '$cafe', '$correo', '$contraseña', '$palabra_s', '$medico')";

    $sql_rest = mysqli_query($db, $db_insert);

    if($sql_rest){

        echo "Bueno";

    }

    else{

        echo "Bueno";


    }

?>

