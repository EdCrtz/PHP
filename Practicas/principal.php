<?php
include("Db/ConexionBD.php");
require 'metodos/Rutinas.php';
$conexion= new ConexionBD("root","","agenda","localhost");
$conexion->Consulta("agendatelefonica",'Tipo',4);
?>
