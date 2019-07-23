<?php

/*
  Ejercicio 3 -> Hacer una interfaz de usuario (form) con dos inputs y 4 buttons (+ - * /)
  Mostrar resultado en pantalla
*/

$resultado = false;
if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  $suma = $num1 + $num2;
  $resta = $num1 - $num2;
  $multiplicacion = $num1 * $num2;
  $division = $num1 / $num2;

  if (isset($_POST['sumar'])) {
    $resultado = 'La suma es: ' . $suma;
  } elseif (isset($_POST['restar'])) {
    $resultado = 'La resta es: ' . $resta;
  } elseif (isset($_POST['multi'])) {
    $resultado = 'La multiplicacion es: ' . $multiplicacion;
  } elseif (isset($_POST['dividir'])) {
    $resultado = 'La division es: ' . $division;
  }
}else{
  $resultado = 'Introduce numeros';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculadora</title>
</head>

<body>
  <form action="" method="POST">
    <h3>Calculadora</h3>
    <p>
      Numero 1: <input type="number" name="num1">
    </p>
    <p>
      Numero 2: <input type="number" name="num2">
    </p>
    <input type="submit" value="Sumar" name="sumar">
    <input type="submit" value="Restar" name="restar">
    <input type="submit" value="Multiplicar" name="multi">
    <input type="submit" value="Dividir " name="dividir">
  </form>
  <h2>
    <?php
    if ($resultado != false) :
      echo $resultado;
    endif;
    ?>
  </h2>
</body>

</html>