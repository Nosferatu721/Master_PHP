<?php
/*
  Session -> Almacenar y persistir datos del usuario mientras que navega en un sitio web, hasta que cierra sesion o navegador
*/

// Iniciar Session
session_start();

$variable_normal = "Soy una cadena de texto";

// Variable SuperGlobal
// variable de Session
$_SESSION['variable_persistente'] = "Hola Soy Una Session Activa";

echo $variable_normal. '<br/>';
echo $_SESSION['variable_persistente']. '<br/>';
