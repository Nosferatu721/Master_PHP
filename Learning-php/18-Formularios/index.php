<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario PHP y HTML</title>
</head>

<body>
  <div class="container">
    <h1>Formulario</h1>
    <form action="" method="POST">
      <label for="nombre">Nombre: </label>
      <p><input type="text" name="nombre" class="form-control"></p>

      <label for="apellido">Apellido: </label>
      <p><input type="text" name="apellido" class="form-control"></p>

      <label for="boton">Botón: </label>
      <p><input type="button" name="boton" value="Botón" class="form-control btn btn-outline-danger"></p>

      <label for="color">Color: </label>
      <p><input type="color" name="color" class="form-control"></p>

      <label for="fecha">Fecha: </label>
      <p><input type="date" name="fecha" class="form-control"></p>

      <label for="email">Email: </label>
      <p><input type="email" name="email" class="form-control"></p>

      <input type="submit" value="Enviar">
    </form>
  </div>
</body>

</html>