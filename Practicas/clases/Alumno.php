<?php
class Alumno{
  private $nocontrol;
  private $nombre;
  private $edad;
  private $calif;
  public function __construct($nocontrol,$nombre,$edad,$calif)
  {
    $this->nocontrol=$nocontrol;
    $this->nombre=$nombre;
    $this->edad=$edad;
    $this->calif=$calif;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getCalif(){
    return $this->calif;
  }
  public function getNocontrol(){
    return $this->nocontrol;
  }
  public function getEdad()
  {
    return $this->edad;
  }
  public function __toString()
  {
    return " No.Control: $this->nocontrol \t Nombre: $this->nombre \t Edad: $this->edad \t Prom $this->calif";
  }
}
?>
