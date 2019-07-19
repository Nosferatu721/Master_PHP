<?php

/*
  Ejercicio 3 -> Escribir un Script que imprima por pantalla los cuadrados
  de los 40 primeros numeros naturales.
  PD: Usar bucle While.
*/

$con = 1;
while ($con <= 40) {
  $cua = $con * $con;
  echo '<h2>El cuadrado de ' . $con . ' es: ' . $cua . ' </h2>';
  $con++;
}
