 <?php

    require_once ("funciones.php");
    $name_error = "";
    $flag = True;

    $nombre =  capitalize ($_POST['nombre']);
    $apellido = capitalize ($_POST['apellido']);
    $cedula = $_POST['estatus'] . "-".$_POST['cedula'];
    $genero = $_POST['genero'];
    $religion = $_POST['religion'];
    $nacimiento = $_POST['nacimiento'];
    $lugar_nacimiento = capitalize($_POST['lugar_nacimiento']);
    $num_p = $_POST['num_p'];
    $num_f = $_POST['num_f'];
    $ocupacion = capitalize($_POST['ocupacion']);
    $etnia = $_POST['etnia'];
    $tipo_s = $_POST['t_sangre'];
    $direccion = capitalize($_POST['direccion']);
    $direccion_h = capitalize($_POST['direccion_h']);
    $alimentacion = $_POST['alimentacion'];
    $alcohol = $_POST['alcohol'];
    $fumar = $_POST['fumar'];
    $cafe = $_POST['cafe'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $contraseña_r = $_POST['contraseña_r'];
    $palabra_s = $_POST['palabraSecreta'];
    $medico = $_POST['medico'];

    // Validacion Nombre
    if ($flag) {

        // Verificar si el nombre contiene un numero
        if (!no_num_str($nombre)){

            $flag = False;
            $name_error = "El nombre no puede contener numeros ni caracteres especiales.";

        }

    }

    // Validacion Apellido
    if ($flag) {

        // Verificar si el apellido contiene un numero
        if (!no_num_str($apellido)){

            $flag = False;
            $name_error = "El apellido no puede contener numeros ni caracteres especiales.";

        }

    }

    // Validacion Cedula
    if ($flag) {

        $v_cedula = intval($_POST['cedula']);
        
        if ($v_cedula < 1000000){

            $flag = False;
            $name_error = "Cedula Invalida, no puede ser menor a 1.000.000.";

        }

        if ($v_cedula > 60000000){

            $flag = False;
            $name_error = "Cedula Invalida, no puede ser mayor a 60.000.000.";

        }

        if (!only_num_str($v_cedula)){

            $flag = False;
            $name_error = "Cedula Invalida, no puede contener letras ni caracteres especiales.";

        }

    }

    //Validacion Contraseña
    if ($flag){

        if ($contraseña != $contraseña_r){

            $flag = False;
            $name_error = "Contraseña Las Contraseñas no son iguales.";

        }

        if ($contraseña == $palabra_s) {
            
            $flag = False;
            $name_error = "La contraseña no puede ser igual a la contraseña especial.";

        }

        if (!validated_password($contraseña)) {
            
            $flag = False;
            $name_error = "Contraseña Invalida: la contraseña debe contener 1. 1 Caracter Especial \n2.1 Número\n3. 1 Letra en mayuscula\n4. 1 Letra en minuscula.";

        }

        if (!validated_password($palabra_s)) {
            
            $flag = False;
            $name_error = "Contraseña Especial Invalida: la contraseña debe contener 1. 1 Caracter Especial \n2.1 Número\n3. 1 Letra en mayuscula\n4. 1 Letra en minuscula.";

        }

    }


    // Insert
    if ($flag){

        $db = new mysqli("localhost", "root", "", "docbanddb");
        $db_insert = "insert into docband_user (nombre, apellido, cedula, genero, religion, f_nacimiento, l_nacimiento, telefono_p, telefono_f, ocupacion, etnia, t_sangre, direccion, direccion_h, alimentacion, alcohol, fumar, cafe, correo, contraseña, contraseña_f, medico) VALUES ('$nombre', '$apellido', '$cedula', '$genero', '$religion', '$nacimiento', '$lugar_nacimiento', '$num_p', '$num_f', '$ocupacion', '$etnia', '$tipo_s', '$direccion', '$direccion_h', '$alimentacion', '$alcohol', '$fumar', '$cafe', '$correo', '$contraseña', '$palabra_s', '$medico')";
        $sql_rest = mysqli_query($db, $db_insert);

        if($sql_rest){
            echo "Registro Exitoso.";
        }

        else{
            echo "ERROR: El Registro No Fue Exitoso.";
        }
    }

    else{

        echo "ERROR: " . $name_error;

    }

    

?>

