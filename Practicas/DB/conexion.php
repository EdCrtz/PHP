<?php
function conectar()
{
  $cons_usuario="root";
  $cons_contra="";
  $cons_base_datos="agenda";
  $cons_equipo="localhost";
  $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
  return $obj_conexion;
}
function LlenarRegistros(){
  $con=conectar();
  for ($i=746; $i <=2000; $i++) {
    $nombre=NombresRandom(2);
    $numero=rand(1,5);
    mysqli_query($con,"INSERT INTO agendatelefonica VALUES ($i, '$nombre',$numero, 'A')");
  }
}
function Busqueda($Columna,$Bus){
  $con=conectar();
  $res = $con->query("SELECT * FROM agendatelefonica WHERE $Columna=$Bus");
  while($f = $res->fetch_object())
  {
      echo "$f->Cve \t $f->Nombre \t $f->Tipo <br>";
  }
}
function Lectura(){
  $con=conectar();
  $res = $con->query("SELECT * FROM agendatelefonica");
  while($f = $res->fetch_object())
  {
      echo "$f->Cve \t $f->Nombre \t $f->Tipo <br>";
  }
}
?>
