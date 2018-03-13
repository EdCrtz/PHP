<?php
include 'clases/Pila.php';
$pila = new Pila();
for ($i=0; $i < 10; $i++) {
  $pila->insertar(rand(10,20));
  echo $pila->cima()."<br>";
}
$mayor = $pila->retirar();
while (!($pila->vacia())) {
  if($pila->cima()>$mayor)
    $mayor = $pila->retirar();
  else
    $pila->retirar();
}
echo" El mayor es: $mayor";
?>
