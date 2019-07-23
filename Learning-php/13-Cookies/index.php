<?php

/*
  Cookie es un fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar datos del usuario o rastrear el comportamiento del mismo en la web
*/

// Crear Cookie
// setcookie("nombre", "Valor que solo puede ser texto", cadicudad, ruta, dominio);

// Cookie basica
setcookie("miCookie", "Valor de mi galleta");

// Cookie con expiracion
setcookie("yearCookie", "Cookie de 365 días", time() + (60 * 60 * 24 * 365));

?>
<a href="ver_cookies.php">Ver las Cookies</a>