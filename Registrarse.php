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
  <title>DocBand-Registrarse</title>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 col-xs-12">
        <form>
          <div class="row">

          </div>
          <div id="prueba">
            <i class="bi bi-person-circle"></i>
            <h4 class="text-center">Nuevo Usuario</h4>
          </div>



          <div class="formulario">
            <h5 class="secciones-formulario">Informacion personal</h5>
            <hr>
            <div>
              <label for="exampleInputEmail1" class="form-label">Nombre y apellido</label>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Primer nombre" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Primer Apellido" aria-label="Last name">
                </div>
              </div>
            </div>
            <div>
              <label for="exampleInputPassword1" class="form-label">Cedula</label>
              <input type="number" class="form-control" placeholder="coloque su cedula">
            </div>
            <div class="row">

              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Genero</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                    <option value="3">Otro</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Religión</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Cristiana</option>
                    <option value="2">Catolica</option>
                    <option value="3">Testigo de jehova</option>
                    <option value="4">Atea</option>
                    <option value="5">Otra</option>
                  </select>
                </div>
              </div>



            </div>


            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
                <input type="Date" class="form-control" id="fechaNacimiento" placeholder="Seleccione una fecha">
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Lugar de nacimiento</label>
                <input type="text" class="form-control" placeholder="Coloque donde nacio">
              </div>


            </div>
            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Número telefónico</label>
                <input type="text" class="form-control" placeholder="Coloque su número de teléfono personal">
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Teléfono Familiar</label>
                <input type="text" class="form-control" placeholder="Coloque un número teléfono de algún familiar">
              </div>
            </div>
            <div class="row">

              <div class="col">
                <label for=" exampleInputPassword1" class="form-label">Ocupación</label>
                <input type="text" class="form-control" placeholder="Coloque su ocupación">
              </div>
              <div class="col">
                <label for=" exampleInputPassword1" class="form-label">Etnia</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>

                  </select>
                </div>
              </div>

            </div>

            <div>
              <label for=" exampleInputPassword1" class="form-label">Tipo de sangre</label>
              <div class="input-group">
                <select class="form-select form-control" id="inputGroupSelect01">
                  <option selected>Seleccione una opción</option>
                  <option value="1">A+</option>
                  <option value="2">A-</option>
                  <option value="3">B+</option>
                  <option value="4">B-</option>
                  <option value="5">AB+</option>
                  <option value="6">AB-</option>
                  <option value="7">O+</option>
                  <option value="8">O-</option>
                  <option value="9">Otra</option>
                </select>
              </div>
            </div>


            <div>
              <label for="exampleInputPassword1" class="form-label">Dirección</label>
              <input type="text" class="form-control" placeholder="Coloque su Dirección">
            </div>
            <div>
              <label for="exampleInputPassword1" class="form-label">Dirección habitual</label>
              <input type="text" class="form-control" placeholder="Coloque la dirección la cual frecuenta">
            </div>
            <div class="row">


            </div>






            <h5 class="secciones-formulario">Hábitos</h5>
            <hr>
            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Alimentación</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Balanceada</option>
                    <option value="2">No balanceada</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Alcoholismo</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Muy frecuente</option>
                    <option value="2">Frecuente</option>
                    <option value="3">Ocasional</option>
                    <option value="4">Muy poco</option>
                    <option value="5">No</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Tabáquico</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Muy frecuente</option>
                    <option value="2">Frecuente</option>
                    <option value="3">Ocasional</option>
                    <option value="4">Muy poco</option>
                    <option value="5">No</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Cafeína</label>
                <div class="input-group">
                  <select class="form-select form-control" id="inputGroupSelect01">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Muy frecuente</option>
                    <option value="2">Frecuente</option>
                    <option value="3">Ocasional</option>
                    <option value="4">Muy poco</option>
                    <option value="5">No</option>
                  </select>
                </div>
              </div>
            </div>

            <h5 class="secciones-formulario">Usuario y contraseña</h5>
            <hr>
            <div>
              <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" aria-describedby="emailHelp"
                placeholder="Coloque su dirección de correo electrónico">
            </div>
            <div>
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="text" class="form-control" placeholder="coloque su contraseña">
            </div>
            <div>
              <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>
              <input type="text" class="form-control" placeholder="Repita su contraseña">
            </div>

            <div>
              <label for="exampleInputPassword1" class="form-label">¿Eres médico?</label>

              <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Si</label>

              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>



            <div class="row">
              <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xs-6">


              </div>
              <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xs-6" id="Text-Align">

                <a href="inicio-de-sesion.php">volver a inicio de sesion</a>
              </div>

            </div>


            <button type="submit" class="btn btn-primary mt-5">Registrarse</button>
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