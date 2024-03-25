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
    <title>DocBand-Pagina Principal</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12 col-xs-12">
                <form action="registrar.php" method="post" name="registrar_paciente">

                    <div class="formulario">
                        <div class="row">

                            <div class="Contedor-descripcion-pagina">
                                <i class="bi bi-person"></i>
                                <h4 class="text-center">Usuario actual</h4>
                            </div>
                        </div>

                        <h5 class="secciones-formulario">Informacion personal</h5>
                        <hr>
                        <div>
                            <label for="exampleInputEmail1" class="form-label">Nombre y apellido</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="nombre" placeholder="Primer nombre"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="apellido"
                                        placeholder="Primer Apellido" aria-label="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <label for="exampleInputPassword1" class="form-label">Estatus</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="estatus" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="E">E</option>
                                        <option value="V">V</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for=" exampleInputPassword1" class="form-label">Cédula</label>
                                <input type="number" name="cedula" class="form-control" placeholder="coloque su cédula"
                                    required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Género</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="genero" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled value="" disabled selected>Seleccione una opción
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
                                    <select class="form-select form-control" name="religion" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled selected>Seleccione una opción</option>
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
                                <input type="Date" class="form-control" name="nacimiento" id="fechaNacimiento"
                                    placeholder="Seleccione una fecha" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Lugar de nacimiento</label>
                                <input type="text" class="form-control" name="lugar_nacimiento"
                                    placeholder="Coloque donde nacio" required>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Número telefónico</label>
                                <input type="number" class="form-control" name="num_p"
                                    placeholder="Coloque su número de teléfono personal" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Teléfono Familiar</label>
                                <input type="number" class="form-control" name="num_f"
                                    placeholder="Coloque un número teléfono de algún familiar" required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for=" exampleInputPassword1" class="form-label">Ocupación</label>
                                <input type="text" class="form-control" name="ocupacion"
                                    placeholder="Coloque su ocupación" required>
                            </div>
                            <div class="col">
                                <label for=" exampleInputPassword1" class="form-label">Etnia</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="etnia" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div>
                            <label for=" exampleInputPassword1" class="form-label">Tipo de sangre</label>
                            <div class="input-group">
                                <select class="form-select form-control" name="t_sangre" id="inputGroupSelect01"
                                    required>
                                    <option value="" disabled selected>Seleccione una opción</option>
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
                            <input type="text" class="form-control" name="direccion" placeholder="Coloque su Dirección"
                                required>
                        </div>
                        <div>
                            <label for="exampleInputPassword1" class="form-label">Dirección habitual</label>
                            <input type="text" class="form-control" name="direccion_h"
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
                                    <select class="form-select form-control" name="alimentacion" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="Balanceada">Balanceada</option>
                                        <option value="No Balanceada">No balanceada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Alcoholismo</label>
                                <div class="input-group">
                                    <select class="form-select form-control" name="alcohol" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled selected>Seleccione una opción</option>
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
                                    <select class="form-select form-control" name="fumar" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled selected>Seleccione una opción</option>
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
                                    <select class="form-select form-control" name="cafe" id="inputGroupSelect01"
                                        required>
                                        <option value="" disabled value="" disabled selected>Seleccione una opción
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



                        






                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</html>