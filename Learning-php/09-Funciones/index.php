<?php

/*
  Funciones -> Una funcion es un conjunto de instrucciones agrupadas bajo un nombre en concreto
  y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos.

  function nombreFunction (Parameter){
    Code...
  }
*/

// Ejemplo 1
function muestraNombres()
{
  echo 'Elkin Torres <br/>';
  echo 'Kilian Torres <br/>';
  echo 'Nestor Torres <br/>';
  echo 'Ana Poveda <br/>';
}

// Invocar Function
muestraNombres();

function numDtal($num)
{
  echo '<h2> Tabla del ' . $num . '</h2>';
  for ($i = 0; $i <= 12; $i++) {
    $mul = $i * $num;
    echo '<li> ' . $num . ' x ' . $i . ' = ' . $mul . '</li>';
  }
}
numDtal(/*$_GET['n']*/5);

// Calculadora
function calculadora($n1, $n2 = 5)
{
  // Conjunto de instrucciones a ejecutar
  echo '<h2>Numeros ingresados: ' . $n1 . ' y ' . $n2 . '</h2>';
  // Operaciones
  $s = $n1 + $n2;
  $r = $n1 - $n2;
  $m = $n1 * $n2;
  $d = $n1 / $n2;
  // Imprimir Resultados
  echo '<p>La suma es: ' . $s . '</p>';
  echo '<p>La resta es: ' . $r . '</p>';
  echo '<p>La multiplicacion es: ' . $m . '</p>';
  echo '<p>La division es: ' . $d . '</p>';
}

calculadora(5, 10);

// Calculadora con Return
// Como se debe de hacer :v

function calculadoraConReturn($n1, $n2 = 5)
{
  // Conjunto de instrucciones a ejecutar
  // Se crea una variable para guardar todo el Codigo y retornarlo
  $cadena_code = "";
  // Guardamos todo el Codigo el la variable ( Concatenandola )
  $cadena_code .= '<h2>Numeros ingresados: ' . $n1 . ' y ' . $n2 . '</h2>';
  // Operaciones
  $s = $n1 + $n2;
  $r = $n1 - $n2;
  $m = $n1 * $n2;
  $d = $n1 / $n2;
  // Imprimir Resultados
  $cadena_code .= '<p>La suma es: ' . $s . '</p>';
  $cadena_code .= '<p>La resta es: ' . $r . '</p>';
  $cadena_code .= '<p>La multiplicacion es: ' . $m . '</p>';
  $cadena_code .= '<p>La division es: ' . $d . '</p>';
  // Al final retornamos la cadena de texto con todo el codigo
  return $cadena_code;
}
// Si la function tiene un return al invocar toca imprimirla con un ( echo )
echo calculadoraConReturn(6, 12);
