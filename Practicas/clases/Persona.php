<?php
class Persona
{
  private $nombre;
  private $edad;
  private $peso;
  public function __construct($nombre,$edad,$peso){
    $this->nombre=$nombre;
    $this->edad=$edad;
    $this->peso=$peso;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setPeso($peso){
    $this->peso=$peso;
  }
  public function setEdad($edad){
    $this->edad=$edad;
  }
  public function getPeso(){
    return $this->peso;
  }
  public function __toString(){
    return"Nombre: $this->nombre |Edad: $this->edad |Peso: $this->peso";
  }
}
?>
