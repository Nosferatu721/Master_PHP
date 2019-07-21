<?php
/*
  Ejercicio 3 -> Hacer un Script que compruebe si una variable esta vacia y is esta vacia
  rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
*/

if (empty($_GET['texto'])) {
  $txt = $_GET['texto'];
  $txt = 'hola';
  echo '<b>' . strtoupper($txt) . '</b>';
} else {
  echo 'No Esta vacia<br/>';
  $txt = $_GET['texto'];
  echo '<b>' . strtoupper($txt) . '</b>';
}
