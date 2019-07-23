<?php

/*
  Ejercicio 1. Crear una Session que aumente su valor en 1 o disminuya en 1 en funcion al parametro GET esta a 1 o 0
*/

session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
}

if (isset($_GET['count'])) {
  if ($_GET['count'] == 1) {
    $_SESSION['count']++;
  } elseif ($_GET['count'] == 0) {
    $_SESSION['count']--;
  } else {
    echo 'Error GET';
  }
}

?>
<h3>El valor de la session es : <?= $_SESSION['count']; ?></h3>
<a href="ejercicio1.php?count=1">Aumentar</a>
<a href="ejercicio1.php?count=0">Disminuir</a>