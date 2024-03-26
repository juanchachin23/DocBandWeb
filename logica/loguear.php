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
    $_SESSION['apellido_usuario'] = $user['apellido'];
    $_SESSION['cedula'] = $user['cedula'];
    $_SESSION['genero'] = $user['genero'];
    $_SESSION['religion'] = $user['religion'];
    $_SESSION['f_nacimiento'] = $user['f_nacimiento'];
    $_SESSION['l_nacimiento'] = $user['l_nacimiento'];
    $_SESSION['n_personal'] = $user['telefono_p'];
    $_SESSION['n_familiar'] = $user['telefono_f'];
    $_SESSION['ocupacion'] = $user['ocupacion'];
    $_SESSION['etnia'] = $user['etnia'];
    $_SESSION['t_sangre'] = $user['t_sangre'];
    $_SESSION['direccion'] = $user['direccion'];

    $_SESSION['direccion_h'] = $user['direccion_h'];
    $_SESSION['alimentacion'] = $user['alimentacion'];
    $_SESSION['alcohol'] = $user['alcohol'];
    $_SESSION['fumar'] = $user['fumar'];
    $_SESSION['cafe'] = $user['cafe'];

    

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

