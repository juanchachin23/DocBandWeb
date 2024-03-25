<?php
require '../conexion.php';
session_start();

$usuario = $_POST['correo_l'];
$clave = $_POST['contraseña_l'];

// Consulta la base de datos para el usuario con el nombre de usuario proporcionado
$q = "SELECT * FROM docband_user WHERE correo = '$usuario'";

$consulta = mysqli_query($db, $q);
$user = mysqli_fetch_array($consulta);


// Verifica si el usuario existe y si la contraseña proporcionada es correcta
if ($user && $clave === $user['contraseña']) {
    // El nombre de usuario y la contraseña son correctos
    $_SESSION['username'] = $usuario;
    //guardar la variable usuario (correo) en una variable de sesion
    $_SESSION['nombre_usuario'] = $user['nombre'];
    // Guardar el nombre de usuario en una variable de sesión
    $_SESSION['correo'] = $user['correo'];
    // Guardar el correo del usuario en una variable de sesión
    $_SESSION['identificador'] = $user['id'];
    // Guardar el id del usuario en una variable de sesión
    if ($user['medico'] == "Si") {
        header("location: ../paginaPrincipal-medico.php");
    } else {
        header("location: ../index.php");
    }
} else {
    // El nombre de usuario o la contraseña son incorrectos
    header("Location: ../inicio-de-sesion.php?mensaje=NOMBRE+DE+USUARIO+O+CONTRASEÑA+INVALIDA.");
    exit();
}

?>

