<?php
/*
  Ejercicio 2 ->  Escribir un Script que añada valores a un Array mientras que su longitud
  sea menor a 120 y mostrar por pantalla
*/

$numeros = [1, 2, 3, 4];
$longitud = sizeof($numeros);

while ($longitud < 120) {
  $numAleatorio = rand(0, 200);
  array_push($numeros, $numAleatorio);
  $longitud = sizeof($numeros);
}

echo '<pre>';
print_r($numeros);
echo '</pre>';
