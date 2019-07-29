<?php

class Database
{
  public static function conectar()
  {
    // Crear coneccion a base de datos con sus datos
    $db = new mysqli('localhost', 'root', '', 'tienda_master');
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}
