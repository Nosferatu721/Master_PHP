<?php
// Funciones que tienen los ARRAYS
$juegos = ['COD', 'LOL', 'FIFA', 'GTA', 'PUGB'];
// Ordenar alfabeticamente ( asort ) Alreves ( arsort )
asort($juegos);
var_dump($juegos);
echo '<hr>';

// Añadir a un Array
array_push($juegos, 'CupHead');
var_dump($juegos);
echo '<hr>';

// Eliminar el ultimo dato de un Array
array_pop($juegos);
unset($juegos[1]);
var_dump($juegos);
echo '<hr>';

// Mostrar un dato aleatorio de un Array
$datoRand = array_rand($juegos);
echo $juegos[$datoRand];
echo '<hr>';

// Inverso de un Array
$juegosNew = array_reverse($juegos);
var_dump($juegosNew);
echo '<hr>';

// Buscar en un Array
$r = array_search('FIFA', $juegos);
echo 'Posicion: ' . $r . ' del Array';
echo '<hr>';

// Contar elementos de un Array
$contar = sizeof($juegos);
echo $contar;
