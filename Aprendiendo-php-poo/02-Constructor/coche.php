<?php
// Programación Orientada a Objetos en PHP (POO)
// Definir clase
class Coche
{
  // Atributos o propiedas (variables)
  public $color;
  public $marca;
  public $modelo;
  private $velocidad;

  public function __construct($color, $marca, $modelo, $velocidad)
  {
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
  }

  public function getColor()
  {
    return $this->color;
  }
}
