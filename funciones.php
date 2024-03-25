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

?>