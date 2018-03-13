<?php
class ConexionBD
{
  private $usuario;
  private $contra;
  private $basedatos;
  private $equipo;
  private $conexion;
  public function __construct($usuario,$contra,$basedatos,$equipo){
    $this->usuario=$usuario;
    $this->contra=$contra;
    $this->basedatos=$basedatos;
    $this->equipo=$equipo;
    $this->conexion = mysqli_connect($equipo,$usuario,$contra,$basedatos);
  }
  public function getConexion(){
    return $this->conexion;
  }
  public function Consulta($Table, $ID, $Bus)
  {
    $res = $this->conexion->query("SELECT * FROM $Table WHERE $ID=$Bus");
    $resultado= $this->conexion->query("SHOW COLUMNS FROM $Table");
    if (!$resultado) {
        echo 'No se pudo ejecutar la consulta';
        exit;
    }
    if (mysqli_num_rows($resultado) > 0) {
      $p=0;
      while ($Columna = mysqli_fetch_assoc($resultado)) {
        $array[$p] = $Columna['Field'];
        $p++;
      }
      while ($fila = mysqli_fetch_assoc($res))
      {
        for ($i=0; $i <count($array); $i++) {
          echo $fila[$array[$i]]."    ";
        }
        echo "<br>";
      }
    }
  }
}
?>
