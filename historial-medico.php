<?php

session_start();
require 'conexion.php';
$nombre_usuario = $_SESSION['nombre_usuario'];
$usuario = $_SESSION['username'];
$id = $_SESSION['identificador'];

if (!isset($nombre_usuario)) {
    header("location: inicio-de-sesion.php");
}

$sql = "SELECT id, f_consulta, habitacion, cama, motivo_consulta, enfermedad_actual, antecedentes_patologicos, antecedentes_quirurgicos, antecedentes_habitos, antecedentes_epidemiologico, antecedentes_familiares, diuresis, catarsis, sueño, relaciones_sexuales, alergias, examen_fisico, diagnostico_presuntivo, diagnostico_etiologico, diagnostico_funcional, diagnostico_sindormatico, diagnostico_anatomico, plan_terapeutico from docband_medical_history WHERE id_user = $id;";
$result = mysqli_query($db, $sql);


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
                <form action="" method="post" name="">

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
                                            <a href="informacion-personal.php"
                                                style="color: white; display: block;">
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
                            <br>
                        </div>


                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <!--aqui empieza el bucle-->
                            <?php

                            $contador = 1;

                            while ($datos = mysqli_fetch_array($result)) {

                                ?>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse<?php echo $contador; ?>" aria-expanded="false"
                                            aria-controls="flush-collapse<?php echo $contador; ?>">
                                            <label>Fecha de consulta:
                                                <?php echo $datos['f_consulta']; ?>
                                            </label>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse<?php echo $contador; ?>" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row" >


                                                <h5>Historial médico</h5>
                                                <hr>


                                            </div>


                                            <div class="row"><label>Número de habitación:
                                                    <?php echo $datos['habitacion']; ?>
                                                </label></div>

                                            <div class="row"><label>Número de cama:
                                                    <?php echo $datos['cama']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Motivo de la consulta:</label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['motivo_consulta']; ?>
                                                </label>
                                            </div> <br>

                                            <div class="row espacio"><label>Enfermedad actual:</label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['enfermedad_actual']; ?>
                                                </label></div><br>



                                            <div class="row">
                                                <h5>Antecedentes médicos</h5>
                                                <hr>
                                            </div>

                                            <div class="row espacio"><label>Antecedentes patológicos:</label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['antecedentes_patologicos']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Antecedentes quirúrgicos:</label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['antecedentes_quirurgicos']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Antecedentes por hábitos:

                                                </label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['antecedentes_habitos']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Antecedentes epidemiológicos: 

                                                </label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['antecedentes_epidemiologico']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Antecedentes familiares:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['antecedentes_familiares']; ?>
                                                </label></div> <br>


                                            <div class="">
                                                <h5>Revisión por sistemas</h5>
                                                <hr>
                                            </div>
                                            <div class="row espacio"><label>Diurésis:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['diuresis']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Catársis:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['catarsis']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Sueño:

                                                </label></div>

                                            <div class="row margen" ><label >
                                                    <?php echo $datos['sueño']; ?>
                                                </label></div><br>


                                            <div class="row espacio"><label>Relaciones Sexuales:

                                                </label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['relaciones_sexuales']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Alergias:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['alergias']; ?>
                                                </label></div><br>


                                            <div class="row espacio"><label>Examen Físico:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['examen_fisico']; ?>
                                                </label></div><br>

                                            <div class="row">
                                                <h5>Diagnóstico</h5>
                                                <hr>
                                            </div>

                                            <div class="row espacio"><label>Diagnóstico presuntivo:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['diagnostico_presuntivo']; ?>
                                                </label></div><br>


                                            <div class="row espacio"><label>Diagnóstico etiológico:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['diagnostico_etiologico']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Diagnóstico funcional:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['diagnostico_funcional']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Diagnóstico sindormático:

                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['diagnostico_sindormatico']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Diagnóstico anatómico:

                                                </label></div>
                                            <div class="row margen"><label>
                                                    <?php echo $datos['diagnostico_anatomico']; ?>
                                                </label></div><br>

                                            <div class="row espacio"><label>Plan terapéutico:
                                                    
                                                </label></div>

                                            <div class="row margen"><label>
                                                    <?php echo $datos['plan_terapeutico']; ?>
                                                </label></div><br>

                                        </div>
                                    </div>
                                </div>

                                <?php $contador++;
                            } ?>


                        </div>





















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

