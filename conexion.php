<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "docbanddb";

$db = mysqli_connect($host, $user, $password, $database);

if ($db) {
    echo "conectado correctamente";
} else {

    echo "Conexion Fallida";

}

?>

