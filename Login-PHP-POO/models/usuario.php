<?php
include 'cargo.php';
class Usuario
{
  private $id;
  private $nombre;
  private $apellido;
  private $password;
  private $idCargo;
  private $idRestaurante;

  function getId()
  {
    return $this->id;
  }
  function getNombre()
  {
    return $this->nombre;
  }
  function getApellido()
  {
    return $this->apellido;
  }
  function getPassword()
  {
    return $this->password;
  }
  function getIdCargo()
  {
    return $this->idCargo;
  }
  function getIdRestaurante()
  {
    return $this->idRestaurante;
  }

  public function save()
  { }
}
