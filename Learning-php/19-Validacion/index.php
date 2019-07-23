<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Validacion de Formularios PHP</title>
</head>

<body>
  <div class="container col-6">
    <h1 class="pt-3">Validar Formulario PHP</h1>
    <?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error == "campos_vacios") {
        echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Introduce todos los datos en los campos del formulario
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ';
      } elseif ($error == "name_error") {
        echo '
          <div class="alert alert-warning" role="alert">
            El campo nombre no es apropiado
          </div>
        ';
      } elseif ($error == "edad_error") {
        echo '
          <div class="alert alert-warning" role="alert">
            El campo edad no es apropiado "Menor de edad"
          </div>
        ';
      }
    }
    ?>
    <form action="procesar_formulario.php" class="bg-dark text-light mt-4 p-3 row d-flex justify-content-center" method="POST">
      <div class="form-group col-6">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombres" id="nombre" class="form-control" placeholder="Nombre">
      </div>
      <div class="form-group col-6">
        <label for="apellidos">Apellido: </label>
        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellido">
      </div>
      <div class="form-group col-6">
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" class="form-control" placeholder="Edad">
      </div>
      <div class="form-group col-6">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email " class="form-control" placeholder="Email">
      </div>
      <div class="form-group col-6">
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password " class="form-control" placeholder="Email">
      </div>

      <input type="submit" class="btn btn-outline-warning btn-block" value="Enviar">
    </form>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>