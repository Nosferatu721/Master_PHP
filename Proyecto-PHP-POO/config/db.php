<?php

class Database
{
  private $host = 'localhost';
  private $db = 'tienda_master';
  private $user = 'root';
  private $pass = '';
  
  public static function conectar()
  {
    // Creamos la conection a la DB
    $db = mysqli($this->host, $this->user, $this->pass, $this->db);
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}
