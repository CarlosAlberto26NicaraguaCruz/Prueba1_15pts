<?php 

	$pesar = $_POST['pesar'];
	$alto = $_POST['alto'];
	$cantidad = $alto * $alto;

	$calculo = $pesar / $cantidad;

	echo "EL Indice de masa corporal es de: ", $calculo;

 ?>