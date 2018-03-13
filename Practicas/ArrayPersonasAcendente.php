<?php
require 'metodos/Rutinas.php';
require 'clases/Persona.php';
$Personas;
for ($i=0; $i <10000 ; $i++) {
  $Personas[$i]=new Persona(NombresRandom(2),rand(18,90),rand(60,90));
}
$Personas= quick_sort($Personas);
for ($i=0; $i <count($Personas); $i++) {
  echo $Personas[$i]."<br>";
}
?>
