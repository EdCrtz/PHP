<?php
function Pares($numero)
{
  if($numero!=1)
   Pares($numero-1);
  if($numero%2==0)
   echo "$numero <br>";
}
Pares(40);
?>
