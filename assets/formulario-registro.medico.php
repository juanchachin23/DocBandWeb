<?php

session_start();
$nombre_usuario = $_SESSION['nombre_usuario'];
$usuario = $_SESSION['username'];

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
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>DocBand - Historiales Medicos</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12 col-xs-12">

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




                            <div class = "content">

                            <button type="button" class="btn btn-primary">Formulario</button>




                            </div>

            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>


</html>