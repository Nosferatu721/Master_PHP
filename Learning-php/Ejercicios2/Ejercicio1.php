<?php

/*
  Ejercicio 1 -> Escribir un Script en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:
  - Recorrerlo
  - Ordenarlo
  - Mostrar Longitud
  - Buscar Elemento
*/

$arr = [55, 62, 41, 34, 87, 93, 15, 21];

foreach ($arr as $i => $num) {
  echo 'El valor del indice ' . ($i + 1) . ' es: ' . $num;
  if (sizeof($arr) != ($i + 1)) {
    echo '<br>';
  }
}
echo '<hr>';

echo 'Ordenados';
echo '<br>';
sort($arr);
foreach ($arr as $i => $num) {
  echo 'El valor del indice ' . ($i + 1) . ' es: ' . $num;
  if (sizeof($arr) != ($i + 1)) {
    echo '<br>';
  }
}
echo '<hr>';

echo 'Longitud: ' . sizeof($arr);
echo '<hr>';

$elemento = $_GET['n'];

if (!empty(array_search($elemento, $arr))) {
  echo 'El numero ' . $elemento . ' Existe pt';
} else {
  echo 'El numero ' . $elemento . ' no Existe pt';
}
