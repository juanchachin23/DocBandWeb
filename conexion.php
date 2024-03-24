<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "docbanddb";

$db = new mysqli($host, $user, $password, $database);

if (!$db){

    echo "Conexion Fallida";

}

?>
