<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>

	<?php

	$numero= 5;
	$cantidad=500;
	$potencia=1;
	$i=1;
	
	while($potencia<=$cantidad){

		$potencia=pow($i,$numero);
		if ($potencia<=$cantidad){
		echo $i."-".$potencia."<br>";
		$i++;
	}
				}




	?>

</body>
</html>