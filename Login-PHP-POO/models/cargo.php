<?php

class Cargo
{
  private $id;
  private $cargo;

  // Get
  function getId()
  {
    return $this->id;
  }
  function getCargo()
  {
    return $this->cargo;
  }
  // Set
  function setId($id)
  {
    $this->id = $id;
  }
  function setCargo($cargo)
  {
    $this->cargo = $cargo;
  }
}
