<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="assets/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <title>DocBand-- Inicio de sesion</title>
</head>

<body>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 col-12 col-sm-12 col-xs-12">
        <form>


          <div>
            <img src="assets/img/1.svg" id="Imagen-inicio" alt="No carga la imagen">
          </div>

          <div class="formulario">
            <h4 class="text-center">DocBand</h4>
            <div>
              <label for="exampleInputEmail1" class="form-label">Usuario</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Coloque su usuario">
            </div>
            <div>
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" placeholder="coloque su contraseña">
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xs-6">

                <a>¿Olvidaste tu contraseña?</a>
              </div>
              <div class="col-lg-6 col-md-6 col-6 col-sm-6 col-xs-6" id="Text-Align">

                <a href="Registrarse.php">¿Eres nuevo?</a>
              </div>

            </div>


            <button type="submit" class="btn btn-primary mt-5">Iniciar sesion</button>
          </div>
        </form>
      </div>
      <div class="col-lg-3 col-md-2"></div>

    </div>
  </div>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>