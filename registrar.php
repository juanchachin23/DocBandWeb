 <?php

    $db = new mysqli("localhost", "root", "", "docbanddb");

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

    $foto= $_FILES['foto'];
    $tmp_name =$foto['tmp_name'];

    $img_file=$foto['name'];
    $img_type=$foto['type'];

    $directorio_destino = "assets/pic/";


    //Foto 
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))){


        $destino = $directorio_destino . $img_file;

    }

    else{

        $flag = False;
        header("Location: Registrarse.php?mensaje=Foto:+Formato+No+Permitido");
    
        exit();


    }


    // Validacion Nombre
    if ($flag) {

        // Verificar si el nombre contiene un numero
        if (!no_num_str($nombre)){

            $flag = False;

            header("Location: Registrarse.php?mensaje=El+Nombre+No+Puede+Contener+Numeros+Ni+Caracteres+Especiales");
    
            exit();

        }

    }

    // Validacion Apellido
    if ($flag) {

        // Verificar si el apellido contiene un numero
        if (!no_num_str($apellido)){

            $flag = False;

            header("Location: Registrarse.php?mensaje=El+Apellido+No+Puede+Contener+Numeros+Ni+Caracteres+Especiales");
    
            exit();

        }

    }

    // Validacion Cedula
    if ($flag) {

        $v_cedula = intval($_POST['cedula']);
        
        if ($v_cedula < 1000000){

            $flag = False;

            header("Location: Registrarse.php?mensaje=Cedula+Invalida:+No+Puede+Ser+Menor+a+1.000.000");
    
            exit();


        }

        if ($v_cedula > 60000000){

            $flag = False;

            header("Location: Registrarse.php?mensaje=Cedula+Invalida:+No+Puede+Ser+Menor+a+60.000.000");
    
            exit();

        }

        if (!only_num_str($v_cedula)){

            $flag = False;

            header("Location: Registrarse.php?mensaje=Cedula+Invalida,+No+Puede+Contener+Letras+Ni+Caracteres+Especiales");
    
            exit();


        }

        if (!select_cedula($cedula)){

            $flag = False;

            header("Location: Registrarse.php?mensaje=Cedula+Ya+Registrada,+$cedula");
    
            exit();

        }

        
    }

    //Validacion Contraseña
    if ($flag){

        if ($contraseña != $contraseña_r){

            $flag = False;

            header("Location: Registrarse.php?mensaje=Las+Contraseñas+No+Son+Iguales");
    
            exit();

        }

        if ($contraseña == $palabra_s) {
            
            $flag = False;

            header("Location: Registrarse.php?mensaje=Las+Contraseñas+No+Son+Iguales");
    
            exit();


        }

        if (!validated_password($contraseña)) {
            
            $flag = False;

            header("Location: Registrarse.php?mensaje=Contraseña+Invalida:+La+Contraseña+Debe+Contener:+<br>1 Caracter Especial <br>1 Número<br>1 Letra en mayuscula<br>1 Letra en minuscula.");
    
            exit();

        }

        if (!validated_password($palabra_s)) {
            
            $flag = False;

            header("Location: Registrarse.php?mensaje=Contraseña+Invalida:+La+Contraseña+Debe+Contener:+<br>1 Caracter Especial <br>1 Número<br>1 Letra en mayuscula<br>1 Letra en minuscula.");
    
            exit();

        }

    }

    // Validacion Correo
    if (!select_correo($correo)){

        $flag = False;

        header("Location: Registrarse.php?mensaje=El+Correo+Electronico+Ya+Ha+Sido+Registrado<br>Intenta+Con+Otro+Correo+Electronico");
    
        exit();

    }

    if(!select_telefono($num_p)){

        $flag = False;

        header("Location: Registrarse.php?mensaje=El+Numero+Telefonico+Ya+Ha+Sido+Registrado<br>Intenta+Con+Otro+Numero+Telefonico");
    
        exit();

    }

    // Insert
    if ($flag){

        
        $db_insert = "insert into docband_user (nombre, apellido, cedula, genero, religion, f_nacimiento, l_nacimiento, telefono_p, telefono_f, ocupacion, etnia, t_sangre, direccion, direccion_h, alimentacion, alcohol, fumar, cafe, correo, contraseña, contraseña_f, medico, foto) VALUES ('$nombre', '$apellido', '$cedula', '$genero', '$religion', '$nacimiento', '$lugar_nacimiento', '$num_p', '$num_f', '$ocupacion', '$etnia', '$tipo_s', '$direccion', '$direccion_h', '$alimentacion', '$alcohol', '$fumar', '$cafe', '$correo', '$contraseña', '$palabra_s', '$medico', '$destino')";
        
        $sql_rest = mysqli_query($db, $db_insert);

        if($sql_rest){
            move_uploaded_file($tmp_name,$destino);
            header("Location: inicio-de-sesion.php?mensaje=Usuario+Registrado+Satisfactoriamente");
    
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

