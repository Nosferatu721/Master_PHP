<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Imprimir Por Pantall - Master en PHP</title>
</head>

<body>
  <h1>Master en PHP - Elkin Torres</h1>
  //Echo de una manera mas sencilla
  <?= "Echo Con Atajo" ?>
  <?php
  echo '<h3>Lista de Videojuegos: </h3>';
  echo "<ul>"
    . "<li>GTA</li>"
    . "<li>FIFA</li>"
    . "<li>Mario Bros</li>"
    . "</ul>";

  /*
      Comentario
      multilinea
    */
  echo '<p>Lista ' . ' - ' . 'de juegos</p>';
  ?>
</body>

</html>