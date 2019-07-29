<?php
session_start();
// Cargar DB
require_once 'config/db.php';
// Cargamos todos los controladores necesarios
require_once 'autoload.php';
// Cargamos lo variables Absolutas
require_once 'config/parameters.php';
// Cargamos helpers :v
require_once 'helpers/utils.php';
// Incluimos los trozos de html
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

// Funcion para mostrar Error 404
function showError()
{
  $error = new errorController();
  $error->index();
}

// Comprobamos si existe un controlador
if (isset($_GET['controller'])) {
  // Guardo el controlador en una variable
  $nombre_controller = $_GET['controller'] . 'Controller';
  // Si no existe el controlador, colocamos uno por defecto
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
  $nombre_controller = controllerDefault;
} else {
  showError();
  exit();
}

// Conpruebo si existe la Clase
if (class_exists($nombre_controller)) {
  // Instanciamos un nuevo controlador
  $controller = new $nombre_controller();
  // Compruebo si existe un action por GET y si existe en el Controlador
  if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
    // Guardo la action en una variable
    $action = $_GET['action'];
    // Ejecuto la Peticion
    $controller->$action();
  } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $actionDefault = actionDefault;
    $controller->$actionDefault();
  } else {
    showError();
  }
} else {
  showError();
}

require_once 'views/layout/footer.php';
