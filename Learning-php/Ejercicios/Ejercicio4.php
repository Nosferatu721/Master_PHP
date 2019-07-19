<?php

/*
  Ejercicio 4 -> Recoger dos numeros por la URL (GET) y hacer todas las operaciones
  basicas de una calculadora (+ - * /) de los numeros
*/

if (!(isset($_GET['n1']) && isset($_GET['n2']))) {
  echo 'No se han enviado datos';
} else {
  $n1 = $_GET['n1'];
  $n2 = $_GET['n2'];

  $suma = $n1 + $n2;
  $resta = $n1 - $n2;
  $multiplicacion = $n1 * $n2;
  $division = $n1 / $n2;

  echo 'La Suma es: ' . $suma . '<br/>';
  echo 'La Resta es: ' . $resta . '<br/>';
  echo 'La Multiplicacion es: ' . $multiplicacion . '<br/>';
  echo 'La Division es: ' . $division . '<br/>';
}
