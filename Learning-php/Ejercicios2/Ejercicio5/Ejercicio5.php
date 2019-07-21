<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  /*
  Ejercicio 5 -> Crear un array con el contenido de la siguiente tabla:
  ACCION    AVENTURA      DEPORTES
  GTA       ASSASINS      FIFA
  COD       CRASH         PES
  PUGB      PRICE OF      MOTO GP
            PERSIA
*/
  require_once 'accion.php';
  require_once 'aventura.php';
  require_once 'deportes.php';

  $tabla = [
    $gameAccion,
    $gameAventura,
    $gameDeportes
  ];
  ?>
  <div class="container pt-4">
    <table class="table">
      <thead class="bg-danger">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Accion</th>
          <th scope="col">Aventura</th>
          <th scope="col">Deportes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?= $tabla[0][0]; ?></td>
          <td><?= $tabla[1][0]; ?></td>
          <td><?= $tabla[2][0]; ?></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><?= $tabla[0][1]; ?></td>
          <td><?= $tabla[1][1]; ?></td>
          <td><?= $tabla[2][1]; ?></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><?= $tabla[0][2]; ?></td>
          <td><?= $tabla[1][2]; ?></td>
          <td><?= $tabla[2][2]; ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>