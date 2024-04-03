<?php

session_start();
require 'conexion.php';

$id = $_SESSION['identificador'];

$select_information = "SELECT * FROM docband_user WHERE id ='$id'";
$select_query = mysqli_query($db,$select_information);
$dato = mysqli_fetch_array($select_query);

$nombre_usuario =  $dato['nombre'];
$usuario =  $dato['correo'];
$foto = $dato['foto'];

if (!isset($nombre_usuario)) {
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
    <title>DocBand-Historial-medico-paciente</title>

    <link rel="shortcut icon" href="assets/img/logo.png">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12 col-xs-12">
                <form action="logica/historial.php" method="post" name="registrar_paciente">

                    <div class="formulario">
                        
                    <br>
                        <div class="row">


                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 ">

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions"
                                    aria-controls="offcanvasWithBothOptions"><i class="bi bi-list"></i></button>
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
                                            <a href="informacion-personal-medico.php" style="color: white; display: block;">
                                                <i class="bi bi-info-circle" id="icono-salir-pagina-principal"></i>
                                                <h4>Informacion personal</h4>
                                            </a>
                                        </div>


                                        <div class="col" id="espacio-icono">

                                            <a href="qr-medico.php" style="color: white; display: block;">
                                                <i class="bi bi-qr-code" id="icono-salir-pagina-principal"></i>
                                                <h4>QR</h4>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col" id="espacio-icono">
                                            <a href="historial-medico-medico.php" style="color: white; display: block;">
                                                <i class="bi bi-clipboard2-pulse" id="icono-salir-pagina-principal"></i>
                                                <h4>Historial medico</h4>
                                            </a>
                                        </div>

                                        <div class="col" id="espacio-icono">

                                            <a href="cuenta-medico.php" style="color: white; display: block;">
                                                <i class="bi bi-person-circle" id="icono-salir-pagina-principal"></i>
                                                <h4>Cuenta</h4>
                                            </a>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-lg-4 col-md-3 col-sm-3 col-4" id="espacio-icono">
                                            <a href="paginaPrincipal-medico.php" style="color: white; display: block;"
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
                            <h5 class="secciones-formulario">Historial medico</h5>
                            <hr>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p style = " text-align: center; margin-top:20px; font-size:20px;">
                                    <?php
                                    if (isset ($_GET['mensaje'])) {
                                    echo $_GET['mensaje'] ; 
                                
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>

                        <div class="row" style = "margin-top:15px;">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Cedula del Paciente</label>
                                <input type="text" minlength="7" maxlength="10" name="cedula_historia" class="form-control"
                                    placeholder="Ingrese La Cédula" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Fecha de Consulta</label>
                                <input type ="date" class="form-control" name = "fecha_historia" required>
                            </div>

                        </div>


                        <div class="row">
                            
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Habitación</label>
                                <input class="form-control" name="habitacion_historia" placeholder = "Coloque la Habitación del Paciente" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Cama</label>
                                <input type="text" maxlength="3" name="cama_historia" class="form-control"
                                    placeholder="Coloque Numero de Cama del Paciente" required>
                            </div>

                        </div>

                        <div class="row"  style = "margin-top:15px;">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Motivo de Consulta</label>
                                <textarea class="form-control" name = "motivo_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Enfermedad Actual</label>
                                <textarea class="form-control" name = "enfermedad_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <h5 class="secciones-formulario">Antecedentes Medicos</h5>
                            <hr>
                        </div>

                        <div class="row" style = "margin-top:15px;">

                            <div class="col-lg-6 col-md-6 col-12">

                                <label for="exampleInputEmail1" class="form-label">Antecedentes Patologicos</label>

                                <textarea class="form-control" name="patologico_historia" rows="5" maxlength="200" required></textarea>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Antecedentes Quirurgicos</label>
                                <textarea class="form-control" name = "quirurgicos_historia" rows="5" maxlength="200" required> </textarea>
                            </div>


                        </div>


                        <div class="row">
                           
                            <div class="col-lg-6 col-md-6 col-12">
                            
                                <label for="exampleInputEmail1" class="form-label">Antecedentes Por Habitos</label>
                                <textarea class="form-control" name="habitos_historia" rows="5" maxlength="200" required></textarea>
                            
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Antecedentes Epidemiologico</label>
                                <textarea class="form-control" name="epi_historia" rows="5" maxlength="200" required> </textarea>


                            </div>
                        
                        </div>

                        <div class="row">
                            
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Antecedentes Familiares</label>
                                <textarea class="form-control" name="familiares_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <h5 class="secciones-formulario">Revisión Por Sistemas</h5>
                            <hr>
                        </div>

                        <div class="row" style = "margin-top:15px;">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Diuresis</label>
                                <textarea class="form-control" name = "diuresis_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Catarsis</label>
                                <textarea class="form-control" name="catarsis_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Sueño</label>
                                <textarea class="form-control" name="sueño_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Relaciones Sexuales</label>
                                <textarea class="form-control" name="relaciones_habitos" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Alergias</label>
                                <textarea class="form-control" name="alergia_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Examen Fisico</label>
                                <textarea class="form-control" name="fisico_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <h5 class="secciones-formulario" >Diagnostico</h5>
                            <hr>
                        </div>

                        <div class="row" style = "margin-top:15px;">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Diagnostico Presuntivo</label>
                                <textarea class="form-control" name="presuntivo_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Diagnostico Etiologico</label>
                                <textarea class="form-control" name="etiologico_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Diagnostico Funcional</label>
                                <textarea class="form-control" name="funcional_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Diagnostico Sindormatico</label>
                                <textarea class="form-control" name="sindromatico_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Diagnostico Anatomico</label>
                                <textarea class="form-control" name="anatomico_historia" rows="5" maxlength="200" required> </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="exampleInputEmail1" class="form-label">Plan Terapeutico</label>
                                <textarea class="form-control" name="plan_historia" rows="5" maxlength="200" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Guardar</button>

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