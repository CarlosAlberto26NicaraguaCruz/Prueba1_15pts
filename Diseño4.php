<?php 
	$Distancia = $_POST['recorrido'];

	if(!empty($_POSTrecorrido
		$cm=$_POST['centimetro'];
		echo "La cantidad en cm es:";
		echo $recorrido.' centimetro';
		echo '<br>';
	               }

	               if (!empty($_POST['pulgadas'])){
		              $pul=$_POST['pulgadas'];
		               echo "La cantidad en pulgadas es:";
		                echo ($recorrido/2.5).' pulgadas';
		                  echo '<br>';
	                                  }
	                                  if(!empty($_POST['metros'])){
		                                   $mt=$_POST['metros'];
		                                    echo "Equivale a:";
		                                      echo ($recorrido/100).' metros';
		                                         echo '<br>';
	                                             }
	                       if(!empty($_POST['kilometros'])){
		               $km=$_POST['kilometros'];
		             echo "La cantidad en kilometros es:";
		          echo ($recorrido/100000).' kilometros';
	}

?>