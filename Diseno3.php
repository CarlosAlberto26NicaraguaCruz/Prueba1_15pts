<?php 

	$h = $_POST['horas'];


$ph = 45;
$completo = $h * $ph;

$inss = $completo * 0.15;

$ir = $completo * 0.06;

$total = $completo - $inss - $ir;


echo "El pago por hora es: ", $ph;
echo "<br>";
echo "EL pago sin deducciones es: ", $completo;
echo "<br>";
echo "La reduccion de Inss es: ", $inss;
echo "<br>";
echo "La reduccionn de Ir es: ", $ir;
echo "<br>";
echo "El pago total es de:", $total;
 ?>