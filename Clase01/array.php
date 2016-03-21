<?php

$numnaturales;

for($i = 0; $i<10; $i++)
{
	$numnaturales[$i] = $i+1;
}

$media = 0;
$cont = 0;
for($i = 0; $i<10; $i++)
{
	if($numnaturales[$i] % 2 == 0)
	{
		$media+= $numnaturales[$i];
		$cont++;
	}
	else
	{
		echo $numnaturales[$i]." ";
	}
}
echo "La media es :". $media/$cont;



?>