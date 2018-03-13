<?php
$Alumnos;
require 'metodos/Rutinas.php';
require 'clases/Alumno.php';
for ($i=0; $i <1000 ; $i++):
  $cve=NombresRandom(2);
  $Alumnos[$i]=new Alumno(rand(100000,1000000),$cve,rand(18,24),rand(0,100));
endfor;
for ($i=0; $i < count($Alumnos); $i++):
  echo $Alumnos[$i]."<br>";
endfor;
?>
