<?php
include("Db/conexion.php");
require 'metodos/Rutinas.php';
$con =conectar();
echo" se realizo correctamente la conexion a la base de datos <br>";
//Busqueda(rand(1,720));
//Leer tabla
//Lectura();
Busqueda('Tipo',4);
mysqli_close($con);

?>
