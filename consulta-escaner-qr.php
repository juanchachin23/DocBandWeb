<<?php

session_start();
require 'conexion.php';
// Obtener el valor de result del formulario
$resultadoQR = $_POST['resultadoQR'];

// Consulta la base de datos para el usuario con el nombre de usuario proporcionado
$q = "SELECT * FROM docband_user WHERE id = '$resultadoQR'";

$consulta = mysqli_query($db, $q);


// Verificar si se encontraron resultados
if (mysqli_num_rows($consulta) > 0) { 
    // Inicializar una variable para almacenar los resultados
    $resultadoHTML = '';
    // Recorrer los resultados y mostrar los datos del usuario
    while ($user = mysqli_fetch_assoc($consulta)) {
        // Aquí puedes mostrar los datos del usuario
        
        $resultadoHTML.= 'Nombre: ' . $user['nombre'] . '<br>';
        $resultadoHTML.= 'Apellido: ' . $user['apellido'] . '<br>';
        $resultadoHTML.= 'Cedula: ' . $user['cedula'] . '<br>';
        $resultadoHTML.= 'Genero: ' . $user['genero'] . '<br>';
        $resultadoHTML.= 'Religion: ' . $user['religion'] . '<br>';
        $resultadoHTML.= 'F_nacimiento: ' . $user['f_nacimiento'] . '<br>';
        $resultadoHTML.= 'L_nacimiento: ' . $user['l_nacimiento'] . '<br>';
        $resultadoHTML.= 'Telefono_p: ' . $user['telefono_p'] . '<br>';
        $resultadoHTML.= 'Telefono_f: ' . $user['telefono_f'] . '<br>';
        $resultadoHTML.= 'Ocupacion: ' . $user['ocupacion'] . '<br>';
        $resultadoHTML.= 'Etnia: ' . $user['etnia'] . '<br>';
        $resultadoHTML.= 'T_sangre: ' . $user['t_sangre'] . '<br>';
        $resultadoHTML.= 'Direccion: ' . $user['direccion'] . '<br>';
        $resultadoHTML.= 'Direccion_h: ' . $user['direccion_h'] . '<br>';
        $resultadoHTML.= 'Alimentacion: ' . $user['alimentacion'] . '<br>';
        $resultadoHTML.= 'Alcohol: ' . $user['alcohol'] . '<br>';
        $resultadoHTML.= 'Fumar: ' . $user['fumar'] . '<br>';
        $resultadoHTML.= 'Cafe: ' . $user['cafe'] . '<br>';

        echo $resultadoHTML;
        
        // Agrega más campos según sea necesario
    }
} else {
    echo 'No se encontraron usuarios con ese ID.';
}


?>