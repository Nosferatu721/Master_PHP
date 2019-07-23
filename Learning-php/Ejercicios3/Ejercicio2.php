<?php

/*
  Ejercicio 2
  -> Tener una function
  -> Recoger variable por GET y validarla
  -> Validar un email con filter_var
  -> Mostrar el resultado
*/

function validarEmail($email)
{
  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = 'El correo es valido';
  } else {
    $result = 'El correo no es valido';
  }
  return $result;
}

if (isset($_GET['email'])) {
  echo validarEmail($_GET['email']);
} else {
  echo 'Pasa correo por GET';
}