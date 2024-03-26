<?php 

session_start();

$nombre_usuario = $_SESSION['nombre_usuario'];
$usuario = $_SESSION['username'];
$apellido = $_SESSION['apellido_usuario'];
$cedula_usuario = $_SESSION['cedula'] ;

$genero = $_SESSION['genero'];
$religion = $_SESSION['religion'];
$f_nacimiento = $_SESSION['f_nacimiento'];

$l_nacimiento = $_SESSION['l_nacimiento'];
$n_personal = $_SESSION['n_personal'];
$n_familiar = $_SESSION['n_familiar'];

$ocupacion = $_SESSION['ocupacion'];
$etnia = $_SESSION['etnia'];
$t_sangre = $_SESSION['t_sangre'];

$direccion = $_SESSION['direccion'];
$direccion_h = $_SESSION['direccion_h'];

$alimentacion = $_SESSION['alimentacion'];
$alcohol = $_SESSION['alcohol'];
$fumar = $_SESSION['fumar'];
$cafe = $_SESSION['cafe'];

$dato = $_SESSION['identificador'];

if (!isset($nombre_usuario)){
    header("location: inicio-de-sesion.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/reporte.css">
    <title>Reporte <?php echo htmlspecialchars($nombre_usuario) ?> </title>
</head>
<body>
    
    <div class="contenedor_p">

        <div class="header">
            
            <img src="assets/img/logo.png" alt="">

            <div>

            <label>Docband</label>

             </div>


        </div>


        <h2>Información Personal</h2>
     
        <hr>

        <div class="contenedor1">

            

            <div class="contenedorDatos">

                <label for="title" class="titulos">Nombres Del Paciente: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($nombre_usuario) ?></label>

            </div>

            <div class="contenedorDatos">

                <label for="title" class="titulos">Apellidos Del Paciente: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($apellido) ?></label>

            </div>

            <div class="contenedorDatos">

                <label for="title" class="titulos">Cedula Del Paciente: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($cedula_usuario) ?></label>


            </div>

            
        
        </div>


        <div class="contenedor1">

            
        </div>

        <div class="contenedor1">

            <div class="contenedorDatos">

                <label for="title" class="titulos">Lugar de Nacimiento: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($l_nacimiento) ?></label>

            </div>

            <div class="contenedorDatos">

                <label for="title" class="titulos">Telefono del Paciente: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($n_personal) ?></label>

            </div>

            <div class="contenedorDatos">

                <label for="title" class="titulos">Telefono del Familiar: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($n_familiar) ?></label>

            </div>
        
        </div>

        <div class="contenedor1">

            <div class="contenedorDatos">

                <label for="title" class="titulos">Ocupación: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($ocupacion) ?></label>

            </div>

            <div class="contenedorDatos">

                <label for="title" class="titulos">Etnia: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($etnia) ?></label>

            </div>

            <div class="contenedorDatos">

                <label for="title" class="titulos">Tipo de Sangre: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($t_sangre) ?></label>

            </div>
        
        </div>

        <div class="contenedor1">

            <div class="contenedorDatosDireccion">

                <label for="title" class="titulos">Direccion: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($direccion) ?></label>

            </div>

            <div class="contenedorDatosDireccion">

                <label for="title" class="titulos">Direccion Habitual: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($direccion_h) ?></label>

            </div>

        
        </div>

        <br>

        <h2>Hábitos</h2>

        <hr>

        <div class="contenedorHabitos">

            <div class="contenedorDatosDireccion">

                <label for="title" class="titulos">Alimentación: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($alimentacion) ?></label>

            </div>

            <div class="contenedorDatosDireccion">

                <label for="title" class="titulos">Alcohol: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($alcohol) ?></label>

            </div>

            <div class="contenedorDatosDireccion">

                <label for="title" class="titulos">Tabáquico: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($fumar) ?></label>

            </div>

            <div class="contenedorDatosDireccion">

                <label for="title" class="titulos">Café: </label>
                <label class= "tet" for="data" class="dato"><?php echo htmlspecialchars($cafe) ?></label>

            </div>
        
        </div>

        <div class="contenedorHabitos">

            

        
        </div>


    </div>

    <br>
    <br>
    <br>


</body>
</html>

