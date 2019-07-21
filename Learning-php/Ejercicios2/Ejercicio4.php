<?php
/*
  Ejercicio 4 -> Crear un Script que tenga cuatro variables de los tipos
  (Array, String, Int, Booleano), que imprima un mensaje segun el tipo de variable que sea
*/

$arr = [
  [
    'var' => 'Buenas'
  ],
  [
    'var' => 25.5
  ],
  [
    'var' => 21
  ],
  [
    'var' => true
  ]
];

foreach ($arr as $key => $variable) {
  echo 'El dato "' . $variable['var'] . '" es de tipo: ' . gettype($variable['var']) . '<br/>';
}
