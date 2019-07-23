<?php
if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  echo $titulo . ' - ' . $descripcion;
} else {
  echo 'Prr se le olvido algun dato';
}
?>
<div class="">
  <a href="formulario.html">Volver</a>
</div>