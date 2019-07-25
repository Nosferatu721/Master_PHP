<?php
// Programación Orientada a Objetos en PHP (POO)
// Definir clase
class Coche
{
  // Atributos o propiedas (variables)
  public $color = "red";
  public $marca;
  public $modelo;
  private $velocidad;

  public function getColor(){
    return $this->color;
  }
  // Metodos, son acciones de la clase
}

// Instanciar Clase
$coche = new Coche();

echo $coche->getColor();
print_r($coche);