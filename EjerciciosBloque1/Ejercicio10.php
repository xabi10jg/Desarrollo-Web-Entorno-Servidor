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
		else{
			if($total_compra>19 && $tipo_compra<40){

				echo "Los gastos de envio son 9 euros."
			}
			else{
				echo "No hay gastos de envio."
			}


				
		}
	}

		if($tipo_compra=="mascota"){
			echo "El precio final ha sido "$total_compra*1.1;
		}
		else{
			echo "El precio final ha sido "$total_compra*1.21;
		}
		}

	?>

</body>
</html>