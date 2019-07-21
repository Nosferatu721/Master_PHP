<?php
// Arrays

$nombres = array('Elkin', 'Kilian', 'Ana', 'Nestor');
$apellidos = ['Torres', 'Poveda', 'Antonio', 'Casas'];

echo $nombres[2] . ' - ';
echo $apellidos[1];
echo '<hr/>';

// Recorrer Array con For
echo '<h3>Lista de nombres:</h3>';
echo '<ul>';
for ($i = 0; $i < count($nombres); $i++) {
  echo '<li> ' . $nombres[$i] . '</li>';
}
echo '</ul>';

// Recorrer con ForEach
foreach ($apellidos as $i) {
  echo $i . ' ';
}

// Arrays Asociativos
$persona = array(
  'nombre' => $nombres[0],
  'apellido' => $apellidos[0],
  'edad' => 18
);
echo $persona['edad'];
echo '<hr>';

// Arrays Multidimencionales
$contactos = [
  [
    'nombre' => 'Kilian Hernan Torres Poveda',
    'email' => 'kilianhernantorres@gmail.com',
    'edad' => 15
  ],
  [
    'nombre' => 'Ana Lucinda Poveda Casas',
    'email' => 'anapoveda276@gmail.com',
    'edad' => 50
  ],
  [
    'nombre' => 'Nestor German Torres Antonio',
    'email' => 'nestorresantonio@gmail.com',
    'edad' => 42
  ]
];

var_dump($contactos);
echo '<h3 style="color: orange">' . $contactos[1]['email'] . '</h3>';
echo '<hr>';

foreach ($contactos as $i => $cont) {
  echo '<h2 style="color: green">' . ($i + 1) . ' - ' . $cont['nombre'] . ' con el correo ' . $cont['email'] . ' y de edad ' . $cont['edad'] . '</h2>';
}
