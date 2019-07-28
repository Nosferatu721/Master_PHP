<?php

function autoloadControllers($className)
{
  require_once 'controllers/' . $className . '.php';
}

spl_autoload_register('autoloadControllers');
