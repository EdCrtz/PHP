<?php
require 'clases/Persona.php';
require 'metodos/Rutinas.php';
$P= new Persona(NombresRandom(2),18,80);
echo $P."<br>";
$Hola = new Persona(NombresRandom(2),22,80);
echo $Hola;
?>
