<?php
$error = "Not";
if (!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['password'])) {
  $error = "Not";
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $edad = $_POST['edad'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!is_string($nombres) || preg_match("/[0-9]/", $nombres)) {
    $error = "name_error";
  } elseif ($edad < 18) {
    $error = "edad_error";
  }

  var_dump($error);
  die();

  if (!$error == "Not") {
    header("Location: index.php?error=$error");
  }
} else {
  $error = "campos_vacios";
  header("Location: index.php?error=$error");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Datos</title>
</head>

<body>
  <?php if ($error == "Not") : ?>
    <div class="card pt-2 text-center">
      <div class="card-header">
        Datos de la Persona
      </div>
      <div class="card-body">
        <h5 class="card-title">Nombres: <?= $nombres ?></h5>
        <h5 class="card-title">Apellidos: <?= $apellidos ?></h5>
        <p class="card-text">
          El usuario tiene una edad de <?= $edad ?>, con un correo <?= $email ?> y con una contraseña <?= $password ?>
        </p>
      </div>
      <div class="card-footer text-muted">
        <?= date('d-m-Y'); ?>
      </div>
    </div>
  <?php endif; ?>
</body>

</html>