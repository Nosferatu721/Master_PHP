<?php

// // Abrir Archivo
// $archivo = fopen("fichero_texto.txt", "a+");

// // Leer Archivo ( feof -> Cada linea del archivo)
// function mostrarArchivo($file)
// {
//   while (!feof($file)) {
//     // Tomar contenido del Archivo con ( fgets ) y guardarlo en una variable
//     $contenido = fgets($file);
//     echo $contenido . '<br/>';
//   }
// }
// mostrarArchivo($archivo);

// // Escribir dentro del archivo
// fwrite($archivo, "Nuevo texto desde PHP");
// mostrarArchivo($archivo);

// // Cerrar Archivo
// fclose($archivo);


// Copiar o clonar un archivo
// copy("fichero_texto.txt", "ficheroClonado.txt") or die("Error al copiar");

// Renombrar
// rename("NombreActual", "NombreNuevo");

// Eliminar Archivo
// unlink("Nombre del Archivo");
if (file_exists("ficheroClonado.txt")) {
  echo 'El archivo existe';
}