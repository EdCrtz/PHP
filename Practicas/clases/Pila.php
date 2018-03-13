<?php
class Pila
{
  private $pila;
  private $tope;
  public function __construct()
  {
    $this->tope=-1;
  }
  public function insertar($dato){
    $this->tope++;
    $this->pila[$this->tope]=$dato;
  }
  public function retirar(){
    if($this->vacia())
      return false;
    $aux=$this->pila[$this->tope];
    $this->tope--;
    return $aux;
  }
  public function vacia(){
    return $this->tope==-1;
  }
  public function cima()
  {
    if($this->vacia())
      return false;
    return $this->pila[$this->tope];
  }
}
 ?>
