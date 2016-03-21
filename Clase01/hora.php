<?php
$hora = date("G");

if($hora >= 20 && $hora<= 24 || $hora >= 1 && $hora< 4  )
{
	echo "Es de noche";
}

elseif($hora >= 13 && $hora< 20)
{
	echo "Es de tarde";
}

elseif($hora >= 4 && $hora< 13)
{
	echo "Es de mañana";
}




?>