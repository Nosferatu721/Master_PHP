<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario --- SERVER [Get AND Post]</title>
</head>

<body>
  <h1>Formulario PHP</h1>
  <form method="POST" action="recibir.php">
    <p>
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre" id="nombre" />
    </p>
    <p>
      <label for="apellido">Apellido: </label>
      <input type="text" name="apellido" id="apellido" />
    </p>
    <input type="submit" value="Enviar Datos" >
  </form>
</body>

</html>

<?php

?>