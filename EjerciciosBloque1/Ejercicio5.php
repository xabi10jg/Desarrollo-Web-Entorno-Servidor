<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio5</title>
</head>
<body>
	<?php

	$edad= rand(1,60);
	$altura= rand(50,200);
	$compañia="si";

	if($edad>=10 || $altura>=120){
		echo "La persona que mide ".$altura."cm y tiene ".$edad." años, puede entrar al parque";
	}
	else{
		if($edad>=6 || $compañia=="si"){

			echo "La persona que mide ".$altura."cm y tiene ".$edad." años, puede entrar al parque";
		}
		else{
			echo "La persona que mide ".$altura."cm y tiene ".$edad." años, no puede entrar al parque";
	}
		}
		
	?>

</body>
</html>