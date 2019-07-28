<?php
class usuarioController
{
  public function index()
  {
    echo 'Controlador Usuario, Acción index';
  }
  // No redirige, solo envia el codigo HTML y lo Agrega
  public function registro()
  {
    require_once 'views/usuario/registro.php';
  }
  // Registrar Usuario
  public function save()
  {
    if (isset($_POST)) {
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';
    }
  }
}
