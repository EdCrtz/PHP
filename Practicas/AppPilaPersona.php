<?php
require 'clases/Pila.php';
require 'metodos/Rutinas.php';
require 'clases/Persona.php';
$P = new Pila();
for ($i=0; $i < 1000; $i++) {
  $numero=rand(10,80);
  $P->insertar(new Persona(NombresRandom(2),rand(18,90),rand(60,90)));
}
echo "<br>";
while (!$P->vacia()) {
  echo $P->retirar()."<br>";
}
?>
