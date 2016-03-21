<?php

$fechactual = date("m");
switch(substr($fechactual,0,2))
{
	case "12": echo "Es verano";
	break;
	case "01": echo "Es verano";
	break;
	case "02": echo "Es verano";
	break;
	case "03": echo "Es Otoño";
	break;
	case "04": echo "Es Otoño";
	break;
	case "05": echo "Es Otoño";
	break;
	case "06": echo "Es invierno";
	break;
	case "07": echo "Es invierno";
	break;
	case "08": echo "Es invierno";
	break;
	case "09": echo "Es primavera";
	break;
	case "10": echo "Es primavera";
	break;
	case "11": echo "Es primavera";
	break;
	default: echo "error";
	break;
}

?>