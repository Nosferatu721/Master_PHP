<?php

$nombre = 'Elkin Torres';
// Debuggear
var_dump($nombre);

echo '<hr/>';
// Fechas
echo date('d-m-Y');

echo '<hr/>';
// Matematicas
echo 'Raiz cuadrada de 10: ' . sqrt(10);

echo '<hr/>';
// Aleatorio
echo 'Numero aleatorio entre 5 y 15: ' . rand(5, 15);

echo '<hr/>';
// Redondeo
echo round(7.8);

echo '<hr/>';
// Tipo
echo gettype(true);

echo '<hr/>';
// Varificar tipo
if (is_string($nombre)) {
  echo 'La variable "' . $nombre . '" es un String';
}

echo '<hr/>';
// Limpiar variables de espacios
$var = '   F   ';
echo var_dump(trim($var));

echo '<hr/>';
// Comprobar si exite una variable
if (isset($XD)) {
  echo 'Existe la Variable';
} else {
  echo 'No existe la variable';
}

// Eliminar variables / indices
$year = 2019;
unset($year); // variable eliminada

echo '<hr/>';
// Comprobar variable vacia
$txt = '';
if (empty($txt)) {
  echo 'La variable esta vacia';
}

echo '<hr/>';
// Contar caracteres de un string
$cadena = 'Papitas';
echo strlen($cadena);

echo '<hr/>';
// Encontrar caracteres en una cadena
$cadena2 = 'La vida es bella';
echo strpos($cadena2, 'bella');

echo '<hr/>';
// Mayusculas y Minusculas
$f = 'PePiTo';
echo strtolower($f) . ' - ';
echo strtoupper($f);
