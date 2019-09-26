<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
	$numero1= rand(1, 1000);
	$numero2= rand(1, 1000);
	$numero3= rand(1, 1000);
	echo "Los números son ".$numero1.", ".$numero2." y ".$numero3.".<br>";

	if( $numero1>$numero2 && $numero1>$numero3){

		echo "El número ".$numero1." es el mayor";
	}
	
		elseif($numero2>$numero1 && $numero2>$numero3){

			echo "El número ".$numero2." es el mayor";
		}
		else{
			echo "El número ".$numero3." es el mayor";
		}
	
	?>

</body>
</html>