<?php

require ('../funciones.php');

$flag = True;
$message = "";

$consulta_correo = "";
$consulta_palabra = "";
$consulta_contraseña = "";

$correo = $_POST['correo_r'];
$cedula = $_POST['cedula_r'];
$palabra_e = $_POST['palabra_r'];
$contraseña_p = $_POST['contraseñap_r'];
$contraseña_s = $_POST['contraseñas_r'];

    if (!select_cedula($cedula)){

        $db = new mysqli("localhost", "root", "", "docbanddb");

        $db_select = "SELECT correo, contraseña_f, contraseña FROM docband_user WHERE cedula = '$cedula';";
        
        $a = mysqli_query($db, $db_select);

        $fila = $a ->fetch_array();

        $consulta_correo = $fila['correo'];
        $consulta_palabra = $fila['contraseña_f'];
        $consulta_contraseña = $fila['contraseña'];

    }

    else {

        $flag = False;

        header("Location: ../Reestablecer-contraseña.php?mensaje=Cedula+No+Existe");

        exit();

    }

    //Verificar correo
    if ($flag){

        if ($consulta_correo != $correo){

            $flag = False;
    
            header("Location: ../Reestablecer-contraseña.php?mensaje=El+Correo+No+Existe");
    
            exit();
    
        }

    }

    //Verificar Palabra Secreta
    if($flag){

        if ($palabra_e != $consulta_palabra){

            $flag = False;
    
            header("Location: ../Reestablecer-contraseña.php?mensaje=La+Palabra+Secreta+No+Coincide");
    
            exit();
    
        }

    }

    //Verificar Contraseñas

    //Validacion Contraseña
    if ($flag){
        
        //Verificar Si Las Contraseñas Son Iguales
        if ($contraseña_p != $contraseña_s){

            $flag = False;
    
            header("Location: ../Reestablecer-contraseña.php?mensaje=Las+Contraseñas+No+Coinciden");
    
            exit();

        }

        //Verificar Si La Contraseña Es Igual A La Palabra Secreta
        if ($contraseña_p == $consulta_palabra) {
            
            $flag = False;
    
            header("Location: ../Reestablecer-contraseña.php?mensaje=La+Contraseña+No+Puede+Ser+Igual+A+La+Palabra+Secreta");
    
            exit();

        }

         //Verificar Si La Contraseña Es Igual A La Contraseña Vieja
        if ($contraseña_p == $consulta_contraseña) {
            
            $flag = False;
    
            header("Location: ../Reestablecer-contraseña.php?mensaje=La+Contraseña+No+Puede+Ser+Igual+A+La+Contraseña+Antigua");
    
            exit();

        }

        if (!validated_password($contraseña_p)) {
            
            $flag = False;
    
            header("Location: ../Reestablecer-contraseña.php?mensaje=Contraseña+Invalida:+La+Contraseña+Debe+Contener:+<br>1 Caracter Especial <br>1 Número<br>1 Letra en mayuscula<br>1 Letra en minuscula.");
    
            exit();
        }

    }


    if ($flag){

        
        $db_insert = "UPDATE docband_user SET contraseña = '$contraseña_p' WHERE cedula = '$cedula';";

        $sql_rest = mysqli_query($db, $db_insert);

        if($sql_rest){

            header("Location: ../inicio-de-sesion.php?mensaje=La+Contraseña+Ha+Sido+Actualizada+Exitosamente");
            
        }

        else{
            header("Location: ../Reestablecer-contraseña.php?mensaje=Error+Registro+No+Exitoso");

        }
    }

    else{

        header("Location: ../Reestablecer-contraseña.php?mensaje=Error+Registro+No+Exitoso");

    }

?>
