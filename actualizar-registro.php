<?php

session_start();
$correo =
$nombre_usuario = $_SESSION['nombre_usuario'];
$usuario = $_SESSION['username'];
$apellido = $_SESSION['apellido_usuario'];
$nacionalidad_usuario = substr($_SESSION['cedula'], 0, 1);
$cedula_usuario = substr($_SESSION['cedula'], 2);
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

if (!isset ($nombre_usuario)) {
    header("location: inicio-de-sesion.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Conexion con archivo css -->
    <link href="assets/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>DocBand-Informacion-usuario</title>
    <link rel="shortcut icon" href="assets/img/logo.png">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12 col-xs-12">
                <form action="logica/actualizar.php" method="post" name="registrar_paciente">

                    <div class="formulario">
                        <br>
                        <div class="row">


                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 ">

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions"
                                    aria-controls="offcanvasWithBothOptions"><i class="bi bi-list"></i></button>
                            </div>


                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 ">

                            <a href="informacion-personal.php" class="btn btn-info" role="button">Volver</a>
                            </div>


                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>

                                <div class="offcanvas-body">


                                    <div class="row">

                                        <div class="Contedor-descripcion-pagina">
                                            <i class="bi bi-person"></i>
                                            <h4 class="text-center">
                                                <?php echo $nombre_usuario ?>
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col" id="espacio-icono">
                                            <a href="informacion-personal.php" style="color: white; display: block;">
                                                <i class="bi bi-info-circle" id="icono-salir-pagina-principal"></i>
                                                <h4>Informacion personal</h4>
                                            </a>
                                        </div>


                                        <div class="col" id="espacio-icono">

                                            <a href="qr.php" style="color: white; display: block;">
                                                <i class="bi bi-qr-code" id="icono-salir-pagina-principal"></i>
                                                <h4>QR</h4>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col" id="espacio-icono">
                                            <a href="historial-medico.php" style="color: white; display: block;">
                                                <i class="bi bi-clipboard2-pulse" id="icono-salir-pagina-principal"></i>
                                                <h4>Historial medico</h4>
                                            </a>
                                        </div>

                                        <div class="col" id="espacio-icono">

                                            <a href="cuenta.php" style="color: white; display: block;">
                                                <i class="bi bi-person-circle" id="icono-salir-pagina-principal"></i>
                                                <h4>Cuenta</h4>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-lg-4 col-md-3 col-sm-3 col-4" id="espacio-icono">
                                            <a href="index.php" style="color: white; display: block;"
                                                class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                                                <i class="bi bi-house" id="icono-salir-pagina-principal"></i>
                                                <h4>Home</h4>
                                            </a>
                                        </div>
                                        <div class="col">

                                        </div>


                                        <div class="col-lg-4 col-4 col-md-3 col-sm-3 col-4" id="espacio-icono">

                                            <a href="logica/salir.php" style="color: white; display: block;">
                                                <i class="bi bi-box-arrow-left" id="icono-salir-pagina-principal"></i>
                                                <h4> salir</h4>
                                            </a>

                                        </div>

                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <h5 class="secciones-formulario">Informacion personal</h5>
                            <hr>
                        </div>
                        
                                    <div class="row">
                        <div class="col">

                            <p style = " margin-top:10px; text-align: center;">
                            <?php
                            if (isset ($_GET['mensaje'])) {
                            echo  $_GET['mensaje'];
                            }
                            ?>

                            </p>
                        </div>
                        </div>

                        <div>
                            <label for="exampleInputEmail1" class="form-label">Nombre y apellido</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="nombre_r"
                                        placeholder="Primer nombre" aria-label="First name"
                                        value="<?php echo htmlspecialchars($nombre_usuario); ?>">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="apellido_r"
                                        placeholder="Primer Apellido" aria-label="Last name" 
                                        value="<?php echo htmlspecialchars($apellido); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-12 col-lg-6">
                                <label for="exampleInputPassword1" class="form-label">Estatus</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="status_r" id="inputGroupSelect01" required>
                                        <option value="<?php echo $nacionalidad_usuario; ?>" disabled selected>
                                            <?php echo htmlspecialchars($nacionalidad_usuario); ?>
                                        </option>
                                        <option value="E">E</option>
                                        <option value="V">V</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=" exampleInputPassword1" class="form-label">Cédula</label>
                                <input type="text" name="cedula_r" 
                                    value="<?php echo htmlspecialchars($cedula_usuario); ?>" class="form-control"
                                    placeholder="coloque su cédula" required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Género</label>
                                <div class="input-group">
                                    <select class="form-select form-control"  name="genero_r"
                                        id="inputGroupSelect01" required>
                                        <option value="<?php  htmlspecialchars($genero); ?>" disabled selected>
                                            <?php echo htmlspecialchars($genero); ?>
                                        </option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Religión</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="religion_r"
                                        id="inputGroupSelect01" required>
                                        <option value="<?php  htmlspecialchars($religion); ?>" disabled selected>
                                            <?php echo htmlspecialchars($religion); ?>
                                        </option>
                                        <option value="Cristiana">Cristiana</option>
                                        <option value="Catolica">Catolica</option>
                                        <option value="Testigo de jehova">Testigo de jehova</option>
                                        <option value="Atea">Atea</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                            </div>



                        </div>


                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
                                <input type="Date"  value="<?php echo htmlspecialchars($f_nacimiento); ?>"
                                    class="form-control" name="nacimiento_r" id="fechaNacimiento"
                                    placeholder="Seleccione una fecha" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Lugar de nacimiento</label>
                                <input type="text" class="form-control" 
                                    value="<?php echo htmlspecialchars($l_nacimiento); ?>" name="lugar_nacimiento_r"
                                    placeholder="Coloque donde nacio" required>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Número telefónico</label>
                                <input type="number"  value="<?php echo htmlspecialchars($n_personal) ?>"
                                    class="form-control" name="num_p_r"
                                    placeholder="Coloque su número de teléfono personal" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Teléfono Familiar</label>
                                <input type="number"  value="<?php echo htmlspecialchars($n_familiar) ?>"
                                    class="form-control" name="num_f_r"
                                    placeholder="Coloque un número teléfono de algún familiar" required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for=" exampleInputPassword1" class="form-label">Ocupación</label>
                                <input type="text" class="form-control" name="ocupacion_r" 
                                    value="<?php echo htmlspecialchars($ocupacion) ?>"
                                    placeholder="Coloque su ocupación" required>
                            </div>
                            <div class="col">
                                <label for=" exampleInputPassword1" class="form-label">Etnia</label>
                                <div class="input-group">
                                    <select class="form-select form-control"  name="etnia_r"
                                        id="inputGroupSelect01" required>
                                        <option value=" <?php  htmlspecialchars($etnia); ?>" disabled selected>
                                            <?php echo htmlspecialchars($etnia); ?>
                                        </option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div>
                            <label for=" exampleInputPassword1" class="form-label">Tipo de sangre</label>
                            <div class="input-group">
                                <select class="form-select form-control" name="t_sangre_r"
                                    id="inputGroupSelect01" required>
                                    <option value=" <?php echo htmlspecialchars($t_sangre); ?>" disabled selected>
                                        <?php echo htmlspecialchars($t_sangre); ?>
                                    </option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>


                        <div>
                            <label for="exampleInputPassword1" class="form-label">Dirección</label>
                            <input type="text" class="form-control" 
                                value="<?php echo htmlspecialchars($direccion) ?>" name="direccion_r"
                                placeholder="Coloque su Dirección" required>
                        </div>
                        <div>
                            <label for="exampleInputPassword1" class="form-label">Dirección habitual</label>
                            <input type="text" class="form-control"
                                value="<?php echo htmlspecialchars($direccion_h) ?>" name="direccion_h_r"
                                placeholder="Coloque la dirección la cual frecuenta" required>
                        </div>
                        <div class="row">


                        </div>

                        <h5 class="secciones-formulario">Hábitos</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Alimentación</label>
                                <div class="input-group">
                                    <select class="form-select form-control"  name="alimentacion_r"
                                        id="inputGroupSelect01" required>
                                        <option value=" <?php  htmlspecialchars($alimentacion) ?>" disabled selected>
                                            <?php echo htmlspecialchars($alimentacion) ?>
                                        </option>
                                        <option value="Balanceada">Balanceada</option>
                                        <option value="No Balanceada">No balanceada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Alcoholismo</label>
                                <div class="input-group">
                                    <select class="form-select form-control"  name="alcohol_r"
                                        id="inputGroupSelect01" required>
                                        <option value=" <?php  htmlspecialchars($alcohol) ?>" disabled selected>
                                            <?php echo htmlspecialchars($alcohol) ?>
                                        </option>
                                        <option value="Muy frecuente">Muy frecuente</option>
                                        <option value="Frecuente">Frecuente</option>
                                        <option value="Ocasional">Ocasional</option>
                                        <option value="Muy poco">Muy poco</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Tabáquico</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="fumar_r"
                                        id="inputGroupSelect01" required>
                                        <option value=" <?php  htmlspecialchars($fumar) ?>" disabled selected>
                                            <?php echo htmlspecialchars($fumar) ?>
                                        </option>
                                        <option value="Muy frecuente">Muy frecuente</option>
                                        <option value="Frecuente">Frecuente</option>
                                        <option value="Ocasional">Ocasional</option>
                                        <option value="Muy poco">Muy poco</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Cafeína</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="cafe_r"
                                        id="inputGroupSelect01" required>
                                        <option value="<?php htmlspecialchars($cafe) ?>" disabled value="" disabled selected>
                                            <?php echo htmlspecialchars($cafe) ?>
                                        </option>
                                        <option value="Muy frecuente">Muy frecuente</option>
                                        <option value="Frecuente">Frecuente</option>
                                        <option value="Ocasional">Ocasional</option>
                                        <option value="Muy poco">Muy poco</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Actualizar Registro</button>

                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>


</html>