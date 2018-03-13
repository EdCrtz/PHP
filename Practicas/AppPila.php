<?php
require_once 'clases/Pila.php';
$P = new Pila();
for ($i=0; $i < 10; $i++) {
  $numero=rand(10,80);
  echo $numero."<br>";
  $P->insertar($numero);
}
echo "<br>";
while (!$P->vacia()) {
  echo $P->retirar()."<br>";
}
?>
