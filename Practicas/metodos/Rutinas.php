<?php
function NombresRandom($numero)
{
  $VN = array("Ana","Eduardo","Fernando","Juan","Fernanda","Omar","David","Paula","Emilio","Joana","Sofia","Jannet");
  $VA = array("Coppel","Cortez","Garcia","Sanchez","Vazquez","Clemente","Barron","Valenzuela","Barraza","Torres","Rodriguez","Meza");
  $Sexo = array(false,true,true,true,false,true,true,false,true,false,false,false);
  for ($i=0; $i<$numero; $i++) {
    $Escogido=rand(0,count($VN)-1);
    if($i==0)
    {
      $Nombre=$VN[$Escogido];
      $Sexualiad=$Sexo[$Escogido];
    }
    else
      if(strrpos($Nombre,$VN[$Escogido])===false&&$Sexualiad==$Sexo[$Escogido])
        $Nombre="$Nombre $VN[$Escogido]";
      else
        $i--;
  }
  for ($i=0; $i < 2; $i++) {
    $Escogido=rand(0,count($VA)-1);
    $Nombre="$Nombre $VA[$Escogido]";
  }
  return $Nombre;
}
function NombresRandomSex($can, $sex){
  
}
function quick_sort($array)
{
	$length = count($array);
	if($length <= 1)
		return $array;
	$pivot = $array[0];
	$left = $right = array();
	for($i = 1; $i < count($array); $i++)
	{
		if(strcmp($array[$i], $pivot)<0)
			$left[] = $array[$i];
		else
			$right[] = $array[$i];
	}
	return array_merge(quick_sort($left), array($pivot), quick_sort($right));
}
?>
