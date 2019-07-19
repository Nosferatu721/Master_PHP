<?php

/*
  Ejercicio 5 -> Escribir un Script que muestre todos los numeros entre dos numeros
  ingresados por (GET).
*/


if (isset($_GET['num1']) && isset($_GET['num2'])) {
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];

  if ($num1 > $num2) {
    for ($i = $num2; $i <= $num1; $i++) {
      echo '-> ' . $i . '<br/>';
    }
  } else {
    for ($i = $num1; $i <= $num2; $i++) {
      echo '-> ' . $i . '<br/>';
    }
  }
}else {
  echo '<h3>Papi faltan los datos por la URL</h3>';
}