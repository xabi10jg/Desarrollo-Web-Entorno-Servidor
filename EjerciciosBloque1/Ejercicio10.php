<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 10</title>
</head>
<body>

	<?php

	$total_compra=rand(1,100);
	$tipo_compra="mascota";

	if($total_compra<19 && $tipo_compra=="mascota"){

		echo "No se puede realizar el envio";
	}
	else{
		if($total_compra<19 && $tipo_compra=="ropa"){

			echo "Los gastos de envio son 9 euros."
		}
	}

	?>

</body>
</html>