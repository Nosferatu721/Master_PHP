<?php

//Operadores
/*
  == Igual
  === Identico
  != Diferente
  <> Diferente
  !== No Identico
  < Menor Q
  > Mayor Q
  <= Menor Igual Q
  >= Mayor Igual Q
*/

//Condicionales
// IF
$color = 'Rojo';
$color = ('Rojo') ? 'El Color Es Rojo' : 'El Color No Es Rojo';
echo $color;

echo '<br/>';

$year = 2019;
$d = ($year == 2019) ? 'Estamos en el año ' . $year : 'No es el año';
echo $d;

echo '<br/>';

$par = (25 % 2) ? 'Es Impar' : 'Es Par';
echo $par;

echo '<br/>';

$adulto = (18 >= 18) ? 'Es adulto' : 'No es adulto';
echo $adulto;

echo '<hr/>';

$diaNum = 3;
echo $diaNum == 1 ? 'LUNES' : ($diaNum == 2 ? 'MARTES' : ($diaNum == 3 ? 'MIERCOLES' : ($diaNum == 4 ? 'JUEVES'  : ($diaNum == 5 ? 'VIERNES'  : 'other'))));

echo '<hr/>';

$nota = 3;
$estado = $nota == 1 ? 'Malisimo' : ($nota == 2 ? 'Malo' : ($nota == 3 ? 'Regular' : ($nota == 4 ? 'Bueno' : ($nota == 5 ? 'Excelente' : 'Yuca'))));
echo $estado;

echo '<hr/>';

if (isset($_GET['num'])) {
  $numerito = (int) $_GET['num'];
} else {
  $numerito = 1;
}

echo '<h3>Tabla de multiplicar del numero ' . $numerito . '</h3>';

$i = 0;
while ($i <= 10) {
  echo $numerito * $i;
  if ($i != 10) {
    echo ' - ';
  }
  $i++;
}