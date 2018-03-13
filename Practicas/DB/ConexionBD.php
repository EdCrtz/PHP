<?php
class ConexionBD
{
  private $usuario;
  private $contra;
  private $basedatos;
  private $equipo;
  private $conexion;
  function __construct($usuario,$contra,$basedatos,$equipo){
    $this->usuario=$usuario;
    $this->contra=$contra;
    $this->basedatos=$basedatos;
    $this->equipo=$equipo;
    $this->conexion = mysqli_connect($equipo,$usuario,$contra,$basedatos);
  }
  function getConexion(){
    return $this->conexion;
  }
}
?>
