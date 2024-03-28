<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "docbanddb";

$db = mysqli_connect($host, $user, $password, $database);

if ($db) {
    
} else {

    echo "Conexion Fallida";

}

?>

