<?php

/*
 Variables Locales -> Son las que se definen dentro de una function y no pueden ser
 usadas fuera de ellas, a no ser que se retornen en ( return $var )
 Variables Globales -> Son las que se declaran fuera de una function y estan disponibles
 para cualquier function.
*/

// Creo la variable global
$frase = "Alguna Frase Bla Bla Bla";

function imprimirF(){
  // Para poder usar una variable Global en la function se usa ( global )
  global $frase;
  // Despues de llamar la variable se puede usar
  echo $frase;
}

imprimirF();
