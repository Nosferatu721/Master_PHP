<?php

class usuarioController
{
  public function index()
  {
    echo 'Controlador usuario acción index';
  }

  public function login()
  {
    require_once 'views/login.php';
  }

  public function save()
  {
    if (isset($_POST)) {
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';
    }
  }
}
