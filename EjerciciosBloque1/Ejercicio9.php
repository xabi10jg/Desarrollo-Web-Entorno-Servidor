<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>
</head>
<body>

	<?php


	$ventas=rand(2000,100000);
	$comision=0;

	if($ventas<10000){

		$comision=$ventas*0.05;
		echo "Las ventas han sido de ".$ventas."€ por lo tanto con la comisión del 5% el vendedor gana ".$comision."€.";
	}
	else{
		if($ventas>=10000 && $ventas<20000){

			$comision=$ventas*0.08;
			echo "Las ventas han sido de ".$ventas."€ por lo tanto con la comisión del 8% el vendedor gana ".$comision."€.";
		}
		else{
			if($ventas>=20000 && $ventas<40000){

				$comision=$ventas*0.1;
				echo "Las ventas han sido de ".$ventas."€ por lo tanto con la comisión del 10% el vendedor gana ".$comision."€.";
			}
			else{

				$comision=$ventas*0.13;
				echo "Las ventas han sido de ".$ventas."€ por lo tanto con la comisión del 13% el vendedor gana ".$comision."€.";
			}
		}
	}

	?>

</body>
</html>