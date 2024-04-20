<?php

function clean_data($data){

    $data = trim ($data);
    $data = stripcslashes ($data);
    $data = htmlspecialchars($data);
    
    return $data;
    
}

function capitalize($str, $encoding = 'UTF-8') {

    $str = mb_strtolower($str, $encoding);

    $arrStr = explode(' ', $str);

    $pushArray = [];

    foreach( $arrStr as $value ) {

        if ( mb_strlen($value, $encoding) > 1 ) {

            $pushArray[] = mb_convert_case($value, MB_CASE_TITLE, $encoding);
        }
        else {
            $pushArray[] = $value;
        }
    }

    return implode(' ', $pushArray); 

}

function no_num_str ($string){

    $patron = "/^[a-zA-Z\s]+$/";

    if (preg_match($patron, $string)) {
        
        return True;
      
    } else {

        return False;

    }

    return True;

}

function only_num_str ($num){

    $patron = "/^[0-9]+$/";

    if (preg_match($patron, $num)) {

        return True;

    } 
    
    else {

        return False;
    
    }

    return True;

}

function validated_password ($password){

    $patron = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){6,16}$/";

    if (preg_match($patron, $password)) {

        return True;

    } 

    else {

        return False;

    }

    return True;
    
}

function select_cedula ($cedula){

    $b = "";

    $db = new mysqli("localhost", "root", "", "docbanddb");

    $db_select = "SELECT cedula FROM docband_user WHERE cedula = '$cedula';";
    
    $a = mysqli_query($db, $db_select);

    foreach ($a as $fila) {
     
            $b = $fila["cedula"];
         
        }

        if ($b == ''){

            return True;

        }

        elseif ($b != ''){

            return False;

        }

}

function select_correo ($correo){

    $b = "";

    $db = new mysqli("localhost", "root", "", "docbanddb");

    $db_select = "SELECT correo FROM docband_user WHERE correo = '$correo';";
    
    $a = mysqli_query($db, $db_select);

    foreach ($a as $fila) {
     
            $b = $fila["correo"];
         
        }

        if ($b == ''){

            return True;

        }

        elseif ($b != ''){

            return False;

        }

}

function select_telefono ($tlf){

    $b = "";

    $db = new mysqli("localhost", "root", "", "docbanddb");

    $db_select = "SELECT telefono_p FROM docband_user WHERE telefono_p = '$tlf';";
    
    $a = mysqli_query($db, $db_select);

    foreach ($a as $fila) {
     
            $b = $fila["telefono_p"];
         
        }

        if ($b == ''){

            return True;

        }

        elseif ($b != ''){

            return False;

        }

}

?>