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
  <title>DocBand-Restablecer Contraseña</title>
  <link rel="shortcut icon" href="assets/img/logo.png">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 col-xs-12">
        <form action="logica/recuperar.php" method="POST">

          <div class="formulario">
            <div class="row">


              <div class="Contedor-descripcion-pagina">
                <i class="bi bi-key-fill"></i>
                <h4 class="text-center">Restablecer Contraseña</h4>
              </div>
            </div>
            <h5 class="secciones-formulario">DocBand</h5>

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
            <div>

            <div>
              <div class="row">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">Correo</label>
                  <input type="email" name = "correo_r" class="form-control" aria-describedby="emailHelp"
                    placeholder="Coloque su correo electrónico">
                </div>


              </div>
              <div class="col">
                <label for="exampleInputEmail1" class="form-label">Cedula</label>
                <input type="text" name = "cedula_r" class="form-control" aria-describedby="emailHelp" placeholder="Coloque su cedula">
              </div>
            </div>
            <div>
              <label for="exampleInputPassword1" class="form-label">Palabra secreta de recuperacion</label>
              <input type="password" name = "palabra_r" class="form-control"
                placeholder="coloque la palabra secreta para restablecer su contraseña">
            </div>

            <div>
              <div class="row">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label">Nueva clave</label>
                  <input type="password" name = "contraseñap_r" class="form-control" aria-describedby="emailHelp"
                    placeholder="Coloca tu nueva clave">
                </div>


              </div>
              <div class="col">
                <label for="exampleInputEmail1" class="form-label">Confirmar nueva clave</label>
                <input type="password" class="form-control" name = "contraseñas_r" aria-describedby="emailHelp" placeholder="Repite la clave">
              </div>
            </div>


            <div class="row">
              <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xs-6">


              </div>
              <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xs-6" id="Text-Align">

                <a href="inicio-de-sesion.php">volver a inicio de sesion</a>
              </div>

            </div>


            <button class="btn btn-primary mt-5">Continuar con restablecimiento</button>
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