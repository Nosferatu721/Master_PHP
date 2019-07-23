<?php

// Para mostrar una Cookie se usa la variables superglobal

if (isset($_COOKIE)) {
  echo '<h3>' . $_COOKIE['miCookie'] . '</h3>';
  echo '<h3>' . $_COOKIE['yearCookie'] . '</h3>';
}
?>
<a href="borrar_cookies.php">Eliminar Cookie</a>