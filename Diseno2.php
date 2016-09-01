<?php 

	$moneda = $_POST['moneda'];
	$cantidad = $_POST['cantidad'];
	$res;	
	$cambio = 28.55;
	

	if ($moneda == 2)
	{
		$res = $cantidad * $cambio;
	}

	else
	{
		if ($moneda == 1) 
		{
			$res = $cantidad / $cambio;
		}
	}

	echo "Tu tipo de cambio es:", $res;
 ?>