<?php

/*
TIPOS DE DATOS:
Entero (int  / integer) = 99
Coma Flotante / Decimales (float / double) = 3.45
Cadenas (string) "Hola Soy Un String"
Boleano (bool) = true - flase
null
Array (coleccion de datos)
Objetos
*/

$numero = 21;
$txt = "Hola \n $numero";
$bol = true;
$dec = 21.2;
$nula = null;

//Conocer el tipo de dato
echo gettype($numero) . '<br>';
echo gettype($txt) . '<br>';
echo gettype($bol) . '<br>';
echo gettype($dec) . '<br>';
echo gettype($nula) . '<br>';
echo '<hr>';
echo $txt;
echo '<hr>';

//Debugear
$nombre[] = "Elkin Torres";
$nombre[] = "Kilian Torres";
var_dump($nombre);