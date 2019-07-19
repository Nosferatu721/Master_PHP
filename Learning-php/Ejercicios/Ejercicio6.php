<?php
/*
  Ejercicio 6 -> Mostrar una tabla de HTML con las tablas de Multiplicar 
*/

for ($i = 1; $i <= 12; $i++) {
  echo 'Tabla del Numero ' . $i;
  echo '<table border="1">';
  for ($j = 0; $j <= 12; $j++) {
    $result = $j * $i;
    echo '<tr>
    <td style="width: 60px">' . $j . '</td>
    <td style="width: 60px">' . $i . '</td>
    <td style="width: 60px">' . $result . '</td>
    </tr>';
  }
  echo '</table>';
  echo '<hr/>';
}
